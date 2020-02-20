<?php
  require_once("../../includes/config.php");
  require_once("../../includes/initialize.php");
    
  $session->logout();
  redirect_to("login.php");

?>