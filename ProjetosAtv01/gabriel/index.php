<!DOCTYPE html>

<html lang="pt-br">

  <head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário de Contato</title>
  </head>

  <body>
   <header id="inicio">
    <img src="images/logo.png" alt="logotipo da empresa XPTO">
    <h1>Empresa XPTO</h1>
    <nav>
      <ul>
        <li><a href="#inicio">Ir para o início da página</a></li>
        <li><a href="#contato">Ir para contato</a></li>
        <li><a href="#rodape">Ir para rodapé</a></li>
      </ul>
    </nav>
   </header>
   <main id="contato">
    <h2>Formulário de Contato</h2>
    <form action="#" method="post">
      <fieldset>
        <legend>Preencha o formulário de contato abaixo:</legend>
        <label for="nome">Nome:</label><input type="text" name="nome" id="nome" accesskey="n"><br>
        <label for="email">E-mail:</label><input type="text" name="email" id="email" accesskey="l"><br>
        <label for="mensagem">Mensagem:</label><textarea name="mensagem" id="mensagem" accesskey="m"></textarea><br>
        <input type="submit" value="submit" accesskey="s">
      </fieldset>
    </form>
    </main>

   <footer id="rodape" accesskey="r">
    <p>Copyright © 2021</p>
   </footer>
  </body>

</html>