<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular a média do Aluno</title>
</head>
<body>

    <?php
        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];
        $nota3 = $_POST["nota3"];
        $media = ($nota1 + $nota2 + $nota3)/3;

        if($media>=6){
            $resul = "<strong>APROVADO!</strong>";
        }else{
            $resul = "<strong>REPROVADO!</strong>";
        }

        echo "<p>A média entre as notas $nota1, $nota2 e $nota3 é </p>" . number_format($media,2);
        echo "<br><p>A situação $resul</p>";
    ?>
    
</body>
</html>