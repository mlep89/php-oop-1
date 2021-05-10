<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        $Batman = new Movie(2);
        //$Batman-> setVote(6);
        $Batman-> language ="english";
        var_dump($Batman); 

    ?>
</body>
</html>