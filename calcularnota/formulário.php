<!DOCTYPE html>
<html lang="ept-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatorio </title>
</head>
<body>
    <div class="container">
        <h1>Relatorio de notas</h1>
    <?php
    if($_server['request_method']=="post") {
        // Obtém as notas do formulário
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];
        $nota4 = $_POST['nota4'];
        
        //calcula a media
        $media = ($nota1 + $nota2 + $nota3 + $nota4) /4
        
        
        //Exibe o resultado 
        echo "<h3> A media das notas e : number_format($media,2," ' ). "</h3>";} ?>
    }
</body>
</html>