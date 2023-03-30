<?php
    class Libro {
        protected $title;
        protected $author;
        protected $editorial;
        protected $genred;
        protected $pages;

        function __construct($title, $author, $editorial, $genred, $pages) {
            $this->title = $title;
            $this->author = $author;
            $this->editorial = $editorial;
            $this->genred = $genred;
            $this->pages = $pages;
        }
        
        public function getTitle (){
            return $this->title;
        }

        public function setName ($newTitle){
            $this->$newTitle;
        }

        // public function getArrayProps (){
        //     $result [
        //         "name" => $this->title,
        //         "age" => $this->author
        //     ];
        // }

        public function getArrayProps (){
            var_dump(get_object_vars($this));
        }
    }

    class Comic extends Libro{
        protected $volumes;
        protected $color;

        function __construct($volumes, $color) {
            $this->volumes = $volumes;
            $this->color = $color;
        }
    }
    $libro1 = new Libro("Edda Mayor", "Snorri Sturluson", "bookking", "poesía", "260");
    echo $libro1->getArrayProps();
    // echo $libro1->getTitle()
?>
