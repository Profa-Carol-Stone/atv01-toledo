<!DOCTYPE html>

<html lang="pt-BR">

<head>


    <meta charset="utf-8">
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>

    <title>
        Formulário de Contato Empresa XPTO
    </title>

    <style>
        label {
            cursor: pointer;
            display: block;
        }

        #rodape {
            
            left: 0;
            bottom: 0;       
            color: black;
            text-align: center;
        }
    </style>

</head>

<body>
    <nav>
        <ul id="atalhos">
            <li><a href="#Cabeçalho" accesskey="1" title="Cabeçalho">Cabeçalho</a></li>
            <li><a href="#Ir_Para" accesskey="2" title="Ir Para">Ir para</a></li>
            <li><a href="#Formulário_de_contato" accesskey="3" title="Formulario_de_contato">Formulario de contato</a>
            </li>
            <li><a href="#Rodape" accesskey="2" title="Rodape">Rodape</a></li>
        </ul>
    </nav>



    <img src="imageslogo.jpg" alt="Logo nas cores azul e laraja como o nome estagiar, jovens carreiras" height="200"
        width="210">


    <header id="Cabeçalho">
        <h1>Empresa XPTO</h1>
    </header>

    <aside id="Ir_Para">
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
    </aside>

    <section id="Formulário_de_contato">
        <header>
            <h2>Formulário de Contato</h2>
        </header>

        <form action="#" method="post" target="_blank" autocomplete="off">
            <fieldset style="width: 20%;">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome">

                <label for="email">E-mail:</label>
                <input type="text" id="email" name="email" placeholder="Digite seu email">

                <label for="mensagem">Mensagem:</label>
                <textarea id="mensagem" name="mensagem" rows="5" cols="33" placeholder="Digite sua mensagem"></textarea>

                <button type="reset">Reset</button>
                <button type="submit">Enviar</button>

            </fieldset>
        </form>


    </section>


    <footer id="Rodape">
        <p>Copyright © 2021</p>
    </footer>


</body>

</html>