<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior número de uma matriz</title>
</head>
<body>
    <?php 
    $maior = 0;
    $matriz =[
        [1, 2, 3, 4, 5],
        [6, 7, 8, 9, 10],
        [11, 12, 13, 14, 15],
        [16, 17, 18, 19, 20],
        [21, 22, 23, 24, 25]
    ];
     foreach ($matriz as $linha){
       foreach ($linha as $valor){
         if ($valor > $maior){
              $maior = $valor;
         }
       }
     }
    echo "O maior número da matriz é: ". $maior;
    
    
    ?>
</body>
</html>