<!DOCTYPE html>

<html lang="pt-br">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="Formulário de Contato-Empresa XPTO">
     <title>Formulário de Contato - XPTO</title>
     <link rel="shortcut icon" type="image/x-icon" href="XPTO-removedbg.ico">
     <link rel="stylesheet" href="project_css.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <style>
          a:focus, a:hover {
          background-color: #e4e2e2 ;
          transition: 0.6s;
          border-radius: 12px;
          border-bottom: 2px black;}
     </style>
</head>

<body>
<ul id="atalhos">
     <li><a href="#principal" accesskey="1">Ir para o conteúdo[1]</a></li>

     <li><a href="#menu" accesskey="2">Ir para menu de navegação[2]</a></li>

     <li><a href="#rodape" accesskey="3">Ir para o rodapé da página[3]</a></li>         
</ul>

     
     <header id="cabecalho">
        <h1><img src="XPTO-removedbg-png.png" alt="Logo da Empresa XPTO" style="width: 60px;">
        <b>Empresa XPTO</b></h1>
        <nav id="menu">
          <ul class="nav-list">
               <li><a href="#" title="Página Principal"><b>Home</b></a></li>
               <li><a href="#" title="Página de Contato"><b>Contato</b></a></li>
          </ul>
        </nav>
     </header>
     <main id="principal">
     <div>
          <form class="box">
               <fieldset>
                    <legend id="titulo"><b>Formulário de Contato</b></legend>
                    <br><br>
                    <div class="inputBox">
                         <input type="text" name="nome" id="nome" class="inputUser" required>
                         <label for="nome" class="labelInput">Nome</label>             
                    </div>
                    <br><br>
                    <div class="inputBox">
                         <input type="email" name="email" id="email" class="inputEmail" required>
                         <label for="email" class="labelInput">Email</label>                          
                    </div>
                    <br><br>
                    <div class="inputBox">
                         <textarea name="mensagem" id="mensagem" rows="8" cols="33"></textarea>
                         <label id="mensagemLabel" for="mensagem">Digite sua mensagem no campo abaixo:</label>                          
                    </div>
                    <br><br>
                         <input type="submit" name="submit" id="submit" value="Enviar" style="cursor:pointer;">
               </fieldset>
          </form>
     </div>
</main>

        <div>
          <footer id="rodape">
            <p>Copyright © 2021</p>
          </footer>
        </div>
  </body>

</html>