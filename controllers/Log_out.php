<?php 
namespace controllers; 
use \classes\Db as Db;
use \PDO as PDO;
class Log_out extends Controller 
{
    function __construct() 
    { 
        parent::__construct(); 
        session_destroy();
        session_start();
        $this->setMsg("<b>Successful</b> Log out!", "success");
        header("location: /Home/");
        exit();
    } 
}
