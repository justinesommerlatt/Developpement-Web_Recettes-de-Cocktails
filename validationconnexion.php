<?php
$fileUsers = fopen("data/users")
while(!feof($fileUsers)){
	$chaine = fgets($fileUsers);
	if($_POST['login'] = $chaine){
		$chaine = fgets($fileUsers);
		if($_POST['mdp'] = $chaine){
			$_SESSION['login'] = $_POST['login'];
		}
	}
}

?>