<?php
namespace controllers;
class Home extends Controller
{
  function __construct()
  {
    parent::__construct();
    $this->gal_imgs = scandir('images');
    $this->gal_count = count($this->gal_imgs) - 2;
    $this->gal_columns = 4;
    $this->gal_per_column = ceil($this->gal_count/$this->gal_columns);
    $this->gal_counter = 1;
    $this->run();
  }
}
