<?php
class ConnexionController
{
  public function httpGetMethod(Http $http, array $queryFields)
  {

  }
  public function httpPostMethod(Http $http, array $formFields)
  {
    if (isset($formFields['mdp']) && (isset($formFields['nom_de_compte'])))
    {
      $g = new ConnexionModel();
      $user = $g -> Recup($formFields);
    }
      if ((new Connexion())->verifMdp($formFields['mdp'],$user['mdp'])) {
        $e = new UserSession();
        $e -> create($user['id'],$user['prenom'],$user['nom']);
      }
    }
  }
