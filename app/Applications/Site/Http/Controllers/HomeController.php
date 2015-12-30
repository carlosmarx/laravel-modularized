<?php 

namespace Matrix\Applications\Site\Http\Controllers;

use Matrix\Domains\Users\User;
/**
* UsersController for Api
*/
class HomeController extends BaseController
{

  public function index(){

    return $this->view('home');

  }

}