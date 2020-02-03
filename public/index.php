<?php
  require_once("../includes/config.php");
  require_once("../includes/database.php");
  require_once("../includes/user.php");
  
 
  // User:: because the methods is static :)

  $found_user = User::find_by_id(1);
  $user = new User();
  $user->id=$found_user['id'];
  $user->username=$found_user['username'];
  $user->password=$found_user['password'];
  $user->first_name=$found_user['first_name'];
  $user->last_name=$found_user['last_name'];

  echo $user->full_name();
  
  echo "<hr />";

  // $user_set = User::find_all();
  // while ($user = $database->fetch_array($user_set)) {
  //   echo "User : ".$user['username']."<br />";
  //   echo "Name : ".$user['last_name']." ".$user['first_name']."<br />";
  // }

?>