
<?php
   //é importante colocar essa função entes de qualquer codigo que retorne 
   //um pagina ou saida estamanete para que a siada seja controlada

   session_start();
   $_SESSION ['X'] = 'OI, SOU UM VALOR DE SESSÃO ';
   print_r($_SESSION);



  /*
   os arrays superglobais get e post são gerados de forma automática
   para que seja possivel pegar os dados submetidos pelo formulario a esse arquivo  

   print_r($_POST);
   echo'<br>';

   echo $_POST['email'];
   echo"<br>";
   echo $_POST['senha'];
  
  */
  /*
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
 */

  //se o login senha que tem no array forem iguais aos que vem do post 
  // variavel $usuario_auteticado sera true


  /*
  if($usuario_autenticado){
     echo'usuario autenticado';
  }else{
     header('location: index.php? login=erro');
  }
   */


?>
