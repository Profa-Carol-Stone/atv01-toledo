<!DOCTYPE html>
<html lang="pt-BR">
  <head>
      <meta charset="utf-8">
      <meta name="author" content="Higgor S Paulino">
      <meta name="description" content="Formulário para contato da empresa XPTO.">
      <link rel="shortcut icon" href="logo.png" type="image/png">
      <title>Formulário de Contato</title>
  </head>

  <body>
    <p>Acessibilidade:</p>
    <ul id="atalhos">
        <li><a href="#irconteudo" accesskey="1">Ir Conteudo[1]</a></li>
        <li><a href="#irmenu" accesskey="2">Ir para menu principal[2]</a></li>
    </ul>
        <header>
            <img src="logo.png" width="100" height="100" alt="Logotipo da empresa XPTO. Letras brancas XPTO dentro de um circulo rosa.">
            <h1>Empresa XPTO</h1>
            <div>
                <a href="#" id="irmenu">Menu</a>
            </div>
            <nav>
                <ul>
                    <li><a href="home.html">Home</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div>
                <a href="#" id="irconteudo">Conteúdo Principal</a>
            </div>
            <h2>Formulário de Contato</h2>
            <form action="#" method="post">
                <fieldset>
                    <div>
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome"/>
                    </div>
                    <div>
                        <label for="email">E-mail:</label>
                        <input type="email" id="email"/>
                    </div>
                    <div>
                        <label for="mensagem">Mensagem:</label>
                        <textarea id="mensagem"></textarea>                
                    </div> 
                    <input type="submit" value="Enviar mensagem"/>
                </fieldset>
            </form>
        </main>
        <footer>
            <p>Copyright © 2021</p>
        </footer>
  </body>
</html>