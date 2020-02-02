<?php
  require_once("../includes/config.php");
  require_once("../includes/database.php");
  require_once("../includes/user.php");

  
 // echo $database->escape_value("it's working?");
 /*$sql ="INSERT INTO users (id ,username,password,first_name,last_name)";
 $sql .="VALUES (3,'bouk','doudou1994','habiba','boukernine')";
 $resultat=$database->query($sql);*/

 $sql = "SELECT * FROM users WHERE id = 2";
 $resultat=$database->query($sql);
 $found_user = $database->fetch_array($resultat);
 echo $found_user['username']."<br />";

 /*echo "num de rows : ". $database->num_rows($resultat)."<br />";
 echo "affected rows : ". $database->affected_rows()."<br />";
 echo "last inserted id : ". $database->insert_id()."<br />";*/
  echo "<hr />";
  // User:: because the methods is static :)
  $found_user = User::find_by_id(1);
  echo $found_user['username'];

  echo "<hr />";
  $user_set = User::find_all();
  while ($user = $database->fetch_array($user_set)) {
    echo "User : ".$user['username']."<br />";
    echo "Name : ".$user['last_name']." ".$user['first_name']."<br />";
  }

?>