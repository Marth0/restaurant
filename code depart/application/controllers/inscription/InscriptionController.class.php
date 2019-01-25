<?php
class InscriptionController
{
  public function httpGetMethod(Http $http, array $queryFields)
  {

  }

  public function httpPostMethod(Http $http, array $formFields)
  {
  $g = new inscriptionModel();
  $g -> create(
               $formFields['nom'],
               $formFields['prenom'],
               $formFields['nom_de_compte'],
               password_hash(($formFields['mdp']),PASSWORD_DEFAULT),
               $formFields['telephone']
              );
  }
}
