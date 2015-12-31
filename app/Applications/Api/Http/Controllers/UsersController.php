<?php 

namespace Matrix\Applications\Api\Http\Controllers;

use Matrix\Domains\Users\UsersRepository;

/**
* UsersController for Api
*/



class UsersController extends BaseController
{

  /**
   * @param UsersRepository $users
   */
  public function __construct(UsersRepository $users)
  {

    $this->users = $users;

  }

  public function index(){

    return $this->users->getAll(true, 10);

  }

}