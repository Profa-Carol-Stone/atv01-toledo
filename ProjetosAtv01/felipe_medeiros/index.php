<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário de Contato</title>
  </head>
  <body>
    <nav>      
        <figure>
         <img src="xpto_logo.jpg" alt="Logo da empresa xpto formada por pequenos quadrados coloridos que juntos formam as letras da logo"></figure>
          <div>     
            <p>Barra de Acessibilidade</p>     
             <ul>     
               <li><a href="#">Ir para Home</a></li>     
                <li><a href="#">Ir para Contato</a></li>  
             </ul>
          </div>    
         <h1>Empresa XPTO</h1>
         <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Contato</a></li>
         </ul>
          </nav>
   <div>
      <h2>Formulário de Contato</h2>
     <form action="/action.php" method="post"></form>
      <fieldset>
         <label for="pnome1" title="T&iacute;tulo do label de pnome1">Nome:</label>
          <input type="text" name="pnome1" id="pnome1"
            size="30" maxlength="100" accesskey="T" />
      </fieldset>
      <fieldset>
           <label for="pe-mail1" title="T&iacute;tulo do label de pe-mail1">E-mail:</label>
             <input type="text" name="pe-mail1" id="pe-mail1"
              size="30" maxlength="50" accesskey="T" />
      </fieldset>
      <fieldset>
            <label for="pmensagem1" title="T&iacute;tulo do label de pmensagem1">Mensagem:</label>
             <textarea name="pmensagem1" id="pmensagem1">
             </textarea>
       </fieldset>
     <input type="submit" value="Enviar" class="Enviar" name="Enviar">
   </div>
   <footer>
    <h3>Copyright © 2021</h3>
   </footer>
  </body>
</html>