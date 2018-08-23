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
	 		['title'=>'Welcome To Choya']);
	 }

	 public function login () 
	 {
	 	return $this->view(["login", "includes/partial"], 
	 		['title'=>'Sign In to Choya account']);
	 }

	 public function signup () 
	 {
	 	return $this->view(["signup", "includes/partial"], 
	 		['title'=>'Sign up to Choya']);
	 }	 
}


?>