<?php
session_start();
?>
<!DOCTYPE HTML>
<HTML LANG="pt-br">

<HEAD>
    <TITLE>
        Página dos Cursos
    </TITLE>
    <META CHARSET="UTF-8" />
    <link rel="stylesheet" type="text/css" href="../css/estilo.css" />
    <link rel="stylesheet" type="text/css" href="../css/menu.css" />
    <link rel="stylesheet" type="text/css" href="../css/cursos.css" />
    <link rel="stylesheet" type="text/css" href="../css/jovem-aprendiz.css" />
</HEAD>

<BODY>
    <header class="header-div">
        <img class="logosenac" src="../imagens/logosenac.png" alt="" hspace="8" title="" />
        <div id="btn-container">
            <div class="h1-btn">
                <a href="../index.php"><button class=btnindex>Início</button> </a>
        <a href="../paginas/pagcursos.php"><button class=btnindex> Cursos </button> </a>
        <a href="../paginas/paglocalizacao.php"><button class=btnindex> Localização </button></a>
        <a href="../paginas/pagfaleconosco.php"><button class=btnindex> Fale Conosco </button></a>
        <a href="../paginas/cadastro.php"><button class=btnindex> Cadastro </button></a>
        <a href="../paginas/login.php"><button class=btnindex> Login </button></a>
            </div>
        </div>
    </header>
    <HR />
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
    <div id="aprendiz-videodiv">
        <iframe id="aprendiz-video" src="https://www.youtube.com/embed/5c4IkasDBqQ"
            title="Jovem Aprendiz Senac: Oportunidades que mudam vidas." frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
    </div>
    <div id="aprendiz-textodiv">
        <h2 id="aprendiz-texto">O Programa de Aprendizagem Profissional Comercial é parte primordial das ações do
            Programa Senac de
            Gratuidade (PSG) em todo o País. Ele atende aos dispositivos da Lei da Aprendizagem (Lei 10.097/2000) e
            diferentes normativas que tratam da obrigatoriedade das empresas de contratarem jovens aprendizes.
            <br>
            É por meio do Programa de Aprendizagem, também conhecido como Jovem Aprendiz, que o Senac promove a inserção
            social de jovens com idade de 14 a 24 anos. A empresa contrata o jovem aprendiz e o inscreve no Senac. A
            partir daí, ele alterna jornadas na escola de educação básica, nas unidades do Senac e na empresa,
            preparando-se para o mundo do trabalho.
        </h2>
    </div>
    <hr />
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
</BODY>

</HTML>