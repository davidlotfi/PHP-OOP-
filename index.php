<?php
  require_once("includes/bd_pdo.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="public/stylesheets/main.css">
  <title>Photo Gallery</title>
</head>
<body>
  <div id="header"><h1>Photo Gallery</h1></div>
  <div id="main">
    <?php $result = find_all_photo(); ?>
    <?php while ($donnes = $result->fetch()) { ?>

       <div style="float: left; margin-left: 20px;">
         <img src="public/images/<?php echo $donnes['filename']; ?>" width="300" height="200" />
         <p style="font-size: large;"><?php echo $donnes['caption']; ?></p>
       </div>
     <?php } ?>
	</div>
  <div id="footer">Copyright <?php echo date("Y", time());?>, Boukernine Abdellatif</div>
</body>
</html>
