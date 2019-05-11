
 <!DOCTYPE html>
 <html lang="en">
 <head>
      <meta charset="UTF-8">
      
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      
      <link rel="stylesheet" href="../../../app/lib/app/css/cadastrar.css">

      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

      <title>Cadastrar</title>
 </head>
 <body>       
               <!-- ####################### Formulario de Cadastro ####################### -->

     <main class="FormularioLogin">
     
          <form action="" method="POST" name="Formlogin" id="FormCadastro" class="FormCadastro">

               <!-- ###################### Links de entrar e cadastrar ##################### -->
               <div class="MenuLogin">  
                    <ul>

                         <li class=" Entrar  LoginEntrar ">
                              <a href="Login.php"  ><i class="fas fa-user user"></i>Entrar</a>
                         </li>

                         <li  class="Registrar Cadastro" >
                              <a href="cadastrar.php" > <i class="fas fa-user-plus  user"></i>Cadastrar</a>
                         </li>
                         
                         </ul>
               </div>

               <!-- ###################### Formulário de Cadastrar #########################  -->
               <div class="form">
                    
                    <div class="NomesCadastro">

                         <input type="text" name="nome" class=" Campos margin " placeholder="Nome">
                         <input type="text" name="sobrenome" class=" Campos " placeholder="Sobrenome">    

                    </div>

                    <input type="text" name="cpf" class="Campos campo02" placeholder="CPF" >

                    <input type="text" name="telefone" class="Campos campo02" placeholder="Telefone celular" >

                    <input type="email"  name="EmailCadastrar" id="EmailLogin" class="Campos campo02" placeholder="E-mail">
                         
                    <input type="password" name="SenhaCadastrar" id="senhaLogin" class="Campos campo03" placeholder="Senha">
                    <input type="password" name="SenhaCadastrar" id="senhaLogin" class="Campos campo03" placeholder="Repita a senha">
                         
                    <input type="submit" value="Enviar" class=" BotaoLogin Campos ">

               </div>

          </form>
          
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