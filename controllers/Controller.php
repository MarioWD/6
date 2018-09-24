<?php
namespace controllers;
use \classes\Config as Config;
use \classes\Db as Db;
use \PDO as PDO;
class Controller
{
	protected $model, $page, $view, $get, $post, $viewable, $proccessable;
	protected $calculatetable, $hasModel, $dBase;
	protected $authorized_to_view;
	protected $_auth, $_user;

	function __construct()
	{
		$this->_sanitizeInputs($_GET, $_POST);
		$this->setup();
	}
	private function _sanitizeInputs($get = array(), $post = null)
	{
		foreach($get as $getKey => $getVal)
		{
			$getKey = escape($getKey);
			$getVal = escape($getVal);
			unset($get[$getKey]);
			$get[$getKey] = $getVal;
		}

		foreach($post as $postKey => $postVal)
		{
			$postKey = escape($postKey);
			$postVal = escape($postVal);
			unset($post[$postKey]);
			$post[$postKey] = $postVal;
		}
		unset($_GET);
		unset($_POST);
		$this->get = $get;
		$this->post = $post;
	}
	private function setup()
	{
		$this->page = new \ReflectionClass($this);
		$this->view = $this->page->getShortName();
		$this->viewable = file_exists(__VIEW__.$this->view.".php");
		$this->proccessable = file_exists(__PROCESS__.$this->view.".php");
        $db = Db::getInstance()->rawPDO();
        if (isset($_SESSION['ui-hash']))
        {
            $res = $db->query('SELECT * FROM users WHERE email=\''.$_SESSION['ui-mail'].'\' AND hash=\''.$_SESSION['ui-hash'].'\' AND role=1');
            $res->execute();
            $res = $res->fetch(PDO::FETCH_ASSOC);
            if ($res)
            {
                $this->verify = 1;
            }
        }
        $res = $db->prepare("SELECT * FROM sections WHERE name=?");
        $res->execute([$this->view]);
        $this->banner_data = $res->fetch(PDO::FETCH_ASSOC);
	}
	private function loadView()
	{
		require_once(HEAD);
		require_once(HEADER);
		$this->printMsgs();
		if($this->viewable)
		{
			require_once(__VIEW__.$this->view.".php");
		}
		else
		{
			require_once(_404);
		}
		require_once(FOOTER);
		require_once(FOOT);
	}
	protected function loadModel($model = false)
	{
		$model_name = ($model)? $model: $this->view;
		if($this->hasModel = file_exists(__MODEL__.$model_name.".php"))
		{
			$modelInit = "\\".__MODELS__.$model_name;
			return new $modelInit();
		}
		return false;
	}
	protected function postProcess($process = false)
	{
		$process_name = ($process)? $process: $this->view;
		include(__PROCESS__.$process_name.".php");
	}
	protected function run()
	{
		if(!empty($this->post) && $this->proccessable)
		{
			$this->postProcess();
		}
		$this->loadView();
	}
	protected function loadPartial($view = "")
	{
		if(file_exists(__VIEW__.$view.".php"))
		{
			require_once(__VIEW__.$view.".php");
		}
		else
		{
			require_once(_404);
		}
	}
	protected function setMsg($msg, $type="warning")
	{
		$_SESSION["msg"][$type][] = $msg;
	}
	protected function printMsgs()
	{
		if(!empty($_SESSION["msg"]))
		{
			foreach($_SESSION["msg"] as $type => $msgs)
			{ ?>
                <div class="alert alert-<?=$type?> alert-dismissible" role="alert" style='margin-bottom: 30px;'>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <?=implode("<br>", $msgs)?>
                </div>
                <?php
                unset($_SESSION["msg"]);
			}
		}
	}
}
