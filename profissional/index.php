<?php
	header('Content-Type: text/html; charset=utf-8');
	$servername = "localhost";
	$username = "marlo247";
	$password = "Marlon64!";
	$dbname = "marlo247_projetos";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	$conn->set_charset('utf8');

	// Check connection
	if ($conn->connect_error) {
	    die("[Connection failed: " . $conn->connect_error."]");
	} 
	$query = 
		"SELECT * FROM 
			(
			  SELECT * 
					FROM  `projeto`
					WHERE `experiencia`=1 || `projeto`=1
					ORDER BY  `projeto`.`data` DESC 
					LIMIT 3
			) DUMMY_ALIAS1

			UNION ALL

			SELECT * FROM
			( 
			  SELECT * 
					FROM  `projeto`
					WHERE `post`=1
					ORDER BY  `projeto`.`data` DESC 
					LIMIT 3
			) DUMMY_ALIAS2
		";
	$i=0;
	$trabalho = array(
					array('nome'=>"",'resumo'=>"",'imagem1'=>"",'imagem2'=>"",'imagem3'=>"",'pagina'=>""),
					array('nome'=>"",'resumo'=>"",'imagem1'=>"",'imagem2'=>"",'imagem3'=>"",'pagina'=>""),
					array('nome'=>"",'resumo'=>"",'imagem1'=>"",'imagem2'=>"",'imagem3'=>"",'pagina'=>""),
					array('nome'=>"",'resumo'=>"",'imagem1'=>"",'imagem2'=>"",'imagem3'=>"",'pagina'=>""),
					array('nome'=>"",'resumo'=>"",'imagem1'=>"",'imagem2'=>"",'imagem3'=>"",'pagina'=>""),
					array('nome'=>"",'resumo'=>"",'imagem1'=>"",'imagem2'=>"",'imagem3'=>"",'pagina'=>"")
				);
	if ($result = mysqli_query($conn, $query)) {
		if ($row = mysqli_fetch_assoc($result)){
			do{
				$i++;
				$trabalho[$i]['nome']=$row['nome'];
				$trabalho[$i]['resumo']=$row['resumo'];
				$trabalho[$i]['imagem1']=$row['imagem1'];
				$trabalho[$i]['imagem2']=$row['imagem2'];
				$trabalho[$i]['imagem3']=$row['imagem3'];
				$trabalho[$i]['pagina']=$row['pagina'];
			}while($row = mysqli_fetch_assoc($result));
		}else{
			echo"- Sem resultados -<br>[".$query."]";
		}
	    mysqli_free_result($result);
	}else{
		echo("Error description: <br> " . mysqli_error($conn));
		echo"<br><br>[ ".$query." ]";
	}




	
