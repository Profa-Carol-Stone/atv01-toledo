<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário de Contato</title>
  </head>
  <body>
    <ul>
      <li><a href="#home" accesskey="1">Ir para o Menu Principal</a></li>
      <li><a href="#nome" accesskey="2">Ir para o Início do Formulário de Contato</a></li>
  </ul>
  <header id="cabecalho">
    <img src="image/logo_empresa.png" width="372" height="271" alt="logo da empresa XPTO com letras pretas em negrito">
    <h1><em>Empresa XPTO</em></h1>
  </header>
  <nav>
    <ul>
      <li><a href="#"  id="home">Home</a></li>
      <li><a href="#" id="contato">Contato</a></li>
    </ul>
  </nav>
  
  <main id="principal">
    <h2>Formulário de Contato</h2>
      <form action="#" method="post">
      <fieldset>
        <label>Nome: <input type="text" name="nome" id="nome" placeholder="Digite seu Nome" /></label><br>
        <label>E-mail: <input type="text" name="email" placeholder="Digite seu Email" /></label><br>
        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem" rows="5" cols="33">Digite aqui</textarea>
        <input type="submit" value="Enviar">
      </fieldset>
<br>  
      </form>
  </main>
  <footer id="rodape">
    <p>Copyright © 2021</p>
  </footer>
  </body>
</html>