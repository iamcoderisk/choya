<?php

namespace App\Controllers;
use Codefii\Controller\BaseController;
abstract class Controller extends BaseController
{
  public function init(){
    $this->setHeader("includes/header");
    $this->setHeader("includes/footer");
  }


}
