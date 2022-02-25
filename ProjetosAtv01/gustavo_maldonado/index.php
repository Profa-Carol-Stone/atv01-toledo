<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title id="home">Página principal</title>  
</head>

<body>
  <header id="topo">
    <img src="imagens/toledo_carreiras.png" alt="Logotipo da empresa">
    <h1>Toledo Carreiras</h1>
    <nav id="barraAcessibilidade">
      <ul>
        <li><a accesskey="1" href="#home" title="Página incial">Home</a></li>
        <li><a accesskey="2" href="#contatos" title="Direcionar para o formulário de contatos">Contato</a></li>
      </ul>
    </nav>
  </header>
  <aside id="conteudo">
    <!-- Texto inserido para aparcer os links de ancoragem/marcação -->
    <p>
      O curso de Análise e Desenvolvimento de Sistemas EAD da Toledo Prudente tem enfoque prático e busca capacitar
      você para atuar nas áreas de planejamento, análise, utilização e avaliação de Tecnologias da Informação (TI)
      aplicadas aos setores administrativos, empresariais, comerciais e industriais, em organizações públicas e
      privadas. Com conhecimentos nas áreas de Tecnologia e Gestão, o curso prepara o profissional para criar,
      desenvolver, transformar e administrar sistemas de informações, configurar sistemas, aplicativos e programas de
      tecnologias de informações para solução de problemas empresariais e pessoais. Para formar esse profissional,
      além de disciplinas diferenciadas, o curso possui a Trilha TIE que, por meio de metodologia inovadora, tem como
      objetivo desenvolver habilidades tecnológicas, empreendedoras e inovadoras, necessárias para você se diferenciar
      em um mercado de trabalho altamente competitivo; e também os Projetos Integradores, que permitem a você realizar
      atividades totalmente articuladas às competências exigidas para o profissional do presente e do futuro e que
      integram os conhecimentos estudados no decorrer do curso.
    </p>
    <p>
      Com a necessidade de tornar os sistemas de informação nas empresas cada vez mais automatizados e com os avanços
      da tecnologia, o mercado de trabalho para esse profissional é sempre muito promissor, seja no que tange às
      vagas, às empresas contratantes ou aos salários. Além de montar o próprio negócio, esse profissional pode atuar
      como: Analista de Sistemas, Analista Desenvolvedor, Analista de Suporte, Analista de Negócios de TI, Analista de
      Segurança em Tecnologia, Analista de Segurança da Informação, Gerente de TI, Gerente de Projetos, Coordenador de
      Sistemas, Consultor de Tecnologia e Informação, Profissional de Linguagem de Programação ou Programador,
      Programador Web, Administrador de Redes de Computadores, Administrador de Sistemas, Administrador de Banco de
      Dados.
    </p>
    <div id="contatos">
      <h2>Formulário de Contato</h2>
      <form method="post">
        <fieldset>
          <legend>Dados Pessoais:</legend>
          <label for="nome">Nome:</label>
          <input type="text" name="nome" id="nome" aria-label="nome" />
          <label for="email">E-Mail:</label>
          <input type="text" name="email" id="email" aria-label="email" />
          <label for="mensagem">Mensagem:</label>
          <textarea rows="2" name="mensagem" id="mensagem" aria-label="mensagem">informe a mensagem</textarea>
          <input type="submit" value="Gravar" aria-label="Gravar" />
        </fieldset>
      </form>
    </div>

    <span><a href="#topo">Topo</a></span>
  </aside>
  <footer id="rodape">
    <p><strong>Copyright © 2021</strong></p>
  </footer>

</body>

</html>