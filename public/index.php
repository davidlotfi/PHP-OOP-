<?php
  require_once("../includes/functions.php");
  require_once("../includes/config.php");
  require_once("../includes/database.php");
  require_once("../includes/user.php");
    // User:: because the methods is static :)

   
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="stylesheets/main.css">
  <title>Photo Gallery</title>
</head>
<body>
  <div id="header"><h1>Photo Gallery</h1></div>
  <div id="main">

     <?php
        
        $user = User::find_by_id(1);
        echo $user->full_name();
        echo "<hr />";
      
        $users = User::find_all();
       foreach($users as $user) {
        echo "User: ". $user->username ."<br />";
        echo "Name: ". $user->full_name() ."<br /><br />";
        }
       
     ?>

      
		
	</div>
  <div id="footer">Copyright <?php echo date("Y", time());?>, Boukernine Abdellatif</div>
</body>
</html>