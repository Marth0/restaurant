<?php
/**
 * [Connexion description]
 */
class Connexion {
  /**
   * Verification du bon mdp
   * @param  [type] $mdp  [description]
   * @param  [type] $hash [description]
   * @return [type]       [description]
   */
  public function  verifMdp($mdp,$hash){
    return password_verify($mdp, $hash);
  }
}
