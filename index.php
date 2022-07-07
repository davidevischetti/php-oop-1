<?php
    class Movie {
        public $name;
        public $genre;
        public $length;
        public $year;

        public $watch = true;

        public function watchFunction ($_watch) {
            if ($this->watch = $_watch) {
                return 'You have watched this movie';
            } else {
                return 'You have to watch this movie';
            }
        }

        function __construct($_name, $_year, $_genre, $_length)
        {
            $this->name = $_name;
            $this->year = $_year;
            $this->genre = $_genre;
            $this->length = $_length;
        }

    }

    $thematrix = new Movie ('The Matrix', '1999', 'Sci-fi/Azione', '2h 16m');
    $thelordoftherings1 = new Movie ('The Lord of the Rings: The Fellowship of the Ring', '2001', 'Fantastico/Avventura', '2h 58m');

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- MATRIX -->
    <ul>
        <?php
            echo '<li>Titolo: ' . $thematrix->name . '</li>';
            echo '<li>Anno: ' . $thematrix->name . '</li>';
            echo '<li>Genere: ' . $thematrix->name . '</li>';
            echo '<li>Durata: ' . $thematrix->name . '</li>';
            echo '<li class="watch">' . $thematrix->watchFunction(true) . '</li>';
        ?>
    </ul>

    <!-- IL SIGNORE DEGLI ANELLI -->
    <ul>
        <?php
            echo '<li>Titolo: ' . $thelordoftherings1->name . '</li>';
            echo '<li>Anno: ' . $thelordoftherings1->name . '</li>';
            echo '<li>Genere: ' . $thelordoftherings1->name . '</li>';
            echo '<li>Durata: ' . $thelordoftherings1->name . '</li>';
            echo '<li class="no-watch">' . $thelordoftherings1->watchFunction(false) . '</li>';
        ?>
    </ul>
    
</body>
</html>

