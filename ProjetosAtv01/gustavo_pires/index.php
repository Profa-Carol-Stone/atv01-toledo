<!DOCTYPE html>

<html lang="pt">

  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link href="css/style.css" type="text/css" rel="stylesheet" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Formulário de Contato</title>
      <script>
        function Home(){
            alert('Em construção!')
        }
    </script>
  </head>
  <body>
    <div class="header">
      <div class="center">
        <img src="images/logo.png"/>
        <button type="button" class="home" onclick="Home()">Home</button>
        <button type="button" class="contato" onclick="Home()">Contato</button>
      </div>
    </div>
    <div class="box">
      <form action="">
        <fieldset>
          <legend><b>Formulário para contato</b></legend>
          <br><br>
          <div class="InputBox">
            <input type="text" name="nome" id="nome" class="InputUser" required>
            <label for="nome" class="LabelInput">Nome completo</label>
          </div>
          <br><br>
          <div class="InputBox">
            <input type="text" name="email" id="email" class="InputUser" required>
            <label for="email" class="LabelInput">Email</label>
          </div>
          <br><br>
          <div class="InputBox">
            <input type="tel" name="telefone" id="telefone" class="InputUser" required>
            <label for="telefone" class="LabelInput">Telefone</label>
          </div>
          <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
          
          <br><br>
          <div class="InputBox">
            <input type="text" name="cidade" id="cidade" class="InputUser" required>
            <label for="cidade" class="LabelInput">Cidade</label>
          </div>
          <br><br>
          <div class="InputBox">
            <input type="text" name="Estado" id="estado" class="InputUser" required>
            <label for="estado" class="LabelInput">Estado</label>
          </div>
          <br><br>
          <div class="InputBox">
            <input type="text" name="endereco" id="endereco" class="InputUser" required>
            <label for="endereco" class="LabelInput">Endereço</label>
          </div>
          <br><br>
          <div class="textarea">
            <textarea placeholder="Deixe sua mensagem..." id="textarea" required></textarea>
          </div>
          <br>
          <input type="submit" name="submit" id="submit" value="Enviar">
        </fieldset>
      </form>
      
    </div>
    <div class="Footer">
      <p>Copyright © 2022</p>
    </div>

  </body>

  

</html>