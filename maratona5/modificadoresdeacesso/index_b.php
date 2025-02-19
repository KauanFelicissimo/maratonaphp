<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    class Roupas{
        public $nome;
        public $preco;
        private $codigoproduto;

        public function exibirDetalhes(){
            echo "Nome: ". $this->nome . "<br>";
            echo "Preço: ". number_format($this->preco, 2, ",", ".") . "<br>";
           //echo "codigo do produto: ". $this->codigoproduto . "<br>"; 
        }
        public function setCodigoProduto($codigoproduto){
            $this->codigoproduto = $codigoproduto;
        }
        public function getCodigoProduto(){
            return $this->codigoproduto;
        }
    }
    $roupa1 = new Roupas();
    $roupa1->nome = "Camiseta";
    $roupa1->preco = 50.00;
    $roupa1->exibirDetalhes();
    $roupa1->setCodigoProduto(123456);
    echo "Código do produto: ". $roupa1->getCodigoProduto();
    $roupa1->setCodigoProduto(654321);
    // Valor após alteração
    echo "<br>Código do produto: ". $roupa1->getCodigoProduto();


  
    
    
    ?>
</body>
</html>