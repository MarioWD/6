<?php
namespace classes{
use \classes\Config as Config;
    class Route
    {
        private $_controller;
        private $_method, $_role;

        public function __construct()
		{
            $this->_setController();
        }
        private function _setController()
        {
            $potentialClass = is_file(__CONTROLLER__.$_GET['controller'].".php")?$_GET['controller']:'Home';
            unset($_GET['controller']);

		$this->_controller =  $potentialClass;
            $this->_renderController();
        }
        private function _renderController()
        {
          $controllerName = __CONTROLLERS__.$this->_controller;
          new $controllerName();
        }
    }
}
