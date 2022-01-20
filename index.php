<?php 
    session_start();
    include "data/Donnees.inc.php";
    if(!isset($_SESSION['location'])){
    	$_SESSION['location'] = "default";
    }

    if(!isset($_SESSION['login'])){
    	$_SESSION['login'] = 'anon';
    }

    if(isset($_POST['location'])){
    	$_SESSION['location'] = $_POST['location'];
    }


 	$ListeHierarchie = array_keys($Hierarchie);
?>

<!DOCTYPE html>
<html>

    <head>
        <title>NOM DU SITE</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" type="text/css"
            media="screen" />
    </head>

    <body>
        <header>
            <?php include "header/" . $_SESSION['location']. ".php"; ?>
        </header>
        <nav>
            <?php include "nav/" . $_SESSION['location'] . ".php"; ?>
        </nav>
        <main>
            <?php include "main/" . $_SESSION['location'] . ".php"; ?>
        </main>
        <footer>
            <?php include "footer/" . $_SESSION['location'] . ".php"; ?>
        </footer>
    </body>
</html>