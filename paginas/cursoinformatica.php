<?php
session_start();
?>
<!DOCTYPE HTML>
<HTML LANG="pt-br">

<HEAD>
    <TITLE>
        Página Técnico em Informática
    </TITLE>
    <META CHARSET="UTF-8" />
    <link rel="stylesheet" type="text/css" href="../css/estilo.css" />
    <link rel="stylesheet" type="text/css" href="../css/menu.css" />
    <link rel="stylesheet" type="text/css" href="../css/cursos.css" />
    <link rel="stylesheet" type="text/css" href="../css/curso-informatica.css" />
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
    <h1 id="informatica-titulo">TÉCNICO EM INFORMÁTICA</h1>
    <div id="informatica-video-container">
        <iframe class="informatica-video" width="880" height="420" src="https://www.youtube.com/embed/1rslr1hNYWY"
            title="Cursos Técnicos Senac-RS - Técnico em Informática" frameborder="0" allow="accelerometer; autoplay; 
        clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <div id="informatica-text-container">
        <h3 id="informatica-text">
            Você busca uma oportunidade de inserção no mercado de trabalho? A área de Informática fascina você?
            Gostaria de agregar conhecimentos fundamentais para os mais diversos segmentos profissionais? Se as
            respostas forem sim, o curso Técnico em Informática do Senac-RS foi feito para você! A formação vai te
            preparar para fazer o planejamento e pela execução dos processos de manutenção de computadores e pela
            operação de redes locais de computadores. Além de, desenvolver aplicativos computacionais, adotando
            normas técnicas, de qualidade, de saúde, de segurança do trabalho e preservação ambiental no
            desempenho de sua função. Por meio de uma proposta pedagógica adequada às exigências do mundo
            profissional, o curso oferece nos momentos presenciais uma aprendizagem pautada por metodologias
            que propiciam atuação por projetos, aulas práticas, teóricas, vivenciais e flexíveis com foco no
            mercado de trabalho. Mas também, momentos mediados por tecnologia, em uma plataforma educacional
            própria, com conteúdos produzidos por tutores altamente qualificados. Ambos os modos estimulam você
            a experimentar habilidades necessárias para os profissionais do futuro.
        </h3>
    </div>
    <div id="informatica-text-container2">
        <h3 id="informatica-text2">
            Área de atuação: seja no suporte técnico, desenvolvimento de softwares, web design, desenvolvimento e
            criação de sites, configuração de redes de computadores, projetos de computação gráfica ou na organização
            de banco de dados, o que não falta para o Técnico em Informática são opções de trabalho. <br>
            Perfil profissional: o profissional após o final do curso, estará apto à manipular computadores e sistemas
            operacionais, desenvolver sistemas computacionais que auxiliem na rotina de trabalho das organizações,
            realizar
            manutenção preventiva e corretiva de equipamentos de informática, conceber e implementar soluções baseadas
            em banco de dados
            , desenvolver aplicações e sites para Internet além de elaborar e documentar projetos de software.
        </h3>
        <img id="informatica-img" src="../imagens/tecinformatica.jpg" alt="" hspace="8" title="" />
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