<?php
session_start();
?>
<!DOCTYPE HTML>
<HTML LANG="pt-br">

<HEAD>
    <TITLE>
        Página Técnico em Administração
    </TITLE>
    <META CHARSET="UTF-8" />
    <link rel="stylesheet" type="text/css" href="../css/estilo.css" />
    <link rel="stylesheet" type="text/css" href="../css/menu.css" />
    <link rel="stylesheet" type="text/css" href="../css/cursos.css" />
    <link rel="stylesheet" type="text/css" href="../css/curso-administracao.css" />
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
    <h1 id="administracao-titulo">TÉCNICO EM ADMINISTRAÇÃO</h1>
    <div id="administracao-video-container">
        <iframe class="administracao-video" width="560" height="315" src="https://www.youtube.com/embed/DbyeXgRjPbE"
            title="Técnico em Administração" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; 
        web-share" allowfullscreen></iframe>
    </div>
    <div id="administracao-text-container">
        <h3 id="administracao-text">
            O profissional administrativo tem amplas possibilidades no mercado de trabalho! Com a duração de 13 meses,
            o curso Técnico em Administração capacita você a executar atividades administrativas relacionadas aos
            processos de gestão de pessoas, de operações logísticas, gestão de materiais e patrimônio, de marketing, de
            vendas e de finanças. Atua em organizações públicas e privadas de segmentos variados, tais como das áreas
            de comércio, de serviços, da indústria, de consultoria, de ensino e pesquisa, relacionando-se com equipes
            de diversos setores da organização, por meio da prestação de serviços autônomos, temporários ou contrato
            efetivo.
        </h3>
    </div>
    <div id="administracao-text-container2">
        <img id="administracao-img" src="../imagens/tecadministracao2.jpg" alt="" hspace="8" title="" />
        <h3 id="administracao-text2">
            Área de atuação: o técnico em administração pode atuar em organizações públicas e privadas de segmentos
            variados, tais como áreas do comércio, de serviços, da indústria, de consultoria, de ensino e pesquisa ou
            até mesmo ser o empreendedor do próprio negócio. <br> Perfil profissional: após a formação, você estará apto
            para executar atividades administrativas relacionadas aos processos de gestão de pessoas, de operações
            logísticas, de gestão de materiais e patrimônio, de marketing, de vendas e de finanças.
        </h3>
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