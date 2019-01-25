<?php
class PanierModel
{
  public function CreatePanier()
  {
    $e = new UserSession();
    $_SESSION['panier'] = array();
    $_SESSION['panier']['id'] = array();
    $_SESSION['panier']['qte'] = array();
    $_SESSION['panier']['prix'] = array();
    return  $_SESSION;
  }

  public function AjouterAuPanier()
  {
      $quantite = $_POST['quantité'];
      var_dump($quantite);
      $e = new UserSession();
      $g = new MenuModel;
      $menu = $g -> getMenu();
      $select = array();
      $select['id'] = $menu[0]['id'] ;
      $select['qte'] = $quantite;
      $select['prix'] = $menu[0]['prix'];
      array_push($_SESSION['panier']['id'],$select['id']);
      array_push($_SESSION['panier']['qte'],$select['qte']);
      array_push($_SESSION['panier']['prix'],$select['prix']);
      var_dump('test1');



    }
  }

/*     $db = new Database();
    $sql = "SELECT *
  					FROM   menu";
    $req = $db->query($sql);
    */
