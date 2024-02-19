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
	<H2 class="titulos-cursos">Técnico em informática</H2>
	<div id="div-cursos1">
		<img id="cursos-img1" src="../imagens/tecnicoeminformatica.jpg" alt="Foto" hspace="8" title="" />
		<h4 id="texto-tec1">
			Ele diagnostica e resolve problemas de hardware e software.
			Realiza montagem, acabamento e manutenção de computadores
			(desktops e outros dispositivos eletrônicos), instalação e
			configuração de redes, além de trabalhar no desenvolvimento de
			sistemas e websites. O técnico em informática é aquele profissional
			responsável pela montagem e manutenção de computadores, detecção e
			correção de problemas nos sistemas, instalação e configuração de
			redes, aplicativos, programas e softwares, além de desenvolvimento
			de sistemas e websites. Saiba mais <a href="../paginas/cursoinformatica.php">AQUI</a>.</h4>
	</div>
	<h2 class="titulos-cursos">
		Técnico em Administração
	</h2>
	<div id="div-cursos2">
		<img id="cursos-img2" src="../imagens/tecnicoemadministracao.jpg" alt="" hspace="8" title="" />
		<h4 id="texto-tec2">
			Auxilia na administração de empresas como um todo,
			executando diversas tarefas administrativas. Ele é versátil
			e pode atuar em áreas como comunicação, marketing, gestão de
			pessoas, planejamento, vendas, logística e muitas outras.
			O curso Técnico de Administração é responsável por formar
			profissionais responsáveis em executar as atividades administrativas
			da organização, principalmente relacionados ao processo de gestão
			de pessoas, marketing, vendas, operação de logística e outras. Saiba mais <a
				href="../paginas/cursoadministracao.php">AQUI</a>.</h4>
	</div>
	<h2 class="titulos-cursos">
		Técnico em Desenvolvimento de Sistemas
	</h2>
	<div>
		<h4 id="texto-tec3">
			O Técnico em Desenvolvimento de Sistemas desenvolve programas
			para computadores e outros dispositivos computacionais como, por
			exemplo, aparelhos celulares e tablets, visando a automação de
			todos os processos relativos às Tecnologias de Informação e
			Comunicação (TIC), seu trabalho envolve a produção de software e
			sua integração com processos administrativos, comerciais,
			hospitalares, industriais, de automação residencial, automação
			industrial, de serviços, de telecomunicações e de teleprocessamento. <br> Saiba mais <a
				href="../paginas/cursosistemas.php">AQUI</a>.</h4>
	</div>
	<div id="cursos-abertos">
		<h2 class="titulos-cursos">
			Cursos Livres Abertos
		</h2>
		<h3 class="titulos-cursos-abertos">PHOTOSHOP</h3>
		<h4 class="texto-cursos-abertos">O Photoshop, que é uma das principais soluções da Adobe, está em grande
			ascensão, com ele é possível a criação e adequação de projetos.
			Para atender a demanda de trabalho, surge o curso de Photoshop, que oferece a formação completa para montar,
			editar, manipular, e tratar imagens,
			desenvolvendo habilidades para trabalhar correção de cores, restauração de fotos, exportação dos arquivos em
			outros formatos, com preparação para
			impressão ou internet.</h4>
		<h3 class="titulos-cursos-abertos">ILLUSTRATOR</h3>
		<h4 class="texto-cursos-abertos">Com o crescimento das mídias sociais, surge a alta demanda por criações de
			design inteligente e que atenda às necessidades das organizações.
			Neste cenário, o mercado exige um profissional capacitado para desenvolver as peças gráficas. Você se
			identifica com essa demanda? Então, o curso
			Illustrator pode ser uma ótima oportunidade de qualificação. </h4>
		<h3 class="titulos-cursos-abertos">EXCEL AVANÇADO</h3>
		<h4 class="texto-cursos-abertos">O Excel é um dos programas mais utilizados no ambiente corporativo. A
			ferramenta permite a criação e manipulação de planilhas de cálculos e a
			incorporação de gráficos com rapidez. Para quem quer aprimorar conhecimentos sobre o seu uso, o Senac-RS tem
			a continuidade dessa formação, com o
			curso de Excel Avançado. </h4>
		<h3 class="titulos-cursos-abertos">EXCEL PROFISSIONAL</h3>
		<h4 class="texto-cursos-abertos">O mercado de trabalho demanda profissionais aptos a operar ferramentas
			computacionais, entre elas o Excel. O programa oferece recursos de
			planilhas eletrônicas, edição de fórmulas, funções e os mais variados gráficos, trazendo agilidade nos
			processos de trabalho e facilitando o
			controle do negócio. Para quem quer se tornar um profissional dessa área, o Senac-RS oferece o curso de
			Excel Profissional.</h4>
		<h3 class="titulos-cursos-abertos">APLICAÇÕES WEB COM PHYTON</h3>
		<h4 class="texto-cursos-abertos">Python é uma linguagem de programação com o nível de abstração mais próximo da
			linguagem humana, facilitando a compreensão de seu código,
			bem como seu aprendizado. Além disso, é orientada a objeto de tipagem dinâmica, fortemente interativa. Essa
			linguagem foi criada sob o ideal da
			"programação de computadores para todos". Este curso tem como objetivo desenvolver a seguinte competência:
			desenvolver aplicações web com Python.
			É destinado a profissionais e estudantes da área de tecnologia da informação (TI).</h4>
		<h3 class="titulos-cursos-abertos">ATENDENTE DE FARMÁCIA</h3>
		<h4 class="texto-cursos-abertos">Você sabia que fazendo esta qualificação profissional você tem mais chances de
			entrar no mercado de trabalho? O profissional Atendente de
			Farmácia realiza o suporte de atendimento ao cliente, por meio da leitura de prescrições e solicitação dos
			clientes, separação, entrega e
			comercialização de medicamentos e de outros produtos para saúde (correlatos), produtos de higiene pessoal,
			perfumaria e cosméticos (HPPC), bem
			como na disposição e reposição de produtos, no auxílio do controle de estoque e na organização do
			estabelecimento. </h4>
		<h3 class="titulos-cursos-abertos">EDITOR DE VÍDEO</h3>
		<h4 class="texto-cursos-abertos">Você sabia que o mercado da computação gráfica digital está em expansão na
			indústria da informática? Por isso é necessária a formação de
			profissionais especializados e aprimorados, em constante renovação de técnicas e fundamentos em edição de
			vídeos. Se você deseja ter uma
			carreira multifuncional, o Editor de Vídeo é uma excelente opção. </h4>
		<h3 class="titulos-cursos-abertos">LÓGICA DE PROGRAMAÇÃO</h3>
		<h4 class="texto-cursos-abertos">O estudo da lógica de programação ajuda na compreensão de problemas básicos de
			forma sistematizada, viabilizando a solução de problemas de alta
			complexidade. Além disso, o estudo da lógica de programação é a base para a carreira de desenvolvimento de
			softwares. Nesse sentido, as
			linguagens de programação, seguindo a analogia dos padrões (gramática) e idiomas, é muito importante, e, por
			isso, conhecer e entender a lógica
			de programação antes de começar a programar torna-se ainda mais essencial.</h4>
	</div>
	<div id="rsti-aprendizagem-div">
		<div id="jovem-aprendiz">
			<h3 id="titulo-jovem-aprendiz">PROGRAMA PROGRAMA JOVEM APRENDIZ</h3>
			<h4 id="texto-jovem-aprendiz">Ao escolher ser um aprendiz, você coloca em prática uma profissão, aumentando
				as chances de conseguir o primeiro emprego.Para se candidatar, você precisa ter de 14 a 24 anos
				incompletos, estar cursando o ensino fundamental ou o ensino médio e encontrar uma empresa que esteja
				contratando aprendizes. Não há limite máximo de idade, se você possuir algum tipo de deficiência.
				<br> Saiba mais <a href="../paginas/jovemaprendiz.php">AQUI</a>.
			</h4>
		</div>
		<div id="programa-rsti">
			<h3 id="titulo-rsti">PROGRAMA RSTI</h3>
			<h4 id="texto-rsti">O objetivo do programa é capacitar pessoas para atuarem no mercado de Tecnologia da
				Informação do Rio Grande do Sul, a fim de desenvolver habilidades técnicas necessárias para atuação como
				Desenvolvedores de Software. O Programa RS TI oferece o benefício de conectar os profissionais
				capacitados nas trilhas de formação às oportunidades de trabalho ofertadas pelas empresas parceiras.
				Dessa forma, apresentamos esta plataforma, a qual irá aproximar esses públicos em diversas localidades
				do Rio Grande do Sul.
				<br> Saiba mais <a href="../paginas/programaRSTI.php">AQUI</a>.
			</h4>
		</div>
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