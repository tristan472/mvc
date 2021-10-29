<?php

namespace Controllers;

class LoginController extends Controller
{
  /**
   * Affiche une vue.
   * "index" (convention d'écriture) Méthode par défaut d'appel d'un controleur
   *
   * @return void
   */
  public function index()
  {
    $this->view('login.php', [
      'test' => 'Mon login !',
      'var' => 45,
    ]);
  }

  public function login()
  {
    // ...

    // $this->session()['id'] = ...;
  }
}
