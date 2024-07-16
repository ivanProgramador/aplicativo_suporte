
<?php

   //é importante colocar essa função entes de qualquer codigo que retorne 
   //um pagina ou saida estamanete para que a siada seja controlada

   session_start();


 


  /*
   os arrays superglobais get e post são gerados de forma automática
   para que seja possivel pegar os dados submetidos pelo formulario a esse arquivo  

   print_r($_POST);
   echo'<br>';

   echo $_POST['email'];
   echo"<br>";
   echo $_POST['senha'];
  
  */
  
  $usuario_autenticado = false;

  $usuarios_app = array(
     array('email'=>'admin@teste.com.br', 'senha'=>1234),
     array('email'=>'user@teste.com.br','senha'=>1234)
  );

  //usando o foreach para ler e depois comparar os dados de ususario vindos do formulario com os dados que existem no array
  
  foreach($usuarios_app as $user){

      if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){

        $usuario_autenticado = true;
         
      }
  }
 

  //se o login senha que tem no array forem iguais aos que vem do post 
  // variavel $usuario_auteticado sera true


  
  if($usuario_autenticado){
     echo'usuario autenticado';
     /*
      Criando um novo indice no array session para que as outras paginas possam cheecar o valor dele 
      o nome do indice é autenticado s ele estiver como sim a pagina é liberada caso não o cliente volta 
      .para a pagina de login do sistema.
       
     */ 
     $_SESSION['AUTENTICADO']='SIM';
     header('location: home.php');

  }else{
     $_SESSION['AUTENTICADO']='NAO';
     header('location: index.php? login=erro');
  }
   


?>
