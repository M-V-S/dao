<?php
  require_once("config.php");
  $sql = new Sql();

  $usuarios = $sql->select("SELECT * from tdusuario");
  echo json_encode($usuarios);
 ?>
