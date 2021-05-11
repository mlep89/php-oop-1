<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css">
    <title>OOP 1</title>
</head>
<body>
    <?php
        class Movie {
            public $title;
            public $language;
            public $cast;
            public $genre;
            public $year;
            public $image;
            private $vote = 0;

            public function __construct($_vote){
                $this->vote = $_vote;
                if ($_vote < 6){
                    $this->vote = 'insufficiente';
                }
                else {
                    $this->vote = 'sufficiente';
                }
            }

            public function setVote($vote){
                if ($vote < 6){
                    $this->vote = 'insufficiente';
                }
                else {
                    $this->vote = 'sufficiente';
                }
            }

            public function getVote(){
                return $this->vote;
            }
        }

        $Batman = new Movie(9);
        //$Batman-> setVote(6);
        $Batman-> title ="Batman Begins";
        $Batman-> language ="english";
        $Batman-> genre ="fantasy";
        $Batman-> year ="2010";
        $Batman-> image = "img/batmanbegins.jpg";

        $Puffi = new Movie(4);

        $Puffi-> language ="italian";
        $Puffi-> genre ="cartoon";
        $Puffi-> year ="1990";
        $Puffi-> image = "img/batmanbegins.jpg";

    ?>
    <div class="container">
        <div class="subcontainer">
            <h1>Il tuo film preferito</h1>
            <i class="fas fa-video"></i>
        </div>
        <div>
            <div class="film_container">
                <img id="my_img" src="<?php echo $Batman->image ?>" alt="">
                <h3>Titolo <?php echo $Batman->title ?></h3>
                <p>Regista: <?php echo $Batman->cast ?></p>
                <p>Anno: <?php echo $Batman->year ?></p>
                <p>Genere: <?php echo $Batman->genre ?></p>
            </div>
        </div>
    </div>
</body>
</html>