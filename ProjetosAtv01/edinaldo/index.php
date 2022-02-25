<!DOCTYPE html>
<html lang="pt-BR">
    <head>
		<meta charset="utf-8">
        <title>Formulário de Contato</title>
    </head>

	<body>
		<nav>
		<fieldset>
		<legend>Barra de acessibilidade</legend>
		    <ul>
			    <li><a href="#cabecalho">Link para o cabeçalho [1]</a></li>
		        <li><a href="#principal">Link para o conteúdo principal [2]</a></li>
		        <li><a href="#rodape">Link para o rodapé [3] </a></li>
            </ul>
	    </fieldset>
		</nav>

        <header id ="cabecalho">
        <img src="Lampada.png" height="50" width="50" alt="Imagem de uma lâmpada acesa com uma ingrenagem no seu interior">
        <h1>Empresa XPTO</h1>
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
		
			
        </header>

    <main id="principal">
	
		<h2>Menu</h2>
		<ul>
			<li><a href="Cabeçalho">Cabeçalho</a></li>
			<li><a href="Principal">Principal</a></li>
			<li><a href="Rodapé">Rodapé</a></li>
		</ul>
	
		<fieldset>
        <h2>Formulário de Contato</h2>
        <form action="#" method="post">
			<label for="nome">Nome: </label>
			<input type="text" name="nome" id="nome"> <br>
			<label for="email"> E-mail: </label>  
			<input type="text" name="email" id="email"> <br>
			<label for="mensagem"> Mensagem: </label>  
			<input type="text" name="mensagem" id="mensagem"> <br>
			<input type="submit" value="Enviar">
    	</form>
		</fieldset>
     
    </main>

    <footer id ="rodape">
    <p>Copyright © 2021</p>
    </footer>

    </body>
</html>