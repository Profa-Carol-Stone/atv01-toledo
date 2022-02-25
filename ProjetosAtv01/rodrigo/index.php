<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Internacionalização</title>
    </head>
    <body>
         <ul>   
                <li><a href="#home" accesskey="1">Voltar para o Menu</a></li>
                <li><a href="#contato" accesskey="2">Ir para o final da página</a></li>
        </ul>
         <header>
            <img src="images/logo.png" alt="logotipo da empresa no centro as letras em negrito com fundo branco e a letra XPTO em azul">
            <h1><em>Empresa XPTO</em></h1>
        </header>
        <section>
             <h2>Internacionalização</h2>
            <form action="#" method="post">
                <label for="nome">Nome:</label>
                <input type="text" id="nome"><br>
                <label for="tel/cel">tel/cel:</label>
                <input type="text" id="tel/cel"><br>
                <label for="e-mail">e-mail:</label>
                <input type="text" id="e-mail"><br>
                <label for="assunto">assunto:</label>
                <input type="text" id="assunto"><br>
                <label for="mensagem">Mensagem:</label>
                <textarea id="mensagem" name="mensagem" rows="5" cols="50">digite</textarea>
             <fieldset>
                    <legend>Selecione uma opção</legend>
                    <input type="radio" id="tipo1"> <label for="tipo1">PCD</label>
                    <input type="radio" id="tipo2"> <label for="tipo2">estudante</label>
                    <input type="radio" id="tipo3"> <label for="tipo3">estagiário</label>
                    <input type="radio" id="tipo4"> <label for="tipo4">empresa</label>
                    <input type="radio" id="tipo5"> <label for="tipo5">fornecedor</label>
             </fieldset><br>
                <input type="checkbox" id="checagem1" value="1"><label for="checagem1">Confirmar as informações</label><br>
                <input type="submit" value="Enviar">
            </form>
        </section>
        <nav>
            <ul>
                <li><a href="home.html" id="home">Home</a></li>
                <li><a href="#" id="contato">Contato</a></li>
           </ul>
       </nav>  
           <footer>
            <h3>Copyright © 2022</h3>
        </footer>
    </body>
</html>