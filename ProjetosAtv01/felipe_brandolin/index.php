<!-- Felipe José Seabra Brandolin -->
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Formulário de Contato">
        <!-- CSS BÁSICO. Coloquei type="text/css" e deu erro no W3, assim passou. -->
        <style>
            #cont{
                padding-left: 10px;
            }
            #home{
                padding-left: 10px;
            }
            li{
                display: inline-flex;
            }
            nav{
                text-align: left;
                padding-left: 10%;
            }
            #foto_e_nome{
                display: inline-flex;
                align-items: center;
                padding-left: 50px;  
            }
            img{
                padding-right: 30px;
            }
            form{
                padding-left: 5%;
            }
            fieldset{
                width: 350px;
            }
            label{
                display: block;
                float: left;
            }
            label, input{
                width: 160px;
                margin: 3px 0;
            }
            #titulo_form{
                text-align: center;
            }
            #rodape{
                text-align: center;
                bottom: 0; position:
                fixed; width: 100%;
            }
            .hidden{
                position:absolute;
                left:0px;
                top:-500px;
                width:1px;
                height:1px;
                overflow:hidden;
            }
        </style>
        <!-- Icone favicon da Empresa XPTO -->
        <link rel="icon" href="images/favicon.ico"/>
        <title>Formulário de Contato</title>
    </head>
    <body>
        <header id="cabecalho">
            <!-- Barra de acessibilidade -->
            <div class="hidden">
                <!-- Este texto está escondido dos utilizadores que fazem uso da visão para ler mas visível a utilizadores com leitor de ecrã. -->
                <ul id="acessibilidade">
                        <li>
                            <a href="#cabecalho" accesskey="1">
                                Ir para Cabeçalho
                                <span>[1]</span>
                            </a>
                        </li>
                        <li>
                            <a href="#corpo" accesskey="2">
                                Ir para Corpo
                                <span>[2]</span>
                            </a>
                        </li>
                        <li>
                            <a href="#nome" accesskey="3">
                            Ir para o Nome
                            <span>[3]</span>
                            </a>
                        </li>
                        <li>
                            <a href="#email" accesskey="4">
                                Ir para o E-mail
                                <span>[4]</span>
                            </a>
                        </li>
                        <li>
                            <a href="#msg" accesskey="5">
                                Ir para Mensagem
                                <span>[5]</span>
                            </a>
                        </li>
                        <li>
                            <a href="#enviar" accesskey="6">
                                Ir para Enviar
                                <span>[6]</span>
                            </a>
                        </li>
                        <li>
                            <a href="#rodape" accesskey="7">
                                Ir para Rodapé
                                <span>[7]</span>
                            </a>
                        </li>
                </ul>
            </div>
            <div id="menus">
                <!-- Logo com caminho para home -->
                <div id="foto_e_nome">
                    <a href="home.html">
                        <img id="logo" src="images/logo.png" alt="Logo da Empresa XPTO que direciona a página inicial"/>
                    </a>
                    <h1>Empresa XPTO</h1>
                </div>
                <nav>
                    <ul>
                        <li>
                            <a href="home.html" id="home">Home</a>
                        </li>
                        <li>
                            <a href="#" id="cont">Contato</a>
                        </li>
                    </ul>     
                </nav>
            </div>
        </header>
        <!-- Itens de menu -->
        <main id="corpo">
            <!-- Formulário -->
            <form action="#" method="post">
                <fieldset>
                    <h2 id="titulo_form">Formulário de Contato</h2>
                    <div>
                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" placeholder="Nome Completo" id="nome">
                    </div>
                    <div>
                        <label for="email">E-mail:</label>
                        <input type="text" name="email" placeholder="Insira seu e-mail" id="email">
                    </div>
                    <div>
                        <label for="msg">Mensagem:</label>
                        <textarea name="mensagem" placeholder="Digite o texto aqui..." id="msg"></textarea>
                    </div>
                    <div>
                        <input type="submit" value="Enviar" id="enviar">
                    </div>
                    </fieldset>
                </form>
            
        </main>
        <!-- Rodapé -->
        <footer id="rodape">
            <p id="irrodape">Copyright © 2021</p>
        </footer>
    </body>
    
</html>