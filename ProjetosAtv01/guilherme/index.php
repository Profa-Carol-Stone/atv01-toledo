<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon-Html.ico" type="image/x-icon">
    <title>Formulário de Contato</title>
</head>
<body>
    <img src="Images/logo.png" alt="Imagem do logotipo da empresa">
    <hr>
    <header>
        <h1>Empresa XPTO</h1>
        <nav>   
            <ul id="atalhos">
                <li><a href="home.html"target="_blank">Home</a></li>
                <li><a href="contato.html"target="_blank">Contato</a></li>
            </ul>
        </nav> 
    </header>
    
    <main>
        <fieldset>
        <legend><h2>Formulário de Contato</h2></legend>
        <form action="#" method="post"> <!--Usar corretamente o label-->
            
            <label for="name">Nome :<input type="text" name="name" id="text1" size="30" placeholder="Digite seu nome"/></label><br>
            
            <label for="e-mail">E-mail:<input type="text" name="email" id="text2" size="30" placeholder="Digite seu e-mail"><br></label>
            
            <label for="#">Mensagem:<textarea name="mensagem" id="text3" size="30" placeholder="Digite a mensagem"></textarea><br></label>
        <input type="submit" value="Enviar">
        </form>
        </fieldset>
    </main>
    
    <footer>
        <hr>
        <p>Copyright © 2022</p>
        <hr>
    </footer>
</body>
</html>