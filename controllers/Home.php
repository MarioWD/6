<?php
namespace controllers;
use \classes\Db as Db;
use \PDO as PDO;

class Home extends Controller
{
  function __construct()
  {
    parent::__construct();
    for ($month = 1; $month <= 12; $month++) 
    {
        $first_minute = mktime(0, 0, 0, $month, 1);
        $last_minute = mktime(23, 59, 59, $month, date('t', $first_minute));
        $times[$month] = array($first_minute, $last_minute);
    }
    $this->months = $times;
    $this->month = $times[date('n')];
    $this->db = Db::getInstance()->rawPDO();

    $res = $this->db->prepare("SELECT * FROM blog where UNIX_TIMESTAMP(timestamp) BETWEEN ? AND ?");
    $res->execute($this->month); 

    $this->blogs = $res->fetchAll(PDO::FETCH_ASSOC);
    $this->getBlogsLayout();

    $this->run();
  }

  function getBlogsLayout()
  {
    $num_blogs = count($this->blogs);
    $this->per_column = ceil($num_blogs/4);
  }
}
