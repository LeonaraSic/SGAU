<?php

     if ( isset ( $_GET [ 'p' ] ) )
     {
          $nomeView = base64_decode ( $_GET [ 'p' ]  ) . '.php' ;
          $caminho ='mvc/views/paineldeControle/painelUsuario/';

          if ( file_exists ($caminho . $nomeView  ) )
          {
          include_once  'mvc/views/paineldeControle/painelUsuario/' . $nomeView ;
          }
          else 
          {
          echo '<h1>404 - Página não encontrada!</h1>' ;
          }
     }


?>