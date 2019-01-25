
<?php
class ConnexionModel
{
  /**
   * Vérification de l'existence d'un utilisateur
   * 
   * @param array $formFields [description]
   */
  public function Recup(array $formFields){
    $pseudo = $formFields['nom_de_compte'];
    $mdp = $formFields['mdp'];

    $db = new Database();

    $sql = 'SELECT *
    FROM user
    WHERE nom_de_compte = ? ';

    $hash= $db->queryOne($sql, [$pseudo]);
    return $hash;

  }
}
