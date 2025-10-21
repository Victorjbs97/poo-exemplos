<?php 
    class Cliente {
        public string $nome;
        public int $idade;
        public string $email;

        public function mostrarDados(){
            echo "<div>
                    <h4>NOME DO CLIENTE</h4>
                    <p><b>e-mail de contato:</b> EMAIL</p>
                    <p><b>Idade: </b> IDADE anos</p>  
                </div>";
        }
    }
?>