<?php
  /*inicio da conexão com o BD*/
  $servidor = 'localhost';
  $bd = 'champions_db';
  $usuario = 'root';
  $senha = '';

  $conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

  if (!$conexao) {
      die("deu ruim" . mysqli_connect_errno());
  }

  // Fim da conexão
?>