<?php
namespace controllers;
use \classes\Db as Db;
use \PDO as PDO;

class Blog extends Controller
{
  function __construct()
  {
    parent::__construct();
    $this->db = Db::getInstance()->rawPDO();

    $res = $this->db->prepare("SELECT * FROM blog where id = ?");
    $res->execute([$this->get['bi']]); 
    $this->blog = $res->fetch(PDO::FETCH_ASSOC);
    $this->blog['images'] = unserialize($this->blog['images']);
    $this->blog_count = count($this->blog['images']);

    $this->run();
  }
}
