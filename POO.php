<?php 
    class Produto {
        //propriedade privada: ninguém mexe no estoque sem autorização
        private float $preco;

        //Método público (Setter)
        public function setPreco(float $valor): bool {
            if ($valor >0){
                $this->preco = $valor;
                return true;
            }
            return false; //bloquear valores inválidos
        }

        //Método público Getter
        public function getPreco(): float {
            return $this->preco;
        }

    }
//PRINCÍPIOS POO:Abstração, Encapsulamento, Herança, Polimorfismo
/*Abstração: foca no que é importante, escondendo detalhes internos
Encapsulamento: proteção de uma propriedade ou método
    visibilidades: 
        public: o membro pode ser acessado de qualquer lugar, inclusive por outras classes
        protected:  o membro só pode ser acessado por métodos da própria classe ou de subclasses
        private:  O membro só pode ser acessado por métodos dentro da MESMA CLASSE onde foi declarado:
    Métodos: 

            Get(Getters):  métodos de APENAS LEITURA, retorna o valor sem dar acesso direto a ela.            
            
            Set(Setters): Permite que a classe verifique se a informação é válida antes de atualizar. PERMITE LEITURA antes de atualizar.

        Herança: 
Polimorfismo:
 */

    $notebook = new Produto();

    if ($notebook->setPreco(3500.50)){
        echo "Valor atualizado com sucesso! \n";
    } else {
        echo "Erro: O valor deve ser maior que zero. \n";
    }

    //recuperar o valor para exibição pelo Getter
    echo "Preço do produto: R$ ". number_format($notebook->getPreco(), 2, ',', '.');//number_format()
?>

