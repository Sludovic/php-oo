<?php

/**
 *
 */
class Utilisateur
{
  protected $nom;
  protected $email;
  protected $identifant;
  protected $prenom;
  protected $role;
  protected $presentation;
  protected $avatar;
  protected $mot_de_passe;

  function __construct()
  {
    // code...
  }

  public function AjoutUtilisateur(){
    // Enregistrement des données en base de données
    return 'Mon Utilisateur a été ajouté !';
  }

  public function SuppressionUtilisateur(){

  }

  public function ModificationUtilisateur(){

  }

}
