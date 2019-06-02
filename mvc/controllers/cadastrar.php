<?php

     if(isset($_POST['Cadastrar']))
     {     
          $nome = $_POST['nome'];
          $sobrenome = $_POST['sobrenome'];
          $cpf =  $_POST['cpf'];
          $celular =  $_POST['telefone'];
          $email =  $_POST['emailCadastrar'];
          $senha =  $_POST['senhaCadastrar'];
          $repSenha =  $_POST['repSenhaCadastrar'];

          if($nome === '')
          {
               echo ' Nome inválido ou vazio. ';
          }
          else if($nome < 3)
          {
               echo 'Nome precisa conter 3 ou mais caracteres.';
          }
          else if ($sobrenome === ' ')
          {
               echo ' Sobrenome vazio.';
          }
          else if ($sobrenome <3)
          {
               echo ' Sobrenome precisa conter 3 ou mais  caracteres.';
          }
          else if ($cpf === ' ')
          {
               echo ' cpf vazio.';
          }
          else if ($cpf < 0 && $cpf >14 ) 
          {
               echo ' cpf precisa conter 14 caracteres, incluindo pontos e traços.';
          }
          else if ($sobrenome === ' ')
          {
               echo ' Sobrenome vazio.';
          }
          else if ($sobrenome === ' ')
          {
               echo ' Sobrenome vazio.';
          }
          else if ($sobrenome === ' ')
          {
               echo ' Sobrenome vazio.';
          }
          else if ($sobrenome === ' ')
          {
               echo ' Sobrenome vazio.';
          }


     }

?>