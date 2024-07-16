<?php
   
   session_start();
 
  //tenteando se o inidice autewnticado existe dentro do array $_SESSION e testando se o valor dele é SIM 

   if(!isset($_SESSION['AUTENTICADO']) || $_SESSION['AUTENTICADO'] != 'SIM'){
    //se não for o cliente volta para a pagina de login
    header('location: index.php? login=erro2');


   }

   //se for o cliente recebe a pagina como resposta 
?>
