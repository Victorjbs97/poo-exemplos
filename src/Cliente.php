<?php 
    class Cliente {
        public string $nome;
        public int $idade;
        public string $email;


        //Telefone é opcional, se não informado o valor é null.
        public ?string $telefone; // ? indica que o atributo pode ser null 
        /* Método construtur: responsavel por construir um objeto COM seus dados no mommento da criação */
                                                                                                    //pode ser nulo.
        public function __construct(string $valorDoNome, int $valorDaIdade, string $valorDoEmail, ?string $valorDoTelefone = null){
            $this->nome = $valorDoNome;
            $this->idade = $valorDaIdade;
            $this->email = $valorDoEmail;
            $this->telefone = $valorDoTelefone;
        }
    }
?>