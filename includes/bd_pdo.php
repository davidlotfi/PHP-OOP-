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
    function count_all_photo(){
      $reponse = find_all_photo();
      return $reponse->rowCount(); ;
    }
    function find_by_sql($sql=""){
      global $bdd;
      return $bdd->query($sql);
    }

?>
