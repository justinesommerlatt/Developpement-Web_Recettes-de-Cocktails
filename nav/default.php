<?php
    include("data/Donnees.inc.php");
    if (!(isset($_GET['ingredient']))){
          $ListeAliment = $Hierarchie['Aliment']['sous-categorie'];
      }
      else{
          if (array_key_exists('sous-categorie', $Hierarchie[$_GET['ingredient']])){
              $ListeAliment = $Hierarchie[$_GET['ingredient']]['sous-categorie'];
          }
      }
?>

<label for="aliment_select">Navigation : </label>

<form action=# method="get">
    <select name="ingredient">
        <option value="">Choisissez un ingrédient</option>
        <?php
            foreach ($ListeAliment as $val) {
                 echo '<option value="'.$val.'" name='.$val.'>'.$val.'</option>';
             }
        ?>
    </select>
    <input type="submit">
</form>