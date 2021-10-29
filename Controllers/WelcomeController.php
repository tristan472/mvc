<?php

namespace Controllers;

use Models\User;

class WelcomeController extends Controller
{
  /**
   * Affiche une vue.
   * "index" (convention d'écriture) Méthode par défaut d'appel d'un controleur
   *
   * @return void
   */
  public function index()
  {
    $user=new User();
    $user->find($id=1);
    dd($user);

    $this->view('index.php', [
      'test' => 'Mon texte',
      'var' => 45,
    ]);
  }
}
