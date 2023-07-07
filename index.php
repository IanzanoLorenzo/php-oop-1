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

    $PulpFiction = new Movie('Pulp Fiction', ['gangster', 'commedia', 'drammatico', 'thriller', 'noir'], '2h 45m', 1994, 9);
    $SpidermanNoWayHome = new Movie('Spider-Man: No Way Home', ['azione', 'avventura', 'fantascienza'], '2h 28m', 2021, 9);

    $PulpFiction->isClassic();
    $SpidermanNoWayHome->isClassic();

    echo '<pre>';
    var_dump($PulpFiction, $SpidermanNoWayHome);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>