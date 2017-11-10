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
    $user = $user->select("*", $_POST['user']);
    if(!empty($user) && !is_null($user))
    {
      $_SESSION['user'] = $user;
      Redirect::route('/');
    }else{
      Redirect::route('/login');
    }
  } 

  public function logout()
  {
    $_SESSION['user'] = null;
    Redirect::route('/');
  }
}