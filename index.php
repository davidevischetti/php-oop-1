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
    $thelordoftherings1 = new Movie ('The Lord of the Rings: The Fellowship of the Ring', '2001', 'Fantastico/Avventura', '2h 58m', false);

    $arr_movies[] = $thematrix;
    $arr_movies[] = $thelordoftherings1;

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
    <ul>
        <?php
            foreach ($arr_movies as $movie) {
                echo '<li>Titolo: ' . $movie->name . '</li>';
                echo '<li>Anno: ' . $movie->name . '</li>';
                echo '<li>Genere: ' . $movie->name . '</li>';
                echo '<li>Duramoviea: ' . $movie->name . '</li>';
                if ($movie->watch == true) {
                    echo '<li class="watch">' . $movie->watchFunction(true) . '</li>';
                } else {
                    echo '<li class="no-watch">' . $movie->watchFunction(false) . '</li>';
                }
                
            }
        ?>
    </ul>

    
</body>
</html>

