<h1>NOM DU SITE</h1>
    <form action = "header/verif-form.php" method = "post">
       <input type = "search" name = "terme">
       <input type = "submit" name = "s" value = "Rechercher">
    </form>
<?php 
    if($_SESSION['login'] == "anon"){
           echo '    <form id="connexion" method="post">
                      <div class="button">
                           <button type="submit">Connexion</button>
                           <input type="hidden" name="location" value="connexion">
                    </div>
                </form>'; 
    } 
    else { 
        echo '    <form id="deconnexion" method="post">
                      <div class="button">
                           <button type="submit">Déconnexion</button>
                           <input type="hidden" name="login" value="anon">
                    </div>
                </form>'; 
    } 
?>

<input type="button" value=Panier />