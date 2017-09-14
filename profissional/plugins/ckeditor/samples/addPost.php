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
	
	if(isset($_REQUEST['add']))
	{
		$data=$_REQUEST['data'];
		$nome=$_REQUEST['nome'];
		$resumo=$_REQUEST['resumo'];
		$conteudo=$_REQUEST['conteudo'];
		$pagina=$_REQUEST['pagina'];
		
		$imagem1=$_REQUEST['imagem1'];
		$imagem2=$_REQUEST['imagem2'];
		$imagem3=$_REQUEST['imagem3'];
		$imagem4=$_REQUEST['imagem4'];
		$imagem5=$_REQUEST['imagem5'];
		$imagem6=$_REQUEST['imagem6'];
		$imagem7=$_REQUEST['imagem7'];
		$imagem8=$_REQUEST['imagem8'];
		$imagem9=$_REQUEST['imagem9'];
		
		$imagem10=$_REQUEST['imagem10'];
		$imagem11=$_REQUEST['imagem11'];
		$imagem12=$_REQUEST['imagem12'];
		$imagem13=$_REQUEST['imagem13'];
		$imagem14=$_REQUEST['imagem14'];
		$imagem15=$_REQUEST['imagem15'];
		$imagem16=$_REQUEST['imagem16'];
		$imagem17=$_REQUEST['imagem17'];
		$imagem18=$_REQUEST['imagem18'];
		$imagem19=$_REQUEST['imagem19'];
		$imagem20=$_REQUEST['imagem20'];

		$projeto=$_REQUEST['projeto'];
		$experiencia=$_REQUEST['experiencia'];
		$post=$_REQUEST['post'];
		$rv=$_REQUEST['rv'];
		$ra=$_REQUEST['ra'];
		$web=$_REQUEST['web'];
		$mobile=$_REQUEST['mobile'];
		
		$query = "	INSERT   
			INTO  `projeto`
			VALUES (
NULL , '".$data."' ,  '".$nome."', '".$resumo."' , '".$conteudo."' ,  '".$pagina."', 

'".$imagem1."',  '".$imagem2."', '".$imagem3."', '".$imagem4."' , '".$imagem5."' ,
'".$imagem6."' , '".$imagem7."', '".$imagem8."' , '".$imagem9."' , '".$imagem10."',
'".$imagem11."', '".$imagem12."', '".$imagem13."', '".$imagem14."', '".$imagem15."',
'".$imagem16."', '".$imagem17."', '".$imagem18."', '".$imagem19."', '".$imagem20."',

'".$projeto."', '".$experiencia."', '".$post."', '".$rv."', '".$ra."', '".$web."', '".$mobile."'
);
		";
		if ($result = mysqli_query($conn, $query)) {
			echo"<div style='background-color:#8f8; font-weight:bold; color:black; width:100%;'>Post adicionado  =D</div>";
			//if ($row = mysqli_fetch_assoc($result)){
			//	//do{
			//	//}while($row = mysqli_fetch_assoc($result));
			//}else{
			//	echo"- Sem resultados -<br>[".$query."]";
			//}
			mysqli_free_result($result);
		}else{
			echo("Error description: <br> " . mysqli_error($conn));
			echo"<br><br>[ ".$query." ]";
		}
		
		mysqli_close($conn);
	}
?>
<html>
<head>
	<meta charset="utf-8">
	<title>---</title>
	<script src="../ckeditor.js"></script>
	<script src="js/sample.js"></script>
	
	<style>
		.larguraMax{
			width: 95%;
		}input{
			
		}#title{
			min-height: 50px;
			border: 1.5px solid #444;		
			text-align: center;
			font-size: 35px;
			padding: 10px;
		}#resumo{
			min-height: 100px;
			border: 1.5px solid #444;		
			text-align: left;
			padding: 10px;
		}#date{
		
		}#pagina{
			width: 80%;
		}.quadroCheckbox{
			border: 1px outset gray;
			width: 32.5%;
			float: left;
			height: 150px;
			padding: 10px 0px 10px 0px;
		}.clearfix {
			overflow: auto;
			overflow: right;
			overflow: left;
		}.space180{
			height: 180px;
		}.quadroTitle{
			font-weight: bold;
		}.checkbox{
			padding: 0px 0px 0px 30px;
		}.center{
			text-align:center;
			margin: auto;
		}
	</style>
</head>
<body id="main">



	<main>
		<form action="addPost.php?add=1" method="post">
			
			<p><input id="title" class="larguraMax" name="nome" type="text" value="Lorem ipsum dolor sit amet, consectetur adipiscing elit."/></p>
			<p><textarea id="resumo" class="larguraMax" name="resumo" type="text" >Integer in purus venenatis sapien rutrum dignissim. Sed enim diam, aliquam sed placerat in, pulvinar facilisis nibh. Etiam ac nisi sit amet ante venenatis efficitur. Fusce odio nisl, fermentum in diam quis, rhoncus viverra enim. Nunc consequat a ligula vitae lobortis. Aliquam ultricies nibh sed enim pellentesque, nec pharetra neque scelerisque. Sed vel ornare metus. Maecenas aliquet dolor in nisl pretium porttitor.</textarea></p>
			
			<div style="border:5px red;">
			
				<div id="" class="quadroCheckbox">
					<p class="quadroTitle center">TIPO</p>
					<br><input id="tipoPublicacao1" name="projeto" type="checkbox" value="1"></input> Projeto
					<br><input id="tipoPublicacao2" name="experiencia" type="checkbox" value="1"></input> Experiência
					<br><input id="tipoPublicacao3" name="post" type="checkbox" value="1"></input> Post
				</div>
				
				<div id="" class="quadroCheckbox">
					<p class="quadroTitle center">TEMAS</p>
					<br><input id="temaPublicacao1" name="rv" type="checkbox" value="1"></input> VR
					<br><input id="temaPublicacao2" name="ra" type="checkbox" value="1"></input> AR
					<br><input id="temaPublicacao3" name="web" type="checkbox" value="1"></input> Web
					<br><input id="temaPublicacao4" name="mobile" type="checkbox" value="1"></input> Mobile
				</div>
				
				<div id="" class="quadroCheckbox">
					<p class="quadroTitle">DATA
						<input id="date" class="" name="data" type="date" value=""/></p>
					<p class="quadroTitle">URL
						<input id="pagina" class="" name="pagina" type="text" value="lorem_ipsum_dolor_sit_amet"/></p>
					<input class="center" type="submit" value="PUBLICAR / SALVAR"/>
				</div>
				
				<div class="clearfix space180">&nbsp;</div>
			</div>
			
			
			<div class="adjoined-bottom">
				<div class="grid-container">
					<div class="grid-width-100">
						<div id="editor" name="conteudo">
							<h1>over</h1>
							<p>I'm an instance of <a href="http://overreal.com.br">OverReal</a>.</p>
						</div>
					</div>
				</div>
			</div>
		</form>
	</main>

<script>
	initSample();
</script>

</body>
</html>
