<?php
namespace Controllers;

use Models\Usuario as User;
use Modules\View;
use Modules\Helpers\Redirect;

class LoginController
{
  public function index()
  {
    View::render('auth/login', ['title'=>'login']);
  }

  public function login()
  {
    $user = new User();
    var_dump($user->select("*"));
  }
}