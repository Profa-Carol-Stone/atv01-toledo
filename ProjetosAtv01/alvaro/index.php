<!DOCTYPE html>

<html lang="pt">

  <head>
    <meta charset="UTF-8">
    <title>Formulário de Contato</title>
  </head>

  <body>
    <header>
        <img src="images/logo.webp" alt="Logo XPTO">
        <h1>Empresa XPTO</h1>
        <ul>
            <li><a href="#" accesskey="1">Home</a></li>
            <li><a href="#">Contato</a></li>
        </ul>
    </header>

    <main>
        <h2>Formulário de Contato</h2>
        <form action="#" method="post">
            <fieldset>
                <label for="nome"> Nome: </label>
                <input type="text" id="nome" name="nome"><br>
                <label for="email"> E-mail: </label>
                <input type="text" id="email" name="email"><br>
                <label for="mensagem"> Mensagem: </label>
                <textarea id="mensagem" name="mensagem">
                </textarea>
                <br>
                <input type="submit" value="Enviar">
            </fieldset>
        </form>
    </main>

    <footer>
        <h3>Copyright © 2021</h3>
    </footer>
  </body>
</html>