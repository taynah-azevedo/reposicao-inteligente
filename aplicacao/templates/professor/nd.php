<?php
  include('config.php');
  
  $req_id = $_GET['req_id'];
  $consulta = $MySQLi->query("update tb_requerimentos set req_deferido = -1 where req_id = $req_id");
  header("Location: deferir.php");

?>