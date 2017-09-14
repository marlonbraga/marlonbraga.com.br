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
    $query = "  SELECT * 
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

<!DOCTYPE html>
<html>
<head>
    <title>Demo 4</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="lib/ninja_slider/thumbnail-slider.css" rel="stylesheet" type="text/css" />
    <link href="lib/ninja_slider/ninja-slider.css" rel="stylesheet" type="text/css" />
    <script src="lib/ninja_slider/thumbnail-slider.js" type="text/javascript"></script>
    <script src="lib/ninja_slider/ninja-slider.js" type="text/javascript"></script>
    <style>
        a {color:#1155CC;}
        ul li {padding: 10px 0;}
        code {display:block;white-space:pre; background-color:#f6f6f6;padding:8px; overflow:auto;border:1px dotted #999;margin:6px 0;}
    </style>
</head>
<body style="color: rgba(0, 0, 0, 0);">
    <!--start-->
    <div id='ninja-slider' style="color: rgba(0, 0, 0, 0);">
        <div>
            <div class="slider-inner">
                <ul>
                    <?php 
                        $i=1;
                        while(($row['imagem'.$i]!="")&&($i<=20)){
                            ?>echo "<li><a class='ns-img' href='<?php echo $row['imagem'.$i]; ?>'></a></li>";<?php
                            $i++;
                        }
                    ?>
                </ul>
                <!--<div class="fs-icon" title="Expand/Close"></div>-->
            </div>
            <div id="thumbnail-slider">
                <div class="inner">
                    <ul>
                        <?php 
                            $i=1;
                            while(($row['imagem'.$i]!="")&&($i<=20)){
                                echo "<li><a class='thumb' href=".$row['imagem'.$i]."></a><span>".$i."</span></li>";
                                $i++;
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--end-->
</body>
</html>
