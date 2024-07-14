<?php 

/*
  A autenticação foi feita, com a lista de usuarios  e seua senhas, na autenticação atual
  se um usuario estiver com a senha ee emeiss compativeis eles podem aceessar os sistema, 
  porém as paginas dentro de um servidor são disponibilixadas traves de requisições de url,
  e do jeito que a autentição esta nesse momento se o usuario esqueece a senha , mas digita 
  a url da pagina que ele deseja acessar ele consegue.
  
  Por isso as sessões são utilçizadas para controlar que está fazendo a requisição e com base na regra 
  de segurança retorna ou não a pagina solicitada.

  a função  session_start();  deve ser chamada antes que qualquer codigo que tenha retono por exemplo 
  saida de pagina ou dado escrito exatamente para que a sessão possa determinar se vai retornar ou não,
  quando essa função é acionada ela gera um array chamado $_SESSION que é uma superglobal.

  no caso todos os scrpts e pagainas que estiverem usando a amesa sessão do navegador podem compartilhar
  essa variavel entre si, podendo testar se existe uma sessão e se ela existe qual e o valore que esta nela
    






   


  
  


*/

?>