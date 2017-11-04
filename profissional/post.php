<?php
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
		WHERE `pagina`='".$_REQUEST['p']."'
	";
	if ($result = mysqli_query($conn, $query)) {
		if ($row = mysqli_fetch_assoc($result)){
			//do{
			//}while($row = mysqli_fetch_assoc($result));
		}else{
			echo"- Sem resultados -<br>[".$query."]";
		}
	    mysqli_free_result($result);
	}else{
		echo("Error description: <br> " . mysqli_error($conn));
		echo"<br><br>[ ".$query." ]";
	}
	
	mysqli_close($conn);
?>
<html>
	<head>
		<meta charset='utf-8'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Marlon Braga</title>
		<link rel="shortcut icon" href="img/logo_Overreal.ico">
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
				font-style:italic;
			}h3{
				margin: 20px;
				font-family: 'Syncopate';
				font-size: 0.65em;
				color: black;
				text-align: left;
			}h4{
				margin: 0px;
				font-family: 'Ubuntu-Regular';
				font-size: 0.57em;
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
				border: 0px double #AAA;
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
		<div class="tudo" >

			<div class="geral" style="max-width: 100%; text-align:center; background-image: none;">

				<div class="content">
					<!--<img height="300px" width="300px" style="padding-bottom:60px; padding-top:40px;" src="img/construcao.png">-->
					<style type="text/css">
								a.a:hover{
									color:black;
								}
							</style>
					<a href="index.php?p=sobre#" class="a">
						<div class="sobre about" style="float:right; margin-left: 20px;">
							<div class="inner_sobre" >
								<img src="img/MarlonBraga.png" class="fotoPerfil"/>
								<p class="sobreTexto">
								<iframe src="description.html" style="border:0px; width:100%"></iframe>
								</p>
							</div>
						</div>
					</a>
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
					

					<!-- Conteúdo -->
					<?php
						echo $row["conteudo"];
					?>

					<!-- Galerria de Fotos -->
					<style>
						iframe.slider{
						width:100%;
						height:500px;
						border: 0px;
						overflow: hidden;

						margin: 100px 0px 100px 0px;
						}
					</style>
					<iframe class="slider" src="slider.php?p=<?php echo $_REQUEST['p']; ?>"></iframe>

					<!-- Comentários -->
					<div id="fb-root"></div>
					<script>(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) return;
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5";
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));</script>
					<div style="margin: 0px 0px 50px 0px;" class="fb-comments" width="700px;" href="https://www.facebook.com/marlon.braga.dev/videos/897664463649130/?l=3317187791724498190" data-numposts="5"></div>

				</div>

		</div>
	</body>
</html>
