<?php
    class Movie{
        public $title;
        public $genre;
        public $time;
        public $releaseY;
        public $vote;
        public $classic;

        public function isClassic(){
            if($this->vote > 7 && $this->releaseY < 2011){
                $this->classic = true;
            } else {
                $this->classic = false;
            };
        }
        public function __construct($title, Array $genre, $time, $releaseY,$vote){
            $this->title = $title;
            $this->genre = $genre;
            $this->time = $time;
            $this->releaseY = $releaseY;
            $this->vote = $vote;
        }
    };

    $movies = [];
?>