<?php 

    class Livro{
        private string $titulo;
        private string $autor;
        private ?int $paginas;
        private ?string $imagem;

        public function __construct(string $titulo,string $autor, ?int $paginas = null, ?string $img = null){   
            $this->setVerificarTitulo($titulo);
            $this->setAutor($autor);
            $this->paginas = $paginas;
            $this->imagem = $img;

        }

        
        private function setVerificarTitulo($ValorTitulo): void{
            if(mb_strlen($ValorTitulo)>3){
                $this->titulo = $ValorTitulo;
            }else{
                echo "Título não pode ter menos do que 3 letras";
            }
        }

        private function setAutor($ValorAutor){
            if(mb_strlen($ValorAutor)>2){
                $this->autor = $ValorAutor;
            }else{
                echo "<h2 style='color:red; font-size:2em'>Título não pode ter menos do que 3 letras</h2><hr>";
            }
        }

        public function getTitulo():string{
            return $this->titulo;
        }
        public function getAutor():string{
            return $this->autor;
        }
        public function getPaginas():?int{
            return $this->paginas;
        }
        public function getImagem():?string{
            return $this->imagem;
        }
    }

?>