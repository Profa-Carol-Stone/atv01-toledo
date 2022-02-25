<!DOCTYPE html>
<html Lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title>Formulário de Contato</title>
  </head>

  <body>      
   <header id="cabecalho">
    <img src="images/logo.png" alt="Logotipo da empresa.">
    <h1>Empresa XPTO</h1>
    <nav>
        <ul>
          <li><a href="home.html">Home</a></li>
          <li><a href="#cabecalho">Link para o cabeçalho</a></li>
          <li><a href="#principal">Link para o conteúdo principal</a></li>
          <li><a href="#rodape">Link para o rodapé</a></li>          
          <li><a href="#">Contato</a></li>
        </ul>
    </nav>
   </header>

    <main id="principal">
    <h2>Formulário de Contato</h2>
    <form action="#" method="post">
      <fieldset>
        <div>
          <label>Nome</label>
          <input type="text" name="nome" id="nome"><br>
        </div>
        <div>
          <label>E-mail</label>
          <input type="email" name="email" id="email"><br>
        </div>
        <div>
          <label>Mensagem</label>
          <textarea name="mensagem"></textarea>
        </div>
      </fieldset><br>
      <input type="submit" value="Enviar mensagem">
    </form>
    </main>

    <footer id="rodape">
    <p>Copyright © 2021</p>
    </footer>
  </body>﻿
  
</html>