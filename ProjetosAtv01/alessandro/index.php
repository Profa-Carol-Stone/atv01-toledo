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
        <header>
            <img src="images/logo.png" alt="logotipo quadrado com borda verde e fundo branco, no centro as letras em negrito e verdes XPTO">
            <h1><em>Empresa XPTO</em></h1>
        </header>
        <section>
            <h2>Formulário de Contato</h2>
            <form action="#" method="post">
                <label for="nome">Nome:</label>
                <input type="text" id="nome"><br>
                <label for="email">Email:</label>
                <input type="text" id="email"><br>
                <label for="mensagem">Mensagem:</label>
                <textarea id="mensagem" name="mensagem" rows="5" cols="33">Digite aqui</textarea>
                <fieldset>
                    <legend>Desejo receber notificações</legend>
                    <input type="radio" id="tipo1"> <label for="tipo1">Por SMS</label>
                    <input type="radio" id="tipo2"> <label for="tipo2">Por e-mail</label>
                    <input type="radio" id="tipo3"> <label for="tipo3">Não desejo receber</label>
                </fieldset><br>
                <input type="checkbox" id="checagem1" value="1"><label for="checagem1">Confirmo que as informações são verdadeiras</label><br>
                <input type="submit" value="Clique aqui para enviar">
            </form>
        </section>
        <nav>
            <ul>
                <li><a href="home.html"  id="home">Home</a></li>
                <li><a href="#" id="contato">Contato</a></li>
            </ul>
        </nav>
        <footer>
            <p><b>Copyright © 2022</b></p>
        </footer>
    </body>
</html>