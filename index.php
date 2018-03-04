<?php
  require_once("config.php");
  
/*
	$sql = new Sql();
	$usuarios = $sql->select("SELECT * from tbusuario");
  echo json_encode($usuarios);

*/

  $joao = new Usuario();
  $joao->loadById(5);
  echo $joao;

 ?>
