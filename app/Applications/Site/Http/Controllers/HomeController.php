<?php 

namespace Matrix\Applications\Site\Http\Controllers;

use Matrix\Domains\Users\UsersRepository;

/**
* UsersController for Api
*/
class HomeController extends BaseController
{

  public function index(UsersRepository $users){

    $users = $users->getAll(false, null);

    return $this->view('home', compact('users'));

  }

}