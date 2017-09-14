
<html>
	<head>
		<meta charset='utf-8'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Marlon Braga</title>
		<link rel="shortcut icon" href="img/office_work2.ico">
		<link rel="stylesheet" href="ImageGallery.css">
		<link rel="stylesheet" href="post.css">
		<link rel="stylesheet" href="styles.css">
		<link rel="stylesheet" href="sobre.css">
		<script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.xdomainajax.js"></script>

		<style>
			@font-face {
				font-family: 'Syncopate';
				src: url('fonts/StMarie-Thin-webfont.eot');
				src: url('fonts/Syncopate-Regular.ttf') format('truetype');
				
				font-weight: normal;
				font-style: normal;
			}
			@font-face {
				font-family: 'Ubuntu-Regular';
				src: url('fonts/Ubuntu-Regular.eot');
				src: url('fonts/Ubuntu-Regular.ttf') format('truetype');
				
				font-weight: normal;
				font-style: normal;
			}
			@font-face {
				font-family: 'Ubuntu-Light';
				src: url('fonts/Ubuntu-Light.eot');
				src: url('fonts/Ubuntu-Light.ttf') format('truetype');
				
				font-weight: normal;
				font-style: normal;
			}
			h1{
				margin: 0.25em 0px 0em 0px;
				font-family: 'Syncopate';
				font-size: 1.0em;
				color: #000;
			}h2{
				margin: 30px;
				font-family: 'Ubuntu-Light';
				font-size: 0.65em;
				color: black;
				font-weight: lighter;
				font-style:normal;
			}h3{
				margin: 20px;
				font-family: 'Syncopate';
				font-size: 0.65em;
				color: #459A22;
				text-align: left;
			}h4{
				margin: 0px;
				font-family: 'Ubuntu-Regular';
				font-size: 0.6em;
				color: black;
				text-align: left;
				font-weight: bold;

			}h5{
				margin: 0px;
				font-family: 'Syncopate';
				font-size: 0.8em;
				color: #AAA;
			}li{
				font-weight: normal;
			}
			.sobreTexto{
				font-size: 0.5em;
			}

			img.imgPost{
				border: 5px double #AAA;
				border-radius: 5px;
				max-width: 512px;
				margin: 0px auto 0px auto;

			}
			@media screen and (max-width: 550px) {
				img.imgPost{
					max-width: 95%;
				}
			}
		</style>


	</head>
	<body>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#detalhes_cp2").slideToggle();
				$("#detalhes_cefet").slideToggle();
				//$("#detalhes_uerj").slideToggle();
				$("#detalhes_cefet2").slideToggle();
				$("#detalhes_senai").slideToggle();
				//$("#detalhes_ydreams").slideToggle();

				$("#detalhes_cp2_button").click(function(){
					$("#detalhes_cp2").slideToggle();
				});
				$("#detalhes_cefet_button").click(function(){
					$("#detalhes_cefet").slideToggle();
				});
				$("#detalhes_uerj_button").click(function(){
					$("#detalhes_uerj").slideToggle();
				});
				$("#detalhes_cefet2_button").click(function(){
					$("#detalhes_cefet2").slideToggle();
				});
				$("#detalhes_senai_button").click(function(){
					$("#detalhes_senai").slideToggle();
				});
				$("#detalhes_ydreams_button").click(function(){
					$("#detalhes_ydreams").slideToggle();
				});

			});
		</script>
		<div class="tudo">
			<div class="geral" style="max-width: 100%; text-align:center; background-image: none;">
				<div class="content1">
					<!--<img height="300px" width="300px" style="padding-bottom:60px; padding-top:40px;" src="img/construcao.png">-->
					<style type="text/css">
						a.a:hover{
							color:black;
						}
					</style>
					<a href="index.php?p=sobre#" class="a">					
						<div class="about sobre" style="float:right;">
							<div class="inner_sobre" >
								<img src="img/Marlon.jpg" class="fotoPerfil"/>
								<p class="sobreTexto">
									&emsp;Técnico em Informática e Bacharel em Ciência da Computação pela UERJ.
									É entusiasta da Realidade Virtual e Gameficação.
									Trabalha na YDreams desenvolvendo sistemas interativos. Hoje, continua explorando novos recursos e aplicações imersivas.
								</p>
							</div>
						</div>
					</a>

					
					<div>
						<h4></h4>
					</div>

					<div><h3>Formação</h3></div>
					<div>
						<h4>
							<div>
								<div id="detalhes_cp2_button" >
									<img class='img_formacao' src='img/logo_cp2.png'/>
									<div class="inf_formacao">
										<div class="inf_formacao_titulo">
											Nível Médio<br>
											Bacharel em Ciências e Letras
										</div>
										<div class="loading_bar">
											<div class="loading_bar_level" style="width: 100%;"></div>
											<div class="loading_bar_status" style="margin-top:3px;">Concluído - 100%</div>
										</div>
									</div>
								</div>
								<div class="detalhes" id="detalhes_cp2">
								<p>
									<b>REPRESENTANTE DE TURMA</b><br>
									Nada de mais...
								</p>
								</div>
								<div style='clear: left;'></div>
							</div>
							<div style='clear: left;'></div>
							<div>
								<div id="detalhes_cefet_button" >
									<img class='img_formacao' src='img/logo_cefet.png'/>
									<div class="inf_formacao">
										<div class="inf_formacao_titulo">
											Nível Técnico<br>
											Técnico em Informática
										</div>
										<div class="loading_bar">
											<div class="loading_bar_level" style="width: 100%;"></div>
											<div class="loading_bar_status" style="margin-top:3px;">Concluído - 100%</div>
										</div>
									</div>
								</div>
							</div>
							<div class="detalhes" id="detalhes_cefet">
								<p>
									<b>ALUNO EMPENHADO</b><br>
									Formado com nenhuma reprovação.
								</p>
								</div>
							<div style='clear: left;'></div>
							<div>
								<div id="detalhes_uerj_button" >
									<img class='img_formacao' src='img/uerj.png'/>
									<div class="inf_formacao">
										<div class="inf_formacao_titulo">
											Nível superior<br>
											Bacharel de Ciências da Computação
										</div>
										<div class="loading_bar">
											<div class="loading_bar_level" style="width: 100%;"></div>
											<div class="loading_bar_status" style="margin-top:3px;">Concluído - 100%</div>
										</div>
									</div>
								</div>
							</div>
							<div class="detalhes" id="detalhes_uerj">
								<p>
									<b>REPRESENTANTE DISCENTE DO CONSELHO DE INFORMÁTICA E CIÊNCIA DA COMPUTAÇÃO</b><br>
									Principais atividades: Participar da discussão sobre ementa de disciplinas e grade curricular; Analisar solicitações de alunos; Levar propostas de melhoria ao conselho dos professores;
								</p>
								<p>
									<b>DIRETOR DE CENTRO ACADÊMICO</b><br>
									Principais atividades: Desenvolvimento e manutenção voluntária do sistema de Avaliação de Professores; Consolidar e discutir a opinião e propostas de melhoria acadêmica dos alunos do Instituto de Matemática e Estatística.
								</p>
							<div>
							<div style='clear: left;'></div>
						</h4>
					</div>
					<div style='clear: both;'></div>
					<div><h3>Interesses</h3></div>
					<div>
						<h4 class="interesse_4x1" >
							<div style="margin: 20px; margin-left: 15%; float:left;">
								<img class='img_interesse' alt="Games" src='img/joystick.png'/>
								<p style="font-weight: bold; text-align:center;">
									Games
								</p>
							</div>
							<div style="margin: 20px; float:left;">
								<img class='img_interesse' alt="Realidade Virtual" src='img/rv.png'/>
								<p style="font-weight: bold; text-align:center;">
									RV
								</p>
							</div>
							<div style="margin: 20px; float:left;">
								<img class='img_interesse' alt="Realidade Aumentada" src='img/ra.png'/>
								<p style="font-weight: bold; text-align:center;">
									RA
								</p>
							</div>
							<div style="margin: 20px; float:left;">
								<img class='img_interesse' alt="Gamificação" src='img/gamification.png'/>
								<p style="font-weight: bold; text-align:center;">
									Gamificação
								</p>
							</div>
						</h4>
					</div>
					<div>
						<h4 class="interesse_2x2">
							<div style="margin: 20px; margin-left: 20%; float:left;">
								<img class='img_interesse' alt="Games" src='img/joystick.png'/>
								<p style="font-weight: bold; text-align:center;">
									Games
								</p>
								<img class='img_interesse' alt="Realidade Virtual" src='img/rv.png'/>
								<p style="font-weight: bold; text-align:center;">
									RV
								</p>
							</div>
							<div style="margin: 20px; float:left;">
								<img class='img_interesse' alt="Realidade Aumentada" src='img/ra.png'/>
								<p style="font-weight: bold; text-align:center;">
									RA
								</p>
								<img class='img_interesse' alt="Gamificação" src='img/gamification.png'/>
								<p style="font-weight: bold; text-align:center;">
									Gamificação
								</p>
							</div>
						</h4>
					</div>
					<div>
						<h4 class="interesse_2x2_2">
							<div style="margin: 20px; margin-left: 10%; float:left;">
								<img class='img_interesse' alt="Games" src='img/joystick.png'/>
								<p style="font-weight: bold; text-align:center;">
									Games
								</p>
								<img class='img_interesse' alt="Realidade Virtual" src='img/rv.png'/>
								<p style="font-weight: bold; text-align:center;">
									RV
								</p>
							</div>
							<div style="margin: 20px; float:left;">
								<img class='img_interesse' alt="Realidade Aumentada" src='img/ra.png'/>
								<p style="font-weight: bold; text-align:center;">
									RA
								</p>
								<img class='img_interesse' alt="Gamificação" src='img/gamification.png'/>
								<p style="font-weight: bold; text-align:center;">
									Gamificação
								</p>
							</div>
						</h4>
					</div>
					<div style='clear: both;'></div>
					<div><h3>Habilidades</h3></div>
					<div>
						<h4>
							<div style='padding:40px; width:300px; border:0px solid black; float:left;'>
								
									<table>
										<tr><td colspan="2"><h4 style='text-align:center; font-size:18px; font-weight:bold; color:#459A22;'>WEB</h4></td></tr>
										<tr><td class="skills">PHP</td>					<td><div class="loading_bar_skills"><div style="width:70%;" class="loading_bar_skills_level"></div></div></td></tr>
										<tr><td class="skills">HTML 5</td>				<td><div class="loading_bar_skills"><div style="width:95%;" class="loading_bar_skills_level"></div></div></td></tr>
										<tr><td class="skills">CSS 3</td>				<td><div class="loading_bar_skills"><div style="width:101%;" class="loading_bar_skills_level"></div></div></td></tr>
										<tr><td class="skills">Design Responsivo</td>	<td><div class="loading_bar_skills"><div style="width:90%;" class="loading_bar_skills_level"></div></div></td></tr>
										<tr><td class="skills">SQL</td>					<td><div class="loading_bar_skills"><div style="width:60%;" class="loading_bar_skills_level"></div></div></td></tr>
										<tr><td class="skills">Javascript</td>			<td><div class="loading_bar_skills"><div style="width:50%;" class="loading_bar_skills_level"></div></div></td></tr>
										<tr><td class="skills">JQuery</td>				<td><div class="loading_bar_skills"><div style="width:50%;" class="loading_bar_skills_level"></div></div></td></tr>
										<tr><td class="skills">Ajax</td>				<td><div class="loading_bar_skills"><div style="width:70%;" class="loading_bar_skills_level"></div></div></td></tr>
									</table>
							</div>
							<div style='padding:40px; width:300px; border:0px solid black; float: left;'>
								
									<table>
										<tr><td colspan="2"><h4 style='text-align:center; font-size:18px; font-weight:bold; color:#459A22;'>Games, RV e RA</h4></td></tr>
										<tr><td class="skills">Unity</td><td><div 	class="loading_bar_skills"><div style="width:70%;" class="loading_bar_skills_level"></div></div></td></tr>
										<tr><td class="skills">C#</td><td><div 		class="loading_bar_skills"><div style="width:50%;" class="loading_bar_skills_level"></div></div></td></tr>
										<tr><td class="skills">Vuforia</td><td><div class="loading_bar_skills"><div style="width:70%;" class="loading_bar_skills_level"></div></div></td></tr>
									
										<tr><td style="height:20px;" colspan="2"> </td></tr>
										<tr><td colspan="2"><h4 style='text-align:center; font-size:18px; font-weight:bold; color:#459A22;'>Mobile</h4></td></tr>
										<tr><td class="skills">Android(Java, XML)</td><td><div 	class="loading_bar_skills"><div style="width:25%;" class="loading_bar_skills_level"></div></div></td></tr>
										<tr><td class="skills">Xamarim(C#)</td><td><div 		class="loading_bar_skills"><div style="width:20%;" class="loading_bar_skills_level"></div></div></td></tr>
										<tr><td class="skills">Cordova(CSS)</td><td><div 		class="loading_bar_skills"><div style="width:50%;" class="loading_bar_skills_level"></div></div></td></tr>
									</table>
							</div>
							<div style='padding:40px; width:300px; border:0px solid black; float: left;'>
								
									<table>
										<tr><td colspan="2"><h4 style='text-align:center; font-size:18px; font-weight:bold; color:#459A22;'>Eng & Arch</h4></td></tr>
										<tr><td class="skills">Scrum</td><td><div 			class="loading_bar_skills"><div style="width:95%;" class="loading_bar_skills_level"></div></div></td></tr>
										<tr><td class="skills">UML</td><td><div 			class="loading_bar_skills"><div style="width:75%;" class="loading_bar_skills_level"></div></div></td></tr>
										<tr><td class="skills">Desing Patterns</td><td><div class="loading_bar_skills"><div style="width:30%;" class="loading_bar_skills_level"></div></div></td></tr>

										<tr><td style="height:20px;" colspan="2"> </td></tr>

										<tr><td colspan="2"><h4 style='text-align:center; font-size:18px; font-weight:bold; color:#459A22;'>Banco de Dados</h4></td></tr>
										<tr><td class="skills">MySQL</td><td><div 	class="loading_bar_skills"><div style="width:95%;" class="loading_bar_skills_level"></div></div></td></tr>
										<tr><td class="skills">Postgre</td><td><div class="loading_bar_skills"><div style="width:80%;" class="loading_bar_skills_level"></div></div></td></tr>
									</table>
							</div>
						</h4>
					</div>
					<div style='clear: left;'></div>
					<div><h3>Experiências</h3></div>
					<div>
						<h4>
							<div>
								<div id='detalhes_cefet2_button'>
									<img class='img_formacao' src='img/logo_cefet.png'/>
									<div class="inf_formacao">
										<div class="inf_experiencia_titulo">
											Estágio Nível Técnico<br>
											Centro Federal de Educação Tecnológica
										</div>
									</div>
								</div>
							</div>
							<div style='clear: left;'></div>
							<div class="detalhes " id="detalhes_cefet2">
								<p>
									<b>PROGRAMAÇÃO, REDES e MANUTENÇÃO</b><br>
									Principais atribuições: Auxílio na instalação, configuração e manutenção de servidores Linux e Windows, instalação de máquinas virtuais, instalação de pontos de rede, instalação de software(anti-vírus, pacote office), auxílio em desenvolvimento de sistemas
								</p>
							</div>
							<div style='clear: left;'></div>



							
							<div>
								<div id='detalhes_senai_button'>
									<img class='img_formacao' src='img/cts.png'/>
									<div class="inf_formacao">
										<div class="inf_experiencia_titulo">
											Estágio Nível Superior<br>
											Centro de Tecnologia do SENAI
										</div>
									</div>
								</div>
							</div>
							<div style='clear: left;'></div>
							<div class="detalhes " id="detalhes_senai">
								<p>
									<b>PROGRAMAÇÃO</b><br>
									Desenvolvimento de Simuladores Industriais imersivos e Jogos digitais. Projetos realizados na engine UNITY3D e linguagem de programação C#.
								</p>
							</div>
							<div style='clear: left;'></div>
							



							<div>
								<div id='detalhes_ydreams_button'>
									<img class='img_formacao' src='img/ydreams.png'/>
									<div class="inf_formacao">
										<div class="inf_experiencia_titulo">
											Auxiliar de desenvolvimento<br>
											YDreams Brasil
										</div>
									</div>
								</div>
							</div>
							<div style='clear: left;'></div>
							<div class="detalhes " id="detalhes_ydreams">
								<p>
									<b>PROGRAMAÇÃO</b><br>
									Desenvolvimento de Sistemas Interativos. Projetos realizados na engine UNITY3D e linguagem de programação C#.
								</p>
							</div>
							<div style='clear: left;'></div>



						</h4>
					</div>
					<div style='clear: both;'></div>
					<div><h3>Parceiros</h3></div>
					<div style="margin: auto;" >
						<div class="parceiros">
							<a target="_blank" href="http://www.isiscarvalho.arq.br">
								<img class='img_interesse' alt="Gameficação" src='img/sobre/isis.jpg'/>
								<p style="color:#111; font-size: 25px; font-weight: normal; text-align:center;">
									Isis Carvalho<br>
									<font style='font-size: 13px; font-weight: lighter;'>Arquitetura e Interiores</font>
								</p>
							</a>
						</div>
						<div class="parceiros">
							<a target="_blank" href="https://www.linkedin.com/in/ricardo-castro-aa74239b?authType=NAME_SEARCH&authToken=L9x4&locale=pt_BR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A356375647%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1458320304260%2Ctas%3Acastro">
								<img class='img_interesse' alt="Gameficação" src='img/sobre/ricardo.jpg'/>
								<p style="color:#111; font-size: 25px; font-weight: normal; text-align:center;">
									Ricardo Renault<br>
									<font style='font-size: 13px; font-weight: lighter;'>Programação Mobile</font>
								</p>
							</a>
						</div>
						<div class="parceiros">
							<a target="_blank" href="https://www.linkedin.com/in/amanda-salles-21b07337?authType=NAME_SEARCH&authToken=5TaG&locale=pt_BR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A128547959%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1458320313332%2Ctas%3Aamanda">
								<img class='img_interesse' alt="Gameficação" src='img/sobre/amanda.jpg'/>
								<p style="color:#111; font-size: 25px; font-weight: normal; text-align:center;">
									Amanda Salles<br>
									<font style='font-size: 13px; font-weight: lighter;'>Design 3D</font>
								</p>
							</a>
						</div>
						<div style='clear: left;'></div>
					</div>
				</div>

		</div>
	</body>
