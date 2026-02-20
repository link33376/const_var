<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
</head>
<body>
<?php 

class Carro {

    public $marca;
    public $modelo;
    public $ano;
    public $cor;
    public $velocidade = 0;

    public function acelerar(){
        $this->velocidade += 10;
        echo "O carro acelerou. Velocidade: " . $this->velocidade . " Km/h <br>";
    }

    public function frear(){
        if($this->velocidade >= 10){
            $this->velocidade -= 10;
        }
        echo "O carro freou. Velocidade: " . $this->velocidade . " Km/h <br>";
    }
}

// Criando objeto
$meuCarro = new Carro();

// Chamando métodos
$meuCarro->acelerar();
$meuCarro->acelerar();
$meuCarro->frear();

?>
</body>
</html>