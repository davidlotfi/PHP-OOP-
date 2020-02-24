<?php
  require_once("../../includes/bd_pdo.php");
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
      <h3>Photographs</h3>

      <a href="index.php"><< Back</a><br><br>
      <?php $result = find_all_photo(); ?>
      <table class="bordered">
        <tr>
          <th>Image</th>
          <th>Filename</th>
          <th>Caption</th>
          <th>Size</th>
          <th>Type</th>
        </tr>
        <?php while ($donnes = $result->fetch()) { ?>
          <tr>
            <td><img src="../images/<?php echo $donnes['filename']; ?>" width="100" /></td>
            <td><?php echo $donnes['filename'];?></td>
            <td><?php echo $donnes['caption']; ?></td>
            <td><?php echo $donnes['size']; ?></td>
            <td><?php echo $donnes['type'] ;?></td>
          </tr>
      <?php }; ?>
      </table>


    </div>
    <div id="footer">Copyright <?php echo date("Y", time());?>, Boukernine Abdellatif</div>
  </body>
</html>
