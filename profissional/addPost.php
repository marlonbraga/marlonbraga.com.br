<?php
	$servername = "localhost";
	$username = "marlo247";
	$password = "Marlon64!";
	$dbname = "marlo247_projetos";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	$conn->set_charset('utf8');


	// UPLOAD IMAGE
	function SaveImageFiles($file){
	    //Stores the filename as it was on the client computer.
	    $imagename = $file['name'];
	    //Stores the filetype e.g image/jpeg
	    $imagetype = $file['type'];
	    //Stores any error codes from the upload.
	    $imageerror = $file['error'];
	    //Stores the tempname as it is given by the host when uploaded.
	    $imagetemp = $file['tmp_name'];

	    //The path you wish to upload the image to
	    $imagePath = "img/".$_REQUEST['pagina'];
	    if (!file_exists($imagePath)) {
			try{
				mkdir($imagePath, 0777, true);
				echo"Diretório criado com sucesso";
			}catch(Exception $e){
				echo"Diretório não criado";
				echo":".$e;
			}
		}else{
			echo"Diretório não criado porque já existe";
		}

		if(move_uploaded_file($imagetemp, $imagePath."/" . $imagename)) {
            echo "Sussecfully uploaded your image.";
        }else {
            echo "Failed to move your image. | ";  
		}
	    echo "ERROR: ".$imageerror;
	}

	// Check connection
	if ($conn->connect_error) {
	    die("[Connection failed: " . $conn->connect_error."]");
	} 
	
	
	if(isset($_REQUEST['edit'])){
		if($_REQUEST['edit']=="ok"){
			$id=$_REQUEST['id'];
			$data=$_REQUEST['data'];
			echo ">DATA:: ".$data;
			echo ">CONT:: ".$_REQUEST['conteudo'];
			$nome=$_REQUEST['nome'];
			$resumo=$_REQUEST['resumo'];
			$conteudo=mysqli_real_escape_string($conn, $_REQUEST['conteudo']);
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
			
			if($_REQUEST['projeto']==1) $projeto=1; else $projeto=0;
			if($_REQUEST['experiencia']==1) $experiencia=1; else $experiencia=0;
			if($_REQUEST['post']==1) $post=1; else $post=0;
			
			if($_REQUEST['rv']==1) $rv=1; else $rv=0;
			if($_REQUEST['ra']==1) $ra=1; else $ra=0;
			if($_REQUEST['web']==1) $web=1; else $web=0;
			if($_REQUEST['mobile']==1) $mobile=1; else $mobile=0;
			
			$query = "	UPDATE `projeto`
				SET
				`data`='".$data."',
				`nome`='".$nome."',
				`resumo`='".$resumo."',
				`conteudo`='".$conteudo."',
				`pagina`='".$pagina."',
				
				`projeto`=".$projeto.",
				`experiencia`=".$experiencia.",
				`post`=".$post.",
				`rv`=".$rv.",
				`ra`=".$ra.",
				`web`=".$web.",
				`mobile`=".$mobile."
			
				WHERE 
					`id`=".$id."
			";
			if ($result = mysqli_query($conn, $query)) {
				echo"<div style='background-color:#afa; font-weight:bold; color:black; width:100%;'>Post atualizado  ;-D</div>";
			}else{
				echo"<div style='background-color:#faa; font-weight:bold; color:black; width:100%;'>Erro: Post não atualizado  ='(</div>";
				echo("Error description: <br> " . mysqli_error($conn));
				echo"<br><br>[ ".$query." ]";
			}
		}
	}
	if(isset($_REQUEST['del'])){
		$query="DELETE FROM `projeto` WHERE `id`=".$_REQUEST['del'];
		if ($result = mysqli_query($conn, $query)) {
			echo"<div style='background-color:#4f4; font-weight:bold; color:black; width:100%;'>Post deletado  =|</div>";
		}else{
			echo"<div style='background-color:#f44; font-weight:bold; color:black; width:100%;'>Erro: Post não deletados  >=(</div>";
			echo("Error description: <br> " . mysqli_error($conn));
			echo"<br><br>[ ".$query." ]";
		}
	}
	if(isset($_REQUEST['add']))
	{
		$data=$_REQUEST['data'];
		$nome=$_REQUEST['nome'];
		$resumo=$_REQUEST['resumo'];
		$conteudo=mysqli_real_escape_string($conn, $_REQUEST['conteudo']);
		$pagina=$_REQUEST['pagina'];



		$imagem1=NULL;  if($_FILES['imagem1']['name']  != "") { $imagem1="img/".$_REQUEST['pagina']."/".$_FILES['imagem1']['name'];   SaveImageFiles($_FILES['imagem1']); }
		$imagem2=NULL;  if($_FILES['imagem2']['name']  != "") { $imagem2="img/".$_REQUEST['pagina']."/".$_FILES['imagem2']['name'];   SaveImageFiles($_FILES['imagem2']); }
		$imagem3=NULL;  if($_FILES['imagem3']['name']  != "") { $imagem3="img/".$_REQUEST['pagina']."/".$_FILES['imagem3']['name'];   SaveImageFiles($_FILES['imagem3']); }
		$imagem4=NULL;  if($_FILES['imagem4']['name']  != "") { $imagem4="img/".$_REQUEST['pagina']."/".$_FILES['imagem4']['name'];   SaveImageFiles($_FILES['imagem4']); }
		$imagem5=NULL;  if($_FILES['imagem5']['name']  != "") { $imagem5="img/".$_REQUEST['pagina']."/".$_FILES['imagem5']['name'];   SaveImageFiles($_FILES['imagem5']); }
		$imagem6=NULL;  if($_FILES['imagem6']['name']  != "") { $imagem6="img/".$_REQUEST['pagina']."/".$_FILES['imagem6']['name'];   SaveImageFiles($_FILES['imagem6']); }
		$imagem7=NULL;  if($_FILES['imagem7']['name']  != "") { $imagem7="img/".$_REQUEST['pagina']."/".$_FILES['imagem7']['name'];   SaveImageFiles($_FILES['imagem7']); }
		$imagem8=NULL;  if($_FILES['imagem8']['name']  != "") { $imagem8="img/".$_REQUEST['pagina']."/".$_FILES['imagem8']['name'];   SaveImageFiles($_FILES['imagem8']); }
		$imagem9=NULL;  if($_FILES['imagem9']['name']  != "") { $imagem9="img/".$_REQUEST['pagina']."/".$_FILES['imagem9']['name'];	  SaveImageFiles($_FILES['imagem9']); }
		$imagem10=NULL; if($_FILES['imagem10']['name'] != "") { $imagem10="img/".$_REQUEST['pagina']."/".$_FILES['imagem10']['name']; SaveImageFiles($_FILES['imagem10']); }
		$imagem11=NULL; if($_FILES['imagem11']['name'] != "") { $imagem11="img/".$_REQUEST['pagina']."/".$_FILES['imagem11']['name']; SaveImageFiles($_FILES['imagem11']); }
		$imagem12=NULL; if($_FILES['imagem12']['name'] != "") { $imagem12="img/".$_REQUEST['pagina']."/".$_FILES['imagem12']['name']; SaveImageFiles($_FILES['imagem12']); }
		$imagem13=NULL; if($_FILES['imagem13']['name'] != "") { $imagem13="img/".$_REQUEST['pagina']."/".$_FILES['imagem13']['name']; SaveImageFiles($_FILES['imagem13']); }
		$imagem14=NULL; if($_FILES['imagem14']['name'] != "") { $imagem14="img/".$_REQUEST['pagina']."/".$_FILES['imagem14']['name']; SaveImageFiles($_FILES['imagem14']); }
		$imagem15=NULL; if($_FILES['imagem15']['name'] != "") { $imagem15="img/".$_REQUEST['pagina']."/".$_FILES['imagem15']['name']; SaveImageFiles($_FILES['imagem15']); }
		$imagem16=NULL; if($_FILES['imagem16']['name'] != "") { $imagem16="img/".$_REQUEST['pagina']."/".$_FILES['imagem16']['name']; SaveImageFiles($_FILES['imagem16']); }
		$imagem17=NULL; if($_FILES['imagem17']['name'] != "") { $imagem17="img/".$_REQUEST['pagina']."/".$_FILES['imagem17']['name']; SaveImageFiles($_FILES['imagem17']); }
		$imagem18=NULL; if($_FILES['imagem18']['name'] != "") { $imagem18="img/".$_REQUEST['pagina']."/".$_FILES['imagem18']['name']; SaveImageFiles($_FILES['imagem18']); }
		$imagem19=NULL; if($_FILES['imagem19']['name'] != "") { $imagem19="img/".$_REQUEST['pagina']."/".$_FILES['imagem19']['name']; SaveImageFiles($_FILES['imagem19']); }
		$imagem20=NULL; if($_FILES['imagem20']['name'] != "") { $imagem20="img/".$_REQUEST['pagina']."/".$_FILES['imagem20']['name']; SaveImageFiles($_FILES['imagem20']); }





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
		}else{
			echo"<div style='background-color:#f88; font-weight:bold; color:black; width:100%;'>Erro: Post não adicionado  =0</div>";
			echo("Error description: <br> " . mysqli_error($conn));
			echo"<br><br>[ ".$query." ]";
		}

	}
	
	$query2 = "SELECT * FROM `projeto` ORDER BY `projeto`.`data` DESC";
		if ($result = mysqli_query($conn, $query2)) {
			echo"<div style='background-color:#6f6; font-weight:bold; color:black; width:100%;'>Posts Listados  =D</div>";			
			if ($row = mysqli_fetch_assoc($result)){
				echo"<div> <table>";
				echo"<tr><td>Data</td><td>nome</td><td>Pagina</td><td>projeto</td><td>post</td><td>xp</td><td>vr</td><td>ar</td><td>web</td><td>mob</td><td>edit</td><td>del</td></tr>";
				$i=false;
				do{
					$i=!$i ;
					?>
					<tr class="<?php if($i) {echo'linha_marcada';} else {echo'linha_descardada';} ?>">
						<td><?php echo $row['data']; ?></td>
						<td><?php echo $row['nome']; ?></td>
						<td><?php echo $row['pagina']; ?></td>
						<td><?php echo $row['projeto']; ?></td>
						<td><?php echo $row['post']; ?></td>
						<td><?php echo $row['experiencia']; ?></td>
						<td><?php echo $row['rv']; ?></td>
						<td><?php echo $row['ra']; ?></td>
						<td><?php echo $row['web']; ?></td>
						<td><?php echo $row['mobile']; ?></td>
						
						<td><a href="addPost.php?edit=<?php echo $row['id']; ?>">E</a></td>
						<td><a href="addPost.php?del=<?php echo $row['id']; ?>">D</a></td>
					</tr>
					<?php
				}while($row = mysqli_fetch_assoc($result));
				echo"<tr><td></td><td><a href='addPost.php'> + NOVO POST + </a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
				echo"</table> </div>";
			}else{
				echo"- Sem resultados -<br>[".$query."]";
			}
			echo "<hr>";
			/*mysqli_free_result*/
			//mysqli_result($result);
		}else{
			echo"<div style='background-color:#f66; font-weight:bold; color:black; width:100%;'>Erro: Posts não listados  =0</div>";
			echo("Error description: <br> " . mysqli_error($conn));
			echo"<br><br>[ ".$query." ]";
		}	
	

