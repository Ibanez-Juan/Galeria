<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geleria de Fotos com PHP</title>
</head>
<body>
<?php
    $imagens = array('img.jpg','img2.png','img3.png');

    $indece = 0;

    if(!isset($_GET['foto'])){
        $indece= 0;
    }else{
        $indice = (int) $_GET['foto'];
        if($indice < 0){
            $indece =0;
        }
        
        if ($indece >= count($imagens)){
            $indece = count($imagens) -1;
        }
    }

?>
<img src="<?php echo $imagens[$indece] ?>" />
</body>
</html>