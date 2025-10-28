<?php 
    class Cliente {
        private string $nome;
        private int $idade;
        private string $email;
        
        private ?string $telefone;

        public function __construct(string $valorDoNome, int $valorDaIdade, string $valorDoEmail, ?string $valorDoTelefone = null){
            $this->setNome($valorDoNome);
            $this->setIdade($valorDaIdade);
            $this->setEmail($valorDoEmail);
            $this->telefone = $valorDoTelefone;
        }

        public function getNome():string{
            return $this->nome;
        }
        public function getIdade():int {
            return $this->idade;
        }

        public function getEmail():string{
            return $this->email;
        }
        public function getTelefone():?string{
            return $this->telefone;
        }

        //permitem acesso de escrita para definir valores
        private function setNome(string $valorNome):void{
            if(empty($valorNome)){
                echo "<P style='font-size:2em'><b style ='color:red;'>ATENÇÃO </b> o nome não pode estar vazio!</P>";
            }else{
                $this->nome = $valorNome;
            }
        }

        private function setEmail(string $valorEmail): void{
            //Validar e email
            $validaEmail = filter_var($valorEmail,FILTER_VALIDATE_EMAIL);
            if($validaEmail){
                $this->email = $valorEmail;
            }else{
                echo "<P style='font-size:2em'><b style ='color:red;'>ATENÇÃO</b> o email esta incorreto!</P>";
            }
        }

        private function setIdade(int $valorIdade):void{
            if($valorIdade < 0){
                echo "<P style='font-size:2em'><b style ='color:red;'>ATENÇÃO</b> Idade não pode ser negativa!</P>";
            }else{
                $this->idade = $valorIdade;
            }
        }

    }
?>