<main class="formularioLogin">

<form action="" method="POST" name="formLogin" id="formLogin" class="formLogin" >
          <!--  ############### Links de Entrar e Cadastrar ######################### -->
          <div class="menuLogin">  
               <ul>

                    <li  class="entrar loginEntrar" >
                         
                         <a href="?v=<?php echo base64_encode ( 'login' ) ?> " ><i class="fas fa-user user"></i>Entrar</a>
                    </li>

                    <li  class="registrar cadastro loginCadastro " >     
                         <a href=" ?v=<?php echo base64_encode ( 'cadastrar' ) ?> "  class="click"> <i class="fas fa-user-plus  user"></i>Cadastrar</a>
                    </li>
               
               </ul>
          </div>
          <!-- ##################### Formulário de login ####################### -->
          <div class="form formLogin" id="formlogin">

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
                         <li><a href="index.php" title="Fechar">Fechar</a></li>
                    </ol>
               </div>
               
          </div>

</form>
          <!-- ############################# Footer ###################### -->

               <div class="copyright apaga">

               <div class="textoCopy">
                    <p>
                         <span class=" textoApagado "> &copy; 2019  Copyright:</span> SGAU               
                    </p>
               </div>

               </div>

   

    
               <!-- <script src="app/lib/jquery.js"></script>
          <script>
          $('.click').click(function(){
               $('#formlogin').fadeOut('fast');
          $('.apaga').fadeOut('fast');
          });
          
          </script> -->

</main>