<?php
session_start();
?>
<!DOCTYPE HTML>
<HTML LANG="pt-br">

<HEAD>
    <TITLE>
        Página Técnico em Desenvolvimento de Sistemas
    </TITLE>
    <META CHARSET="UTF-8" />
    <link rel="stylesheet" type="text/css" href="../css/estilo.css" />
    <link rel="stylesheet" type="text/css" href="../css/menu.css" />
    <link rel="stylesheet" type="text/css" href="../css/cursos.css" />
    <link rel="stylesheet" type="text/css" href="../css/curso-sistemas.css" />
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
    <h1 id="sistemas-titulo">TÉCNICO EM DESENVOLVIMENTO DE SISTEMAS</h1>
    <div id="sistemas-video-container">
        <iframe class="sistemas-video" width="560" height="315" src="https://www.youtube.com/embed/vIRCb-mXZG0"
            title="Técnico em Desenvolvimento de Sistemas" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
    </div>
    <div id="sistemas-text-container">
        <h3 id="sistemas-text">
            Com a duração de 13 meses, o curso Técnico em Administração capacita você a executar atividades
            administrativas
            relacionadas aos processos de gestão de pessoas, de operações logísticas, gestão de materiais e patrimônio,
            de
            marketing, de vendas e de finanças. Atua em organizações públicas e privadas de segmentos variados, tais
            como
            das áreas de comércio, de serviços, da indústria, de consultoria, de ensino e pesquisa, relacionando-se com
            equipes de diversos setores da organização, por meio da prestação de serviços autônomos, temporários ou
            contrato
            efetivo. Com uma forma de ensino flexível e de fácil entendimento, o curso se adapta a sua rotina e torna
            você o
            protagonista da sua aprendizagem.
        </h3>
    </div>
    <div id="sistemas-text-container2">
        <h3 id="sistemas-text2">
            Área de atuação: o técnico em desenvolvimento de sistemas atua em diferentes organizações, públicas ou
            privadas, de diversos portes atuando na programação de sistemas e/ou na manipulação de banco de dados. <br>
            Perfil profissional: após a conclusão do curso, o estudante terá perfil dinâmico, proativo e obstinado por
            tecnologias e sistemas. Busca estar atualizado/a e adquirir constante conhecimento em sua área.
            Sugeri/implementa melhorias sistêmicas por meio da sua contribuição na elaboração de novos projetos, na
            busca da melhor experiência do usuário. <br>
        </h3>
        <img id="sistemas-img" src="../imagens/devsistemas.jpeg" alt="" hspace="8" title="" />
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