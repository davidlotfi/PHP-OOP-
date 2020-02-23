<?php
require_once("../../includes/functions.php");
require_once("../../includes/session.php");
if (!$session->is_logged_in()) {redirect_to("login.php");}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../stylesheets/main.css">
    <title>list of photographs</title>
  </head>
  <body>
    <div id="header"><h1>Photo Gallery</h1></div>

    <div id="main">
      <a href="index.php"><< Back</a>


    </div>
    <div id="footer">Copyright <?php echo date("Y", time());?>, Boukernine Abdellatif</div>
  </body>
</html>
