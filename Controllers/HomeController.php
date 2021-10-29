<?php

namespace Controllers;

use Models\Note;

class HomeController extends Controller
{
  /**
   * HomeController constructor.
   */
  public function __construct()
  {
    // Vérifie si l'utilisateur est connecté sinon redirection
    $this->authRequired();
  }

  /**
   * Affiche une vue.
   * "index" (convention d'écriture) Méthode par défaut d'appel d'un controleur
   */
  public function index()
  {
    $note = new Note();
    $notes = $note->userNotes($this->getCurrentUserId());

    $this->view('home.php', [
      'notes' => $notes,
    ]);
  }

}
