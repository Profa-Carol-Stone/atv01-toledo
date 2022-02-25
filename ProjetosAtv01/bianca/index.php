<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto</title>
</head>

<body>
    <p lang="en-US"><em>Venha</em> conhecer meu Projeto para a empresa XPTO</p>
    <header class="container">
        <img src="xpto_projeto.jpg" alt="Logo escrito XTPO com letras finas pretas" width="600" height="400" />
        <h1>Empresa XPTO</h1>
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="#">Contato</a></li>
        </ul>
    </header>

    <section>
        <h2>Formulário de Contato</h2>
        <form method="post" noValidate>
            <fieldset>
                <legend>Entre em contato</legend>
                <label for="name">Nome:</label><br>
                <input type="text" id="name" placeholder="Digite seu nome"><br>
                <label for="email">E-mail:</label><br>
                <input type="email" id="email" placeholder="Digite seu e-mail"><br>
                <label for="message">Mensagem:</label><br>
                <textarea id="message" rows="5" cols="30" placeholder="Digite sua dúvida"></textarea><br>
                <input type="reset" value="Enviar">
            </fieldset>
        </form>
    </section>
    <footer>
        <p>Copyright © 2022</p>
    </footer>
</body>

</html>