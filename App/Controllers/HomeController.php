<?php 
namespace App\Controllers;
use App\Controllers\Controller;

/**
 * @author Clinton Nzedimma
 */
class HomeController extends Controller
{
	 public function index()
	 {
	 	return $this->view(["home", "includes/partial"], 
	 		['title'=>'TESTING']);

	 }
}


?>