<?php

//  require_once("../../includes/config.php");
//  require_once("../../includes/bd_pdo.php");
  //require_once("../../includes/initialize.php");
//  require_once("../../includes/session.php");
  //if (!$session->is_logged_in()) {redirect_to("login.php");}

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
  <style>
    img{
      width: 300px;
      margin-top: 20px;
    }
  </style>
  <div id="header"><h1>Photo Gallery</h1></div>
  <div id="main">
      <h2>Photo Upload</h2>
       <p class="message"><?php if (!empty($message)) {echo $message;}?></p>

      <form action="upload_photo_post.php" method="POST" enctype="multipart/form-data">
         <input type="file" name="image"  onchange="document.getElementById('1').src =window.URL.createObjectURL(this.files[0])" /><br><br>
         <label for="caption">Caption : </label><input type="text" name="caption" id="" required>
         <input type="submit" name="submit" value="submit"/><br>
         <img src="" id="1" alt="">
      </form>

  </div>
  <div id="footer">Copyright <?php echo date("Y", time());?>, Boukernine Abdellatif</div>
</body>
</html>
