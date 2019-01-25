<?php
class MenuController
{
  public function httpGetMethod(Http $http, array $queryFields)
  {
    $g = new MenuModel;
    return ['menu' => $g -> getMenu()];
  }

  public function httpPostMethod(Http $http, array $formFields)
  {
    $p = new PanierModel;{
    $p -> createPanier();
    if (!isset($_POST['quantité'])){
      var_dump('test2');
    $p -> AjouterAuPanier();
  }
}

  }
}
