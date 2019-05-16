<!DOCTYPE html>
<html lang="pt-BR">
<head>
     <meta charset="UTF-8">
     
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <link rel="stylesheet" href="../../../app/lib/app/css/app.css">

     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
     
     <title>Login</title>
</head>
<body>

     <main class="formularioLogin">
     
          <form action="" method="POST" name="formLogin" id="formLogin" class="formLogin" >

               <!--  ############### Links de Entrar e Cadastrar ######################### -->
               <div class="menuLogin">  
                    <ul>

                         <li  class="entrar loginEntrar" >
                              
                              <a href=" login.php " ><i class="fas fa-user user"></i>Entrar</a>
                         </li>

                         <li  class="registrar cadastro " >     
                              <a href=" Cadastrar.php " > <i class="fas fa-user-plus  user"></i>Cadastrar</a>
                         </li>
                      
                    </ul>
               </div>

               <!-- ##################### Formulário de login ####################### -->
               <div class="form">

                     <input type="text" name="cpfLogin" id="cpfLogin" class="campos" placeholder="CPF">              
                    <input type="email"  name="emailLogin" id="emailLogin" class="campos campo02" placeholder="E-mail">
                    
                    <input type="password" name="senhaLogin" id="senhaLogin" class="campos campo03" placeholder="Senha">
                    
                   <input type="submit" value="Enviar" class=" botaoLogin campos ">

               <!-- ############### Chamadas para fazer o cadastro ############# -->

                   <div class="linkLogin" >

                         <ol class="link">
                              <li class="conta">Ainda não possui uma conta? 
                                   <a href="Cadastrar.php">Cadastre-se </a>
                              </li>
                         </ol>

                    </div>
               <!-- #################### Botão para retornar para a Index ####################### -->
                    <div class="borda"></div>
                    
                    <div class="retornarIndex">
                         <ol class="btnRetornar">
                              <li><a href="../../../index.php" title="Fechar">Fechar</a></li>
                         </ol>
               </div>
                    
               </div>

          </form>
               <!-- ############################# Footer ###################### -->

          <div class="copyright">
               
               <div class="textoCopy">
                    <p>
                         <span class=" textoApagado "> &copy; 2019  Copyright:</span> SGAU               
                    </p>
               </div>

          </div>

     </main>
     
     <script src="../../controller/lib/jquery.js"></script>
     <script src="../../controller/js/login.js"></script>
</body>
</html>