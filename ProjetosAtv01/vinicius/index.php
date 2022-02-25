<!DOCTYPE html>

<html lang='pt-br'>

  <head>
    <meta charset='UTF-8'>
    <title>Formulário de Contato</title>
  </head>

  <body>
     <header>
        <img src="images/logo.png" alt='logo da Empresa XPTO'>
        <p id='home.html'>Empresa XPTO</p>
        <ul>
           <li><a href="#home.html" accesskey="1">Home</a></li>
           <li><a href="#contado.html" accesskey="2">Contato</a></li>
      </ul>
   </header>

   <main>
        <fieldset>
          <h1 id='contado.html'>Formulário de Contato</h1>
            <form action="#" method="post">
             <label for="nome">Nome: </label>
              <input type="text" name="nome" id='nome'><br>
             <label for="email">E-mail: </label>
              <input type="text" name="email" id="email"><br>
             <label for="msg">Mensagem: </label>
              <textarea name="mensagem" id='msg'>Digite sua Mensagem</textarea>
              <br>
            <input type="submit" value="Mensagem">
          </form>
        </fieldset>
    </main>

   <footer>
    <p>Copyright © 2021</p>
   </footer>
  </body>

</html>