?>
<html>
	<head>
		<meta charset='utf-8'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge;text/html;charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Marlon Braga</title>
		<link rel="shortcut icon" href="img/logo_Overreal.ico">
		<link rel="stylesheet" href="styles.css">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.xdomainajax.js"></script>


		<script type="text/javascript">
			$(document).ready(function(){
				<?php
					if(isset($_REQUEST['p'])){
						if($_REQUEST['p'] == 'sobre')
							echo" $('.content').load('sobre.php'); ";
						else
							echo" $('.content').load('post.php?p=".$_REQUEST['p']."'); ";
					}
				?>
			    $(".artigo1").click(function(){
			    	window.location.href = "index.php?p=<?php echo $trabalho[1]['pagina']; ?>";
			    });
			    $(".artigo2").click(function(){
			    	window.location.href = "index.php?p=<?php echo $trabalho[2]['pagina']; ?>";
			    });
			    $(".artigo3").click(function(){
			    	window.location.href = "index.php?p=<?php echo $trabalho[3]['pagina']; ?>";
			    });
			    $(".artigo4").click(function(){
			    	window.location.href = "index.php?p=<?php echo $trabalho[4]['pagina']; ?>";
			    });
			    $(".artigo5").click(function(){
			    	window.location.href = "index.php?p=<?php echo $trabalho[5]['pagina']; ?>";
			    });
			    $(".artigo6").click(function(){
			    	window.location.href = "index.php?p=<?php echo $trabalho[6]['pagina']; ?>";
			    });

				$("#home").click(function(){
			       //$(".content").load("index.php");
			        window.location.href = "index.php";
			    });
			    $(".projetos").click(function(){
			        $(".content").load("projetos.php");
			    });
			    $(".posts").click(function(){
			        $(".content").load("posts.php");
			    });
			    $(".about").click(function(){
			        window.location.href = "index.php?p=sobre";
			    });
			});
		</script>
	</head>
	<body>
		<div class="tudo" style="background-color: rgba(0, 0, 0, 1);">
			<div class="geral">
				<div class="header">
					<div class="background">
			            <div class="titulo" style="">
			            	<p class='Logoh1'>MARLON BRAGA</p>
			            	<p class='Logoh2'>- Desenvolvedor de software -</p>
			            	<p class='Logoh5' style="margin-top:30px;">VR • AR • WEB • MOBILE</p>
						</div>
					</div>
				</div>
				<div style='clear: both;'></div>
				<div class="menu">
					<a class='link' href='#'>	<div id='home' 		class="button_menu"><!--<img class="imgButton_menu" src="img/home.png"/>--> 	HOME</div></a>
					<a class='link' href='#'>	<div id='projetos'	class="projetos button_menu"><!--<img class="imgButton_menu" src="img/projetos.png"/>-->PROJETOS</div></a>
					<a class='link' href='#'>	<div id='posts' 	class="posts button_menu"><!--<img class="imgButton_menu" src="img/artigos.png"/>--> BLOG</div></a>
					<a class='link' href='index.php?p=sobre#'>	<div id='about'		class="about button_menu"><!--<img class="imgButton_menu" src="img/artigos.png"/>--> SOBRE</div></a>
				</div>
			</div>
			<div class="geral" style="max-width: 100%; text-align:center; background-color: rgba(255,255,255,1); background-image: none;">

				<div class="content"><!-- src="<?php echo $_REQUEST['p']; ?>">-->
					<!--<img height="300px" width="300px" style="padding-bottom:60px; padding-top:40px;" src="img/construcao.png">-->
					<style type="text/css">
								a.a:hover{
									color:black;
								}
							</style>
					<a href="#" class="a">
						<div class="about sobre">
							<div class="inner_sobre" >
								<img src="img/MarlonBraga.png" class="fotoPerfil"/>
								<p class="sobreTexto">
								<iframe src="description.html" style="border:0px; width:100%"></iframe>
								</p>
							</div>
						</div>
					</a>
					<div>
						<div class='space_dungeon'>
							<div style=''>
								<h1>Space Dungeon</h1>
								<p style='text-align:justify;'>
									&emsp;Game de Realidade Virtual para Google Cardboard.
								</p>
								<div style="width:100%; text-align:center; margin:auto;">
									<img class='img_interesse dotaicon' alt="RV" src='img/rv_T.png'/>
									<img class="plusicon" src="img/mais.png"/>
									<img class='img_interesse dotaicon' alt="Mobile" src='img/mobile_T.png'/>
									<img class="plusicon" src="img/mais.png"/>
									<img class='img_interesse dotaicon' alt="Games" src='img/joystick_T.png'/>	
								</div>								
							</div>
							<div class='artigo' style='width:100%; margin-top: 0px; margin-bottom: 20px; height: inherit;'>
								<a href='#'>
									<style>
										.topicOver0{background-image: url("img/space_dungeon/shoot.png");}
										.topic0{background-image: url("img/space_dungeon/shoot5.png");}
										.topic0:hover{background-image: url("img/space_dungeon/shoot4.png");}
									</style>
									<div class='topic topic0' style='border-radius:1em; width: 14.0em; height: 8.25em; position:relative;'>
										<div class='topicOver topicOver0' style='border-radius:1em; width: 14.0em; height: 8.25em;'>
											
										</div>
									</div>
								</a>
							</div>
							<div style='padding:0px 10px 10px 10px; margin-left: auto; margin-right: auto;'>
								<div style='margin-top:0px;'>
									<div style='clear: both;'></div>
									<div style="min-width:300px; font-weight:bold;">EM BREVE</div>
									
									<a href='#'>
										<img style='margin-top:0px; max-height: 60px;' src='img/play-store-download.png'/>
										<br>
									</a>
								</div>
							</div>
						</div>
						<div class='uerj_gameficada'>
							<div style=''>
								<h1>UERJ Gamificada</h1>
								<p style='text-align:left;'>
									• <a href='index.php?p=top_cr'><b><u>Top CRs:</u></b></a> Ranking dos melhores Coeficientes de Rendimento<br>
								    • <a href='index.php?p=comp_uerj'><b><u>Computação - UERJ:</u></b></a> Análise estatística e indicador de produtividade acadêmica<br>
								    • <a href='index.php?p=avaliacao_professores'><b><u>Avaliação de Professores:</u></b></a> Alunos corrigem e sugerem correções aos docentes
								</p>
							</div>
							<div style='float:left; padding:0px 10px 10px 10px;'>
								<p><a href='http://marlonbraga.com.br/computacaouerj.com.br'><img class='icon_link' src='img/computacao-uerj.png'/><br>Comp UERJ</a></p>
							</div>
							<div style='float:left; margin-left:20px; padding:0px 10px 10px 10px;'>
								<p><a href='http://topuerjcr.atwebpages.com/index.php'><img class='icon_link' src='img/medal_gold.png'/><br>Top CRs</a></p>
							</div>
						</div>
						<div style='clear: both;'></div>
					</div>
					<div style='clear: both;'></div>

					<!--TRABALHOS-->
					<div style='margin-top: 70px; margin-bottom: 30px;'>
						<hr>
						<div style='margin-top: -45px;
									width: 200px;
									margin-left: auto;
									margin-right: auto;
									background-color: white;'>
							<p class='title_section'> Trabalhos</p> 
						</div>
					</div>
					<div style='clear: both;'></div>
						<div style='padding-bottom: 60px; text-align: center; max-width: 1024px; margin: auto;}'>
						<?php
							$i=0;
							do{
								$i++;
						?>
								<div class='artigo artigo<?php echo $i; ?>'>
									<a href='index.php?p=<?php echo $trabalho[$i]['pagina']; ?>'>
										<p style='height:20px;'><?php echo $trabalho[$i]['nome'];?><br></p>

										<style>
											.topicOver<?php echo $i; ?>{background-image: url("<?php echo $trabalho[$i]['imagem1'];?>");}
											.topic<?php echo $i; ?>{background-image: url("<?php echo $trabalho[$i]['imagem2'];?>");}
											.topic<?php echo $i; ?>:hover{background-image: url("<?php echo $trabalho[$i]['imagem3'];?>");}
										</style>
										<div class='topic topic<?php echo $i; ?>'>
											<div class='topicOver topicOver<?php echo $i; ?>'>
												<div class='descricao'>
													<?php echo $trabalho[$i]['resumo'];?>
												</div>
										</div></div>
									</a>
								</div>
						<?php
							}while($i<3);
						?>
						<div style='clear: both;'></div>
					</div>
					
					<div style='clear: both;'></div>
					<div style=''>
						<a class='link' href='#'>
							<div class="projetos button_content"><!--<img class="imgButton_menu" src="img/projetos.png"/>-->Ver mais</div>
						</a>
					</div>

					<div style='clear: both;'></div>
					
					
					<!--POSTS-->
					<div style='margin-top: 5px; margin-bottom: 30px;'>
						<hr>
						<div style='margin-top: -45px;
									width: 150px;
									margin-left: auto;
									margin-right: auto;
									background-color: white;'>
							<p class='title_section'> Posts</p> 
						</div>
					</div>
					<div style='clear: both;'></div>
						<div style='padding-bottom: 0px; text-align: center; max-width: 1024px; margin: auto;}'>
						<?php
							$i=3;
							do{
								$i++;
						?>
								<div class='artigo artigo<?php echo $i; ?>'>
									<a href='index.php?p=<?php echo $trabalho[$i]['pagina'];?>'>
										<p style='height:20px;'><?php echo $trabalho[$i]['nome'];?><br></p>
										<div style='border-radius: 5px;
													border: 2px solid #222;
													background-color: #000;
													height: 160px;
													width: 310px;
													margin-right: auto;
    												margin-left: auto;'>
											<img class="img_news" src="<?php echo $trabalho[$i]['imagem1'];?>" />
										</div>
										<p class="resumo">
											<?php echo $trabalho[$i]['resumo'];?>
										</p>
									</a>
								</div>
	
						<?php
							}while($i<6);
						?>
						
						<div style='clear: both; margin-bottom:150px;'></div>
					</div>

				<div style=''>
					<a class='link' href='#'>
						<div class="posts button_content"><!--<img class="imgButton_menu" src="img/projetos.png"/>-->Ver mais</div>
					</a>
				</div>

				

					<div class="sobre_baixo">
						<p>
							<div style="width:50%; float:left; padding-left: 2%;">
								<img src="img/MarlonBraga.png" class="fotoPerfil"/>
							</div>
							<div class="sobre_baixo_description">
								<p class="sobreTexto">
								<iframe src="description.html" style="border:0px; height:100%; width:100%;"></iframe>
							</p>
							</div>
						</p>
					</div>


					<div style='clear: both;'></div>
				</div>
			</div>



			<div style='clear: both;'></div>
			


			<div class='footer'>
				<div style='max-width:1024px; margin:auto;'>
					
		            <div class="contato">
		            	<div style="width:50%; margin:auto;"></div>
		            	<div class='Logoh4'>Contato</div>
		            	<p>
		                	Tel.: (21) 995 009 727
							<img style="padding-left:3px; height:20px; width:20px;" src="img/wa_icon.png">
							<img height="20px" width="20px" src="img/tg_icon.png">
							<br>
							<br>
							<img height="20px" width="20px" src="img/email_icon.png"> 
							marlon@marlonbraga.com.br<br>
							<br>
							<img height="20px" width="20px" src="img/sk_icon.png">
							marlonbraga.develop
						</p>
		            </div>

		            <div class="contato" style='float:center;'>
		            	<div style="width:50%; margin:auto;"></div>
		            	<div class='Logoh4'>Onde estou</div>
		            	<p>
		                	<b>Rio de Janeiro – RJ</b><br>
		                	R. Voluntários da Pátria,<br>
		                	114/301 A - Botafogo<br>
							cep: 22270-010<br>
							
						</p>
		            </div>

					<div class="follow">
						<div style="width:50%; margin:auto;"></div>
						<div class='Logoh4'>Siga-me</div>
		                <a href="https://www.linkedin.com/in/marlonbraga" target="_blank"><img height="55px" width="50px" style="padding-top:10px; padding-right:5px;" src="img/in_icon.png"></a>
		                <a href="https://www.facebook.com/marlon.braga.dev" target="_blank"><img height="55px" width="50px" style="padding-top:10px; padding-left:5px;" src="img/fb_icon.png"></a>
		                <a href="https://twitter.com/Marlon_Braga0" style="margin-left: 4px;" target="_blank"><img height="55px" width="50px" style="padding-top:10px; padding-left:5px;" src="img/tw_icon2.png"></a>
						<br>
		                <a href="https://github.com/marlonbraga" style="margin-left: -4px;" target="_blank"><img height="55px" width="50px" style="padding-top:10px; padding-left:5px;" src="img/github_icon.png"></a>						
						<a href="https://www.youtube.com/channel/UCHNWeE1DJ0HqoE9KrEx1agg" style="margin-left: 4px;" target="_blank"><img height="55px" width="50px" style="padding-top:10px; padding-left:5px;" src="img/youtube_icon.png"></a>
		            </div>
		            <div style='clear: both;'></div>
		        </div>
			</div>

			<div style='clear: both;'></div>

		</div>
	</body>
</html>

<?php
	mysqli_close($conn);
?>