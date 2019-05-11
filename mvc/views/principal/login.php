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

     <main class="FormularioLogin">
     
          <form action="" method="POST" name="Formlogin" id="FormLogin" class="FormLogin" >

               <!--  ############### Links de Entrar e Cadastrar ######################### -->
               <div class="MenuLogin">  
                    <ul>

                         <li  class="Entrar LoginEntrar" >
                              
                              <a href=" login.php " ><i class="fas fa-user user"></i>Entrar</a>
                         </li>

                         <li  class="Registrar Cadastro " >     
                              <a href=" Cadastrar.php " > <i class="fas fa-user-plus  user"></i>Cadastrar</a>
                         </li>
                      
                    </ul>
               </div>

               <!-- ##################### Formulário de login ####################### -->
               <div class="form">

                     <input type="text" name="CpfLogin" id="CpfLogin" class="Campos" placeholder="CPF">              
                    <input type="email"  name="EmailLogin" id="EmailLogin" class="Campos campo02" placeholder="E-mail">
                    
                    <input type="password" name="senhaLogin" id="senhaLogin" class="Campos campo03" placeholder="Senha">
                    
                   <input type="submit" value="Enviar" class=" BotaoLogin Campos ">

               <!-- ############### Chamadas para fazer o cadastro ############# -->

                   <div class="LinkLogin" >

                         <ol class="Link">
                              <li class="Conta">Ainda não possui uma conta? 
                                   <a href="Cadastrar.php">Cadastre-se </a>
                              </li>
                         </ol>

                    </div>
               <!-- #################### Botão para retornar para a Index ####################### -->
                    <div class="borda"></div>
                    
                    <div class="RetornarIndex">
                         <ol class="btnRetornar">
                              <li><a href="../../../index.php" title="Fechar">Fechar</a></li>
                         </ol>
               </div>
                    
               </div>

          </form>
               <!-- ############################# Footer ###################### -->

          <div class="Copyright">
               
               <div class="TextoCopy">
                    <p>
                         <span class=" TextoApagado "> &copy; 2019  Copyright:</span> SGAU               
                    </p>
               </div>

          </div>

     </main>
     
     <script src="../../controller/lib/jquery.js"></script>
     <script src="../../controller/js/login.js"></script>
</body>
</html>