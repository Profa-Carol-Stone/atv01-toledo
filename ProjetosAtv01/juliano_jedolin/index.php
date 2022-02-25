<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Formulário de Contato</title>
</head>

<body>
    <header>
        <img src="images/logo.png"
            alt="Logotipo da empresa, representa o texto XPTO, empresa no segmento de investimento na Bolsa de valores">
        <h1>Empresa XPTO</h1>
        <ul>
            <li><a href="home.html">Home</a>
            </li>
            <li><a href="#">Contato</a>
            </li>
        </ul>
    </header>

    <section>
        <h2>Formulário de Contato</h2>
        <form action="#" method="post">
            <fieldset>
                <label for="nome">Nome: </label>
                <input type="text" id="nome" name="nome"><br>
                <label for="email">E-mail: </label>
                <input type="text" id="email" name="email"><br>
                <label for="mensagem">Mensagem:</label><textarea id="mensagem"
                    name="mensagem">escreva aqui sua mensagem</textarea><br>
                <input type="submit" value="enviar formulario">
            </fieldset>
        </form>
    </section>

    <footer>
        <p>Copyright © 2021</p>
    </footer>
</body>

</html>