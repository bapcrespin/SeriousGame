<?php
  session_start();
  
  require 'Controleur/Routeur.php';
  include("./include/header.php");

  $routeur = new Routeur();
  $routeur->routerRequete();
  
  include("./include/footer.php");
?>