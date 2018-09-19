<?php 
namespace controllers; 
use \classes\Db as Db;
use \PDO as PDO;
class Blogger extends Controller 
{
    function __construct() 
    { 
        $this->db = Db::getInstance()->rawPDO();
        parent::__construct(); 
        $this->run(); 
        if (!$this->verify)
        {
            $this->setMsg("<strong>Danger!</strong> you are not authorized to view this page.", 'danger');
            header('location: /');
            exit();
        }
    } 
}
