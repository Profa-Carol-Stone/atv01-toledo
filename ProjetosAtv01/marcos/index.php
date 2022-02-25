<!DOCTYPE html>
<html lang="pt-br">    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, inicial-scale=1">
        <title>Formulário de Contato</title>
    </head>

    <body>
        <nav id="barra_acessibilidade" class="col-12">
            <ul id="atalhos">
                <li><a href="#cabecalho" accesskey="1">Ir para o Cabeçalho [Alt + 1]</a></li>
                <li><a href="#principal" accesskey="2">Ir para o Conteúdo Principal [Alt + 2]</a></li>
                <li><a href="#rodape" accesskey="3">Ir para o Rodapé [Alt + 3]</a></li>
            </ul>   
        </nav>  

        <header id="cabecalho">
            <img src="logo-xpto.png" width="50" height="50" alt="Logo da Empresa XPTO desenho abstrato">
                <nav>
                    <h1>Empresa XPTO</h1>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="contato.html">Contato</a></li>
                    </ul>
                </nav>
        </header>
        <main id="principal">
            <form action="#" method="post">
                <fieldset>
                <h2>Formulário de Contato</h2>            
                <label for="nome">Nome</label>
                <input type="text" id="nome" class="input-padrao" required placeholder="digite o seu nome"><br>

                <label for="email">Email</label>
                <input type="email" id="email" class="input-padrao" required placeholder="seuemail@dominio.com"><br>

                <label for="mensagem">Mensagem</label>
                <textarea id="mensagem" class="input-padrao" required></textarea><br>
                
                <input type="submit" value="Enviar formulário" class="enviar">
                </fieldset>
            </form>
        </main>

        <footer id="rodape">        
                <h3>Copyright © 2021</h3>
        </footer>
    </body>
</html>