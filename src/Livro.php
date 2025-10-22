<?php 

    class Livro{
        public string $titulo;
        public string $autor;
        public ?int $paginas;
        public ?string $imagem;

        public function __construct(string $titulo,string $autor, ?int $paginas = null, ?string $img = null){   
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->paginas = $paginas;
            $this->imagem = $img;

        }

        
        public function mostrarLivros():void{
            echo 
            "<div class='card' style='width: 15rem;'>
                <img src='$this->imagem' alt='' class='card-img-top' img-thumbnail'>
                <div class='card-body'>
                <h5 class='card-title'>$this->titulo</h5>
                <p class='card-text'><b>Autor:</b> $this->autor</p>
                ";
                if($this->paginas){
                    echo" <P><b>$this->paginas</b> paginas</P>";
                }
                echo"<hr>
                </div>
                </div>
            ";
        }
        
        public function verificarTitulo(): void{
            if(mb_strlen($this->titulo)>3){
                $this->mostrarLivros();
            }else{
                echo "<h2 style='color:red; font-size:2em'>Título não pode ter menos do que 3 letras</h2><hr>";

            }
        }
    }

?>