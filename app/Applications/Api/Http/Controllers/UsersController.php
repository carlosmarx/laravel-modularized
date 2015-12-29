<?php 

namespace Matrix\Applications\Api\Http\Controllers;

use Matrix\Domains\Users\User;
/**
* UsersController for Api
*/
class UsersController extends BaseController
{

  public function index(){

    return User::query()->get();

  }

}