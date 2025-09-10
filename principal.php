<?php
include("valida.php");
?>
<html>
    <title>Página Principal</title>
    <head>
</head>
<body>
    <div style="width:1000px; margin: 0 auto;">
        <div style="width= 90%; min-heigth: 100px; background-color: rgba(228, 49, 235, 0.96);">
            <span style="padding-left: 10px;">Ola <?=$_SESSION['nome'];?></span>

           <div style="width= 10%; float:right;"><span style="background-color:blue; margin: right 10px;"><a href="sair.php"><font color="black">SAIR</font></a></span>
            </div>
        </div>
        

        <div style="width:200px; background-color:rgb(83, 171, 230); min-height: 400px; float:left;"> 
            menu
        </div>
        <div style="width:800px; background-color:rgb(223, 46, 46); min-height:400px; float:left;">
            conteúdo
        </div>
    </div>
</body>
</html>