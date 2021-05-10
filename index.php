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
            public $vote = 0;

            public function setVote($_vote){
                if ($vote < 6){
                    $this->vote = 'insufficiente';
                }
                if ($vote > 6){
                    $this->vote = 'sufficiente';
                }
            }

            public function getVote(){
                return $this->vote;
            }
        }

        $Batman = new Movie();
        $Batman-> setVote(7);
        var_dump($Batman); 

    ?>
</body>
</html>