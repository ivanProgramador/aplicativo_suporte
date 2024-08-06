<?php

  session_start();
  //criando um arquivo de texto 
  $arquivo = fopen('arquivo.hd','a');
  
  /*
   Como eu vou usar o # para separar cada dado se o usuario usar cerquilha tambem 
   ela será substituida por um traço para eru não perder a sequencia dos dados escrita no arquivo 
  */
  $titulo = str_replace('#','-',$_POST['titulo']);
  $categoria = str_replace('#','-',$_POST['categoria']);
  $descricao = str_replace('#','-',$_POST['descricao']);
  /*
   Aqui eu coloco as strinsgs ja tratadas dentro da variavel texto
  */
  $texto = $_SESSION['id'].'#'.$titulo. '#' .$categoria. '#' .$descricao. PHP_EOL;

  //escrevendo no arquivo

  fwrite($arquivo,$texto);

  fclose($arquivo);

  header("Location: abrir_chamado.php");
?>