<?php
class inscriptionModel
{
  public function create(
    $nom,
    $prenom,
    $nom_de_compte,
    $mdp,
    $telephone
  )
    {
      $sql = "INSERT INTO user
      (
        nom,
        prenom,
        nom_de_compte,
        mdp,
        telephone
      ) VALUES (?, ?, ?, ?, ?)";
      $database = new Database();
      $database->executeSql($sql,
      [
        $nom,
        $prenom,
        $nom_de_compte,
        $mdp,
        $telephone,
      ]);
      $flashBag = new FlashBag();
      $flashBag->add('Votre inscription est reussie, nous vous en remercions.');
    }
  }
