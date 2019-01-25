<?php
class MenuModel
{
	public function getMenu()
{
	$db = new Database();
	$sql = "SELECT id,
							   prix,
								 quantité,
								 nom,
								 description,
								 photo
					FROM   menu";
		$req = $db->query($sql);
		return $req;
	}
}
	?>
