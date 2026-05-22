<?php
    class Gato {
        //propriedades do animal
        public $nome;
        public $raca;
        public $cor;
        public $idade;

        //construtor inicializa com a classe
        public function __construct($nome, $raca, $cor, $idade){
            this->nome = $nome;
            this->raca = $raca;
            this->cor = $cor;
            this->idade = $idade;
        }


        public function falar(){
            return "O gato ".$this->nome. " diz: Miau miau miau miau";
        }

        public function exibirInformacao() {
            return "Ficha do Gato: [Nome: $this->nome, Raça: $this->raca, Cor: $this->cor, Idade: $this->idade anos ]";
        }
    }
?>