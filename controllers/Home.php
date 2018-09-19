<?php
namespace controllers;
use \classes\Db as Db;
use \PDO as PDO;

class Home extends Controller
{
  function __construct()
  {
    $db = Db::getInstance()->rawPDO();
    $res = $db->prepare("SELECT * FROM blog");
    $res->execute(); 
    echo '<pre>';
    var_dump($res->fetchAll(PDO::FETCH_OBJ));
    echo '</pre>';


    parent::__construct();
    $this->run();
  }
}