?>
<html>
<head>
	<meta charset="utf-8">
	<title>---</title>
	<script src="plugins/ckeditor/ckeditor.js"></script>
	<script src="plugins/ckeditor/samples/js/sample.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.js"></script>
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
		}.quadroImagens{
			width: 100%;
			text-align: center;
			padding: 20px;
			margin: 20px;
		}
	</style>
	<script>
		//TODO : 
		//TODO : submit onClick de id='ButtonPublicar'
		$(document).ready(function(){
			$(".editorAdd").change(function(){
				$("#conteudoAdd").val( $(".editorAdd").val() );
				
			});
			$("#ButtonPublicar").click(function(){
				$("#conteudoAdd").val( $(".editorAdd").val() );
				alert($(".editorAdd").val());
				document.getElementById("formAddPost").submit();
			});
			$("#ButtonPublicar2").click(function(){
				$("#conteudoEdit").val( $(".editorEdit").val() );
				document.getElementById("formEditPost").submit();
			});
		});
	</script>
</head>
<body id="main">
	tentativa: 60
	<?php 
		if(isset($_REQUEST['edit'])){
			if($_REQUEST['edit']!="ok"){
				$query2 = "SELECT * FROM `projeto` WHERE `projeto`.`id`=".$_REQUEST['edit'];
				if ($result = mysqli_query($conn, $query2)) {
					if ($row = mysqli_fetch_assoc($result)){
						echo"<div style='background-color:#5f5; font-weight:bold; color:black; width:100%;'>Post encontrado  =D</div>";	
					}else{
						echo"<div style='background-color:#f55; font-weight:bold; color:black; width:100%;'>Erro: Posts não encontrado  =/ <br>[".$query2."]</div>";
					}
					echo "<hr>";
				}else{
					echo"<div style='background-color:#f55; font-weight:bold; color:black; width:100%;'>Erro: Posts não encontrado  =/</div>";
					echo("Error description: <br> " . mysqli_error($conn));
					echo"<br><br>[ ".$query2." ]";
				}
	?>
	<!--//EDIT POST-->
		<main>
			<form id="formEditPost" enctype="multipart/form-data" action="addPost.php?edit=ok" method="POST">
				<input id="id" name="id" type="hidden" value="<?php echo"".$row['id']; ?>"/>
				<p><input id="title" class="larguraMax" name="nome" type="text" value="<?php echo"".$row['nome']; ?>"/></p>
				<p><textarea id="resumo" class="larguraMax" name="resumo" type="text" ><?php echo"".$row['resumo']; ?></textarea></p>
				
				<div style="border:5px red;">
				
					<div id="" class="quadroCheckbox">
						<p class="quadroTitle center">TIPO</p>
						<br><input id="tipoPublicacao1" name="projeto" type="checkbox" <?php if($row['projeto']==1) echo" checked "; ?>value="1"></input> Projeto
						<br><input id="tipoPublicacao2" name="experiencia" type="checkbox" <?php if($row['experiencia']==1) echo" checked "; ?>value="1"></input> Experiência
						<br><input id="tipoPublicacao3" name="post" type="checkbox" <?php if($row['post']==1) echo" checked "; ?>value="1"></input> Post
					</div>
					
					<div id="" class="quadroCheckbox">
						<p class="quadroTitle center">TEMAS</p>
						<br><input id="temaPublicacao1" name="rv" type="checkbox" <?php if($row['rv']==1) echo" checked "; ?>value="1"></input> VR
						<br><input id="temaPublicacao2" name="ra" type="checkbox" <?php if($row['ra']==1) echo" checked "; ?>value="1"></input> AR
						<br><input id="temaPublicacao3" name="web" type="checkbox" <?php if($row['web']==1) echo" checked "; ?>value="1"></input> Web
						<br><input id="temaPublicacao4" name="mobile" type="checkbox" <?php if($row['mobile']==1) echo" checked "; ?>value="1"></input> Mobile
					</div>
					<?php
						$data="".$row['data'];
						$ano=substr($data,0,4);
						$mes=substr($data,5,2);
						$dia=substr($data,8,2);
						$data=$ano."-".$mes."-".$dia;
					?>
					<div id="" class="quadroCheckbox">
						<p class="quadroTitle">DATA
							<input id="date" class="" name="data" type="date" value="<?php echo $data; ?>"/></p>
						<p class="quadroTitle">URL
							<input id="pagina" class="" name="pagina" type="text" value="<?php echo"".$row['pagina']; ?>"/></p>
						<button id="ButtonPublicar2" type="button"  class="center submitButton">ATUALIZAR</button>
					</div>
					
					<div class="clearfix space180">&nbsp;</div>
				</div>
				
				<input id="conteudoEdit" name="conteudo" type="hidden" value="=("/>
				<textarea style="width:100%; height:70%;" id="editor" class="editorEdit"><?php echo"".$row['conteudo']; ?></textarea>
<!--				<div class="adjoined-bottom">
					<div class="grid-container">
						<div class="grid-width-100">
							<div id="editor" class="editorEdit">
								
							</div>
						</div>
					</div>
				</div>
-->			</form>
		</main>	
	
	<?php   }
		}else{ 
	?>
	<!--//ADD POST-->
		<main>
			<form id="formAddPost" enctype="multipart/form-data"  action="addPost.php?add=1" method="post">
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
							<input id="date" class="" name="data" type="date" value="<?php echo date("Y-m-d");?>"/></p>
						<p class="quadroTitle">URL
							<input id="pagina" class="" name="pagina" type="text" value="lorem_ipsum_dolor_sit_amet"/></p>
						<button id="ButtonPublicar" type="button"  class="center submitButton">PUBLICAR</button>
					</div>
					
					<div class="clearfix space180">&nbsp;</div>
				</div>
				
				<input id="conteudoAdd" name="conteudo" type="hidden" value="=("/>
				<textarea style="width:100%; height:70%;" id="editor" class="editorAdd">
<div>
	<div><!--VÍDEO-->
		<h4>
			<p>
				<iframe width='560' height='315' src='https://www.youtube.com/embed/Sl7b4oodoqc' frameborder='0' allowfullscreen></iframe>
			</p>
		</h4>
	</div>

	<h4><!-- Texto comum -->
		<p>&emsp;<!-- Parágrafo -->
			O que acha de olhar seu projeto de arquitetura com uma maquete em tamanho real? Com a Realidade Virtual, você pode. 
		</p>
		<p>&emsp;<!-- Parágrafo -->
			Mas do que uma apresentação interessante, o uso da imersão e sentimento de presença em projetos de arquitetura e design de interiores tem vantagens que fazem diferença. 
		</p>
	</h4>

	<div><h3>SUBTÍTULO</h3></div><!-- Subtitulo -->
	<h4>
		<p>&emsp;
			• <font style='text-decoration: underline;'>TÓPICO 1<br></font>
			Diferente do projeto renderizado em telas de monitores, o uso de um HMD de Realidade Virtual, possibilita, não só visualizar o projeto, como também obter a percepção de profundidade e espaço.  influi na sensação real da escala. 
		</p>
		<p>&emsp;
			• <font style='text-decoration: underline;'>TÓPICO 2<br></font>
			Um bom designer procura instigar as sensações e sentimentos certos com seu projeto.
			Pelos HDMs, isso pode ser simulado através da imersão da aplicação.
			Uma vez que, com a presença, vem também a sensação, já que a pessoa não apenas vê o que foi criado.
			Elas podem genuinamente 'sentir' como é estar visualmente naquele espaço. 
		</p>
		<p>&emsp;
			• <font style='text-decoration: underline;'>TÓPICO 3<br></font>
			A partir do método de integração do Kinect com Android, o usuário pode passear em torno do projeto em Realidade Virtual com movimentos naturais do corpo.
			Isto é, sem uso de joysticks. 
		</p>
	</h4>
</div>

<div><h3></h3></div>
<div>
	<h4>
		<p>
			Tecnologias usadas: <b>Unity3D e C#</b>
		</p>
	</h4>
</div>
			</textarea>
<!--				<div class="adjoined-bottom">
					<div class="grid-container">
						<div class="grid-width-100">
							<div id="editor" class="editorAdd">
								<h1>over</h1>
								<p>Im an instance of <a href="http://overreal.com.br">OverReal</a>.</p>
							</div>
						</div>
					</div>
				</div>
-->			
				<div id="" class="quadroImagens">
					<p class="quadroTitle center">IMAGENS</p>
						img 1  <input name="imagem1"  type="file"/><br />
						img 2  <input name="imagem2"  type="file"/><br />
						img 3  <input name="imagem3"  type="file"/><br />
						img 4  <input name="imagem4"  type="file"/><br />
						img 5  <input name="imagem5"  type="file"/><br />
						img 6  <input name="imagem6"  type="file"/><br />
						img 7  <input name="imagem7"  type="file"/><br />
						img 8  <input name="imagem8"  type="file"/><br />
						img 9  <input name="imagem9"  type="file"/><br />
						img 10 <input name="imagem10" type="file"/><br />
						img 11 <input name="imagem11" type="file"/><br />
						img 12 <input name="imagem12" type="file"/><br />
						img 13 <input name="imagem13" type="file"/><br />
						img 14 <input name="imagem14" type="file"/><br />
						img 15 <input name="imagem15" type="file"/><br />
						img 16 <input name="imagem16" type="file"/><br />
						img 17 <input name="imagem17" type="file"/><br />
						img 18 <input name="imagem18" type="file"/><br />
						img 19 <input name="imagem19" type="file"/><br />
						img 20 <input name="imagem20" type="file"/><br />
					</p>
				</div>


			</form>
		</main>
	<?php
		}
		mysqli_close($conn);
	?>
<script>
	//initSample();
</script>

</body>
</html>
