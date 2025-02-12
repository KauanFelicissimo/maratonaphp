<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
</head><h2>Média</h2>
<body>
    <?php 
    $array = [10, 20, 30 ,40, 50 ,60, 70, 80, 90, 100];
    // Count serve para contar o número de elementos que foram inseridos dentro de um array
    $count = count($array);

    for($i = 0 ; $i < 1; $i++){
        // array_sum é usado para somar todos os números em um array
        $média =  array_sum($array) / count($array);
        echo "A média desses números é: ";
        echo "<pre>";
        print_r($array);
        echo  $média . "<br>";

    }


    
    
    
    
    
    ?>
</body>
</html>