<?php
session_start();
?>
<!DOCTYPE HTML>
<HTML LANG="pt-br">

<HEAD>
  <TITLE>
    Página Cadastro
  </TITLE>
  <META CHARSET="UTF-8" />
  <link rel="stylesheet" type="text/css" href="../css/estilo.css" />
  <link rel="stylesheet" type="text/css" href="../css/menu.css" />
  <link rel="stylesheet" type="text/css" href="../css/cadastro.css" />
</HEAD>

<BODY>
  <header class="header-div">
    <img class="logosenac" src="../imagens/logosenac.png" alt="" hspace="8" title="" />
    <div class="h1-btn">
      <div id="btn-container">
        <a href="../index.php"><button class=btnindex>Início</button> </a>
        <a href="../paginas/pagcursos.php"><button class=btnindex> Cursos </button> </a>
        <a href="../paginas/paglocalizacao.php"><button class=btnindex> Localização </button></a>
        <a href="../paginas/pagfaleconosco.php"><button class=btnindex> Fale Conosco </button></a>
        <a href="../paginas/cadastro.php"><button class=btnindex> Cadastro </button></a>
        <a href="../paginas/login.php"><button class=btnindex> Login </button></a>
      </div>
    </div>
  </header>
  <hr>
  <div id="login-div"><h4 id="login"><?php
		if(isset($_SESSION['nome_usu_sessao'])){
			echo 'Olá '.$_SESSION['nome_usu_sessao'].
			' tudo certo? Seja bem vindo!';
	echo "<a href='../index.php?logout'>
			Sair</a>";
		}else{
			echo "<a href='./login.php'>
			Logar</a>";
		}
		if(isset($_GET['logout'])){
			session_destroy();
			header("Location: ../index.php");
		}
		?>
</h4></div>
  <section>
    <article>
      <form action="processaCadastro.php" method="post">
        <fieldset>
          <fieldset class="bloco">
            <div class="dados">
              <label>Nome completo:</label>
              <input type="text" id="nome" name="nome" required />
            </div>
          </fieldset>
          <fieldset class="bloco">
            <div class="dados">
              <label>Telefone:</label>
              <input placeholder="51999999999" type="tel" id="celular" name="telefone" required pattern="[0-9]{11}"
                title="O número deve ter 11 dígitos" />
            </div>
          </fieldset>
          <fieldset class="bloco">
            <div class="dados">
              <label>Estado:</label>
              <select name="estado" id="estados" required>
                <option selected="" value="">Selecione o Estado (UF)</option>
                <option value="Acre">Acre</option>
                <option value="Alagoas">Alagoas</option>
                <option value="Amapá">Amapá</option>
                <option value="Amazonas">Amazonas</option>
                <option value="Bahia">Bahia</option>
                <option value="Ceará">Ceará</option>
                <option value="Distrito Federal">Distrito Federal</option>
                <option value="Espírito Santo">Espírito Santo</option>
                <option value="Goiás">Goiás</option>
                <option value="Maranhão">Maranhão</option>
                <option value="Mato Grosso">Mato Grosso</option>
                <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                <option value="Minas Gerais">Minas Gerais</option>
                <option value="Pará">Pará</option>
                <option value="Paraíba">Paraíba</option>
                <option value="Paraná">Paraná</option>
                <option value="Pernambuco">Pernambuco</option>
                <option value="Piauí">Piauí</option>
                <option value="Rio de Janeiro">Rio de Janeiro</option>
                <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                <option value="Rondônia">Rondônia</option>
                <option value="Roraima">Roraima</option>
                <option value="Santa Catarina">Santa Catarina</option>
                <option value="São Paulo">São Paulo</option>
                <option value="Sergipe">Sergipe</option>
                <option value="Tocantins">Tocantins</option>
              </select>
            </div>
          </fieldset>
          <fieldset class="bloco">
            <div class="dados">
              <label>Cidade:</label>
              <input type="text" id="cidade" placeholder="Cidade" name="cidade" required />
            </div>
          </fieldset>
          <fieldset class="bloco">
            <div class="dados">
              <label>E-mail:</label>
              <input type="email" id="email" name="email" required placeholder="nome@dominio.com"
                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" />
            </div>
          </fieldset>
          <fieldset class="bloco">
            <div class="dados">
              <label>CPF:</label>
              <input type="text" id="cpf" pattern="[0-9]{11}" name="cpf" placeholder="99999999999 " required />
            </div>
          </fieldset>
          <fieldset class="bloco">
            <div class="dados">
              <label>Senha:</label>
              <input type="password" id="senha" name="senha" required />
            </div>
          </fieldset>
          <button type="submit" class="botao" name="submit">Enviar</button>
        </fieldset>
      </form>
    </article>
  </section>
  <hr>
  <footer>
    <a class="icone-footer-a" href="https://www.facebook.com/" target="black">
      <img class="icone-footer" src="../imagens/logoface.png" alt="Facebook" title="Facebook" />
    </a>
    <a class="icone-footer-a" href="https://www.instagram.com/" target="black">
      <img class="icone-footer" src="../imagens/logoinst.png" alt="Instagram" title="Instagram" />
    </a>
    <a class="icone-footer-a" href="https://www.twitter.com/" target="black">
      <img class="icone-footer" src="../imagens/logotwi.png" alt="Twitter" title="Twitter" />
    </a>
  </footer>
</body>

</html>