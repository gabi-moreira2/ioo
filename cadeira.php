<?php
    //nome da classe
    class Cadeira{      //Por padronização nome de classe é maíusculo! Se for composta -> class PrimeiraSegunda

        //lista de atributos
        public $cor;
        public $peso;
        public $material;
        public $durabilidade;
        public $custo;
        public $tamanho;            //A. variável
        public $encosto;
        public $regulagem_minima;
        public $regulagem_maxima;   //A. fixo

        //método construtor. Parâmetros obrigatórios (nessa sequência)
        public function __construct($cor, $peso, $material, $durabilidade, $custo, $encosto, $regulagem_minima, $regulagem_maxima){    //Valores devem ser passados na instanciação do objeto (Ver exemplo2.php)

            $this->cor = $cor;  //Atributo cor da Classe recebe o parametro de  cor de entrada
            $this->peso = $peso;
            $this->material = $material;
            $this->durabilidade = $durabilidade;
            $this->custo = $custo;
            $this->tamanho = $regulagem_minima;
            $this->encosto = $encosto;
            $this->regulagem_minima = $regulagem_minima;
            $this->regulagem_maxima = $regulagem_maxima;
        }

        //lista de métodos
        public function aumentar($medida){
            $this->tamanho = $this->tamanho + $medida;   //O valor da propriedade do objeto será modificado;
            if ($this->tamanho > $this->regulagem_maxima){
                $this->tamanho = $this->regulagem_maxima;
            }
        }

        public function abaixar($medida){
            $this->tamanho = $this->tamanho - $medida;
            if ($this->tamanho < $this->regulagem_minima){
                $this->tamanho = $this->regulagem_minima;
            }
        }

    }
?>