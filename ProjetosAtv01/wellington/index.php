<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Formulário de Contato</title>
</head>

<body>
	<div class="skip-links" aria-label="Acesso rápido">
    <a accesskey="1" href="#links">
        Ir para o Menu -  <strong class="accesskey">1</strong>
    </a>
    <a accesskey="2" href="#formulario">
        Ir para para o Formulario -   <strong class="accesskey">2</strong>
    </a>
</div>


	<header>
		<img src="images/logo.png" alt="Logomarca da Empresa">
		<h1>Empresa XPTO</h1>
    </header>
    <nav id="links">
    	<ul>
    		<li><a href="#">Home</a></li>
    		<li><a href="#">Contato</a></li>
    	</ul>
    </nav>
   

    <main id="formulario">
    	<h2>Formulário de Contato</h2>
    	<br>
    	<form action="#" method="post">
    		<div>
    			<label for="nome">Nome:</label><br>
        		<input type="text" id="nome" name="nome_usuario"><br>
        	</div>
        	<div>
        		<label for="email">E-mail:</label><br>
        		<input type="email" id="email" name="email_usuario"><br>
        	</div>
        	<div>
        	  	<label for="mensagem">Mensagem:</label><br>
        		<textarea id="mensagem" name="mensagem"></textarea><br>
      			<br>
      		</div>
        	<input type="submit" value="Enviar">
		</form>
    </main>

    <footer>
    	<p>Copyright © 2021</p>
   	</footer>
</body>
</html>