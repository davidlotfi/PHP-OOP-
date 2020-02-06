<<<<<<< HEAD
<?php
  require_once("../includes/functions.php");
  require_once("../includes/config.php");
  require_once("../includes/database.php");
  require_once("../includes/user.php");
   
  // User:: because the methods is static :)
  $user = User::find_by_id(1);
  echo $user->full_name();

  echo "<hr />";

  $users = User::find_all();
 foreach($users as $user) {
  echo "User: ". $user->username ."<br />";
  echo "Name: ". $user->full_name() ."<br /><br />";
  }

 
=======
<?php
  require_once("../includes/functions.php");
  require_once("../includes/config.php");
  require_once("../includes/database.php");
  require_once("../includes/user.php");
   
  // User:: because the methods is static :)
  $user = User::find_by_id(1);
  echo $user->full_name();

  echo "<hr />";

  $users = User::find_all();
 foreach($users as $user) {
  echo "User: ". $user->username ."<br />";
  echo "Name: ". $user->full_name() ."<br /><br />";
  }

 
>>>>>>> 39c87dba027025562d25ba6ceb878195fdef5ebf
?>