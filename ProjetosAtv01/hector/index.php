<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <title>Formulário de Contato</title>
  </head>
  <body> 
    <header>
      <img src="images/logo.png" alt="logo da empresa xpto, com X destacado em vermelho celebrando o 10º aniversário da empresa">
     <h1>Empresa <em>XPTO</em></h1>
     </header>
     <ul>
        <li><a href="#home" accesskey="1">Menu Principal</a></li>
        <li><a href="#contato" accesskey="2">Formulário de Contato</a></li>
     </ul>
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
            <legend>Permite receber emails publicitários com ofertas da empresa?(Cancele a qualquer momento)</legend>
            <input type="radio" id="aux"> 
            <label for="aux"><em>Sim,</em> desejo receber emails</label>
            <input type="radio" id="aux1"> 
            <label for="aux1"><em>Não,</em> desejo receber emails</label>
        </fieldset><br>
        <input type="submit" value="Clique aqui para enviar seus dados">
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