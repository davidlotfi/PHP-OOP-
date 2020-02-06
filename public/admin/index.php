<?php
  require_once("../../includes/functions.php");
  require_once("../../includes/session.php");
  if (!$session->is_logged_in()) {redirect_to("login.php");}
      
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../stylesheets/main.css">
  <title>Photo Gallery</title>
</head>
<body>
  <div id="header"><h1>Photo Gallery</h1></div>
  <div id="main">

      <h2>Menu</h2>
		
	</div>
  <div id="footer">Copyright <?php echo date("Y", time());?>, Boukernine Abdellatif</div>
</body>
</html>