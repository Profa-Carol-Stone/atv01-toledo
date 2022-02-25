<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Contato</title>
</head>
<body>
    <header id="home">
        <img src="amazon.png" alt="logo amazon">
        <h1>Empresa Amazon</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#home" accesskey="h">Home</a></li>
            <li><a href="#contato" accesskey="c">Contato</a></li>
        </ul><br><br>     
    </nav>
    <section>
        <form action="home" method="post">
            <h2 id="contato">Formulário de Contato</h2>
            <fieldset>
                <legend>Informe seus dados</legend>
                <label for="nome">Nome:<input type="text" id="nome" name="nome"></label><br>
                <label for="email">E-mail:<input type="email" id="email" name="email"></label><br>
                <label for="mensagem">Mensagem:<textarea id="mensagem" name="mensagem">Texto</textarea></label>
                <input type="submit" value="Enviar">  
            </fieldset> 
        </form>  
        </section>        
    <footer>
        <p>Copyright © 2021 ﻿</p>
    </footer>
</body> 
</html>