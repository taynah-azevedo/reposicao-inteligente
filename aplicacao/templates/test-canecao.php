<?php
  session_start();
  
  $_SESSION['matricula--p'] = '1924598';
  $_SESSION['PROF'] = true;
  echo(strlen($_SESSION['matricula'])); echo($_SESSION['PROF']);
  header('Location: professor/deferimentos.php');
?>