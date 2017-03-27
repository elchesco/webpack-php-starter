<?php
  /**
  * index.php
  * this is the main entry point for our application - a main router if you need one
  * it's certainly not always necessary, but it's a handy pattern to get into for
  * dealing with things like session tokens or OAuth callback handlers
  */
  require_once("config.php");

  $route = 'home.php';

  header('Location: ' . $route);
  exit;
?>

