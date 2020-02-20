<?php

  require_once("../../includes/config.php");
  require_once("../../includes/initialize.php");
  $message = "";
  if ($session->is_logged_in()) {
       redirect_to("index.php");
  } 
    
  // Remember to give your form's submit tag a name="submit" attribute!
if (isset($_POST['submit'])) { // Form has been submitted.

  $username = trim($_POST['username']);
  $password = trim($_POST['password']);
  
  // Check database to see if username/password exist.
	$found_user = User::authenticate($username, $password);
	
  if ($found_user) {
    $session->login($found_user);
    redirect_to("index.php");
  } else {
    // username/password combo was not found in the database
    $message = "Username/password incorrect !";
  }
  
} else { // Form has not been submitted.
  $username = "";
  $password = "";
}
  
  
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
   
 
    <div id="header">
      <h1>Photo Gallery</h1>
    </div>
    <div id="main">
		<h2>Login</h2>
		<?php echo "<p class=\"message\">".$message."</p>"; ?>

		<form action="login.php" method="post">
		  <table>
		    <tr>
		      <td>Username:</td>
		      <td>
		        <input type="text" name="username" maxlength="30" value="<?php echo htmlentities($username); ?>" />
		      </td>
		    </tr>
		    <tr>
		      <td>Password:</td>
		      <td>
		        <input type="password" name="password" maxlength="30" value="<?php echo htmlentities($password); ?>" />
		      </td>
		    </tr>
		    <tr>
		      <td colspan="2">
		        <input type="submit" name="submit" value="Login" />
		      </td>
		    </tr>
		  </table>
		</form>
    </div>
    <div id="footer">Copyright <?php echo date("Y", time()); ?>, Boukernine Abdellatif</div>
  </body>
</html>
<?php if(isset($database)) { $database->close_connection(); } ?>
