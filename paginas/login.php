<?php
session_start();
?>

<!DOCTYPE HTML>
<HTML LANG="pt-br">

<HEAD>
  <TITLE>
    Página Login
  </TITLE>
  <META CHARSET="UTF-8" />
  <link rel="stylesheet" type="text/css" href="../css/estilo.css" />
  <link rel="stylesheet" type="text/css" href="../css/menu.css" />
  <link rel="stylesheet" type="text/css" href="../css/login.css" />
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
  <div class="login-div"><h4 class="login"><?php
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
      <form action="verificaLogin.php" method="post">
        <fieldset>
        <div class="logas">
              <label>Login</label>
            </div>
          <fieldset class="bloco">
            <div class="dados">
              <label>Nome:</label>
              <input type="text" id="nome" name="nome" required />
            </div>
          </fieldset>
          <fieldset class="bloco">
            <div class="dados">
              <label>Senha:</label>
              <input type="password" id="senha" name="senha" required />
            </div>
          </fieldset>
          <button type="submit" class="botao" name="entrar">Enviar</button>
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