<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário de Contato</title>
</head>

<body>
    <fieldset style="text-align: center;">
        <h1 lang="pt-br"><em>O Toledo Carreiras está divulgando uma vaga para uma importante empresa de desenvolvimento
                web da região</em></h1>
        <img src="toledo_carreiras.png" alt="logotipo da toledo carreiras">
    </fieldset>
    <header>
        <h1>Empresa XPTO</h1>
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="#">Contato</a></li>
        </ul>
    </header>

    <main>
        <h2>Formulário de Contato</h2>
        <form action="#" method="post">
            <div style="margin-bottom: 5px;">
                <div style="font-weight: bold;"><label for="name">Nome:</label></div>
                <div><input type="text" name="name" id="name" placeholder="Escreva seu nome aqui" required></div>
            </div>
            <div style="margin-bottom: 5px;">
                <div style="font-weight: bold;"><label for="email">E-mail:</label></div>
                <div><input type="email" name="email" id="email" placeholder="Escreva seu e-mail aqui" required></div>
            </div>
            <div style="margin-bottom: 5px;">
                <div style="font-weight: bold;"><label for="mensagem">Mensagem:</label></div>
                <div><textarea name="mensagem" id="mensagem" rows="5" cols="50"
                        placeholder="Escreva um texto..."></textarea></div>
            </div>
            <div>
                <input type="submit" value="Enviar">
                <button type="reset">Resetar</button>
            </div>
        </form>
    </main>

    <footer>
        <h3>Copyright © 2022</h3>
    </footer>

    <script>
        alert("Olá! Bem-Vindo a casa de software Schiavão!");
    </script>
</body>

</html>