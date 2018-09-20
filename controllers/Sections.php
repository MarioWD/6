<?php 
namespace controllers; 
use \classes\Db as Db;
use \PDO as PDO;

class Sections extends Controller 
{
    function __construct() 
    {
        parent::__construct(); 

        $this->db = Db::getInstance()->rawPDO();
        $res = $this->db->prepare("SELECT * FROM sections");
        $res->execute();
        $this->sections = $res->fetchAll(PDO::FETCH_ASSOC);
        if (!$this->verify)
        {
            $this->setMsg("<strong>Danger!</strong> you are not authorized to view this page.", 'danger');
            header('location: /');
            exit();
        }
        $this->run(); 
    } 
}
