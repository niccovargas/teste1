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
    <link rel="stylesheet" type="text/css" href="../css/rs-ti.css" />
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
    <div id="RSTI-textodiv">
        <h2 id="RSTI-texto">
            O programa RSTI visa capacitar profissionais para área de Tecnologia da Informação a fim de desenvolver
            habilidades técnicas necessárias e então conectá-los às oportunidades de trabalho das empresas parceiras. Ao
            todo são 9 mil vagas, sendo 3 mil gratuitas e ofertadas em 18 escolas Senac espalhadas pelo Estado ao longo
            dos anos de 2022 e 2023. Com apenas 53 mil pessoas formadas por ano em cursos de perfil tecnológico e uma
            demanda média anual de 159 mil profissionais de Tecnologia da Informação, o Brasil tem um grande desafio
            pela frente. É o que aponta o estudo publicado pela Associação Brasileira das Empresas de Tecnologia da
            Informação e Comunicação – BRASSCOM em dezembro de 2021. O relatório estima que as empresas de tecnologia
            demandem 797 mil talentos até 2025, porém, a projeção é de um déficit anual de 106 mil talentos – 530 mil em
            cinco anos. “São números que refletem a realidade de um setor estratégico para o crescimento do país e que
            deixam exposta a necessidade urgente de capacitação profissional. O Programa RS TI visa ampliar a oferta de
            mão de obra qualificada e, assim, atender a demanda das empresas da área com cursos ofertados pelo Programa
            Senac de Gratuidade”, explica o diretor regional do Sesc/Senac, José Paulo da Rosa.
        </h2>
    </div>
    <div id="RSTI-videodiv">
        <iframe id="RSTI-video" src="https://www.youtube.com/embed/d08Tno8w5wI" title="Programa RS TI" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
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