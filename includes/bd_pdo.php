<?php
  // with PDO extension database
  try {

    $bdd = new PDO('mysql:host=localhost;dbname=photo_gallery','root','');

     } catch (Exception $e) {

         die('Erreur :'.$e->getMessage());
   }

    function find_all_photo(){
      global $bdd;
      return $bdd->query('SELECT * FROM photographs');
    }


?>
