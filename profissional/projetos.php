﻿<?php
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


	$query = "	SELECT * 
		FROM  `projeto`
		WHERE `experiencia`=1 || `projeto`=1
		ORDER BY  `projeto`.`data` DESC 
		LIMIT 30;
	"; 

	$i=0;
	$trabalho = array(
					array('nome'=>"",'resumo'=>"",'imagem1'=>"",'imagem2'=>"",'imagem3'=>"",'pagina'=>""),
					array('nome'=>"",'resumo'=>"",'imagem1'=>"",'imagem2'=>"",'imagem3'=>"",'pagina'=>""),
					array('nome'=>"",'resumo'=>"",'imagem1'=>"",'imagem2'=>"",'imagem3'=>"",'pagina'=>""),
					array('nome'=>"",'resumo'=>"",'imagem1'=>"",'imagem2'=>"",'imagem3'=>"",'pagina'=>""),
					array('nome'=>"",'resumo'=>"",'imagem1'=>"",'imagem2'=>"",'imagem3'=>"",'pagina'=>""),
					array('nome'=>"",'resumo'=>"",'imagem1'=>"",'imagem2'=>"",'imagem3'=>"",'pagina'=>""),

					array('nome'=>"",'resumo'=>"",'imagem1'=>"",'imagem2'=>"",'imagem3'=>"",'pagina'=>""),
					array('nome'=>"",'resumo'=>"",'imagem1'=>"",'imagem2'=>"",'imagem3'=>"",'pagina'=>""),
					array('nome'=>"",'resumo'=>"",'imagem1'=>"",'imagem2'=>"",'imagem3'=>"",'pagina'=>""),
					array('nome'=>"",'resumo'=>"",'imagem1'=>"",'imagem2'=>"",'imagem3'=>"",'pagina'=>""),
					array('nome'=>"",'resumo'=>"",'imagem1'=>"",'imagem2'=>"",'imagem3'=>"",'pagina'=>""),
					array('nome'=>"",'resumo'=>"",'imagem1'=>"",'imagem2'=>"",'imagem3'=>"",'pagina'=>""),

					array('nome'=>"",'resumo'=>"",'imagem1'=>"",'imagem2'=>"",'imagem3'=>"",'pagina'=>""),
					array('nome'=>"",'resumo'=>"",'imagem1'=>"",'imagem2'=>"",'imagem3'=>"",'pagina'=>""),
					array('nome'=>"",'resumo'=>"",'imagem1'=>"",'imagem2'=>"",'imagem3'=>"",'pagina'=>""),
					array('nome'=>"",'resumo'=>"",'imagem1'=>"",'imagem2'=>"",'imagem3'=>"",'pagina'=>""),
					array('nome'=>"",'resumo'=>"",'imagem1'=>"",'imagem2'=>"",'imagem3'=>"",'pagina'=>""),
					array('nome'=>"",'resumo'=>"",'imagem1'=>"",'imagem2'=>"",'imagem3'=>"",'pagina'=>""),

					array('nome'=>"",'resumo'=>"",'imagem1'=>"",'imagem2'=>"",'imagem3'=>"",'pagina'=>""),
					array('nome'=>"",'resumo'=>"",'imagem1'=>"",'imagem2'=>"",'imagem3'=>"",'pagina'=>""),
					array('nome'=>"",'resumo'=>"",'imagem1'=>"",'imagem2'=>"",'imagem3'=>"",'pagina'=>""),
					array('nome'=>"",'resumo'=>"",'imagem1'=>"",'imagem2'=>"",'imagem3'=>"",'pagina'=>""),
					array('nome'=>"",'resumo'=>"",'imagem1'=>"",'imagem2'=>"",'imagem3'=>"",'pagina'=>""),
					array('nome'=>"",'resumo'=>"",'imagem1'=>"",'imagem2'=>"",'imagem3'=>"",'pagina'=>""),

					array('nome'=>"",'resumo'=>"",'imagem1'=>"",'imagem2'=>"",'imagem3'=>"",'pagina'=>""),
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
	for($i=0;$i<30;$i++){
		if($trabalho[$i]['nome']==""){
			unset($trabalho[$i]);

		}
	}
	mysqli_close($conn);
?>
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
				color: black;
				text-align: left;
			}h4{
				margin: 0px;
				font-family: 'Ubuntu-Regular';
				font-size: 0.6em;
				color: black;
				text-align: left;
				font-weight: lighter;

			}h5{
				margin: 0px;
				font-family: 'Syncopate';
				font-size: 0.8em;
				color: #AAA;
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
		<div class="tudo">

			<div class="geral" style="max-width: 100%; text-align:center; background-image: none;">

				<div class="content1">
					<!--<img height="300px" width="300px" style="padding-bottom:60px; padding-top:40px;" src="img/construcao.png">-->
					<style type="text/css">
						a.a:hover{
							color:black;
						}
					</style>
					<!--
					<a href="index.php?p=sobre#" class="a">					
						<div class="about sobre" style="float:right;">
							<div class="inner_sobre" >
								<img src="img/Marlon.jpg" class="fotoPerfil"/>
								<p class="sobreTexto">
									&emsp;Técnico em Informática e Bacharel em Ciência da Computação pela UERJ.
									É entusiasta da Realidade Virtual e Gameficação.
									Trabalhou no SENAI no desenvolvimento de simuladores industriais.
									Hoje, continua explorando novos recursos e aplicações imersivas.
								</p>
							</div>
						</div>
					</a>
					-->
					<?php
						$i=0;
						do{
							$i++;
					?>
							<div class='artigoListado artigoListado<?php echo $i; ?>'>
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
						}while($i<count($trabalho)-1);
					?>


					<div style="width:100%; margin-left:30px; text-align:left; color:#AAA; font-size: 14px;">
						<?php
						if($row["experiencia"]==1)	echo"<img src='img/projetos.png' style='width:20px;height:20px;' alt='Projetos'/>";
						if($row["projeto"]==1)		echo"<img src='img/artigos.png' style='width:20px;height:20px;' alt='Post'/>";
						if($row["rv"]==1)			echo"<img src='img/rv.png' style='width:20px;height:20px;' alt='Realidade Virtual'/>";
						if($row["ra"]==1)			echo"<img src='img/ra.png' style='width:20px;height:20px;' alt='Realidade Aumentada'/>";
						if($row["web"]==1)			echo"<img src='img/web.png' style='width:20px;height:20px;' alt='Web'/>";
						if($row["mobile"]==1)		echo"<img src='img/mobile.png' style='width:20px;height:20px;' alt='Mobile'/>";
						echo $row["data"]; ?>
					</div>
					<div><h1><?php echo $row["nome"]; ?></h1></div>
					<div><h2><?php echo $row["resumo"]; ?></h2></div>
				</div>
				<div style='clear: both;'></div>

		</div>
	</body>
