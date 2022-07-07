<?php
    class Movie {
        public $name;
        public $genre;
        public $length;
        public $year;

        public $watch;

        public $arr_movies = [];

        public function watchFunction ($_watch) {
            if ($this->watch = $_watch) {
                return 'You have watched this movie';
            } else {
                return 'You have to watch this movie';
            }
        }

        function __construct($_name, $_year, $_genre, $_length,$_watch)
        {
            $this->name = $_name;
            $this->year = $_year;
            $this->genre = $_genre;
            $this->length = $_length;
            $this->watch = $_watch;
        }

    }

    $thematrix = new Movie ('The Matrix', '1999', 'Sci-fi/Azione', '2h 16m', true);
    $thelordoftheringsuno = new Movie ('The Lord of the Rings: The Fellowship of the Ring', '2001', 'Fantastico/Avventura', '2h 58m', true);
    $assassiniosulnilo = new Movie ('Assassinio sul Nilo', '2022', 'Drammatico', '2h 7m', false);
    $creeddue = new Movie ('Creed II', '2018', 'Drammatico/Sportivo', '2h 10m', false);
    $revenant = new Movie ('Revenant', '2016', 'Avventura', '2h 36m', true);


    $arr_movies[] = $thematrix;
    $arr_movies[] = $thelordoftheringsuno;
    $arr_movies[] = $assassiniosulnilo;
    $arr_movies[] = $creeddue;
    $arr_movies[] = $revenant;

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

    <!-- LISTA FILM -->
    
        <?php
            foreach ($arr_movies as $movie) {
                echo '<ul>
                    <li>Titolo: ' . $movie->name . '</li>
                    <li>Anno: ' . $movie->name . '</li>
                    <li>Genere: ' . $movie->name . '</li>
                    <li>Durata: ' . $movie->name . '</li>';
                if ($movie->watch == true) {
                    echo '<li class="watch">' . $movie->watchFunction(true) . '</li>';
                } else {
                    echo '<li class="no-watch">' . $movie->watchFunction(false) . '</li>';
                }
                echo '</ul>';
            }
        ?>
    

    
</body>
</html>

