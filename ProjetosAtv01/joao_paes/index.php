<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário de Contato</title>
</head>
<body>
  <header>
    <a href="#inicioTopo" id="inicioTopo" hidden>Topo</a>
    <img src="images/logo.png" alt="Logo da XPTO">
    <h1>Empresa XPTO</h1>
    <div id="barraAcessibilidade">
      <p>Barra de Acessibilidade</p>
      <ul>
          <li><a href="#inicioFormulario">Ir para formulário [1]</a></li>
          <li><a href="#inicioMenu">Ir para menu principal [2]</a></li>
      </ul>
    </div>
  </header>
  <nav>
    <a href="#inicioMenu" id="inicioMenu" accesskey="2">Menu</a>
    <ul>
      <li><a href="home.html">Home</a></li>
      <li><a href="#">Contato</a></li>
    </ul>
  </nav>
  <main id="conteudo">
    <a href="#inicioFormulario" id="inicioFormulario" accesskey="1">Formulário de Contato</a>
    <section aria-label="Formulário de contato">
      <form action="#" method="post">
        <fieldset>
          <legend>Dados de contato</legend>
          <label for="nome">Nome:</label>
          <input type="text" id="nome" name="nome"><br>
          <label for="email">E-mail:</label>
          <input type="text" id="email" name="email"><br>
          <label for="mensagem">Mensagem:</label>
          <textarea id="mensagem" name="mensagem"></textarea>
          <br>
          <input value="Enviar" type="submit">
        </fieldset>
      </form>
    </section>
  </main>
  <footer>
    <a href="#inicioRodape" id="inicioRodape" hidden>Rodapé</a>
    <p>Copyright © 2021</p>
  </footer>
</body>
</html>