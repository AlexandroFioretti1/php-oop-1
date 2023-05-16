<!--  
Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
è definita una classe ‘Movie’ all'interno della classe sono dichiarate delle variabili d'istanza  all'interno della classe è definito un costruttore all'interno della classe è definito almeno un metodo vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà. Tra le varie proprietá, la classe Movie 'ha un' genere (sfruttare il concetto di composizione).  -->

<?php

class Movie

{
    public $Titolo;
    public $Anno;
    public $Genere;
    public $Regista;

    public function __construct(string $Titolo, string $Anno, string $Genere, string $Regista)
    {
        $this->Titolo = $Titolo;
        $this->Anno = $Anno;
        $this->Genere = $Genere;
        $this->Regista = $Regista;
    }
    public function nuovoFilm()
    {
        echo "Titolo: " . $this->Titolo;
        echo "Anno: " . $this->Anno;
        echo "Genere: " . $this->Genere;
        echo "Regista: " . $this->Regista;
    }
}
/*  

$film_1 = new Movie("tipregofunziona", "1994", "bene", "mario");
$film_2 = new Movie("hello", "2020", "hey", "mattia");

$film_1->nuovoFilm("");
$film_2->nuovoFilm("");

*/

$movies = [
    new Movie("La La Land", "2016", "Musical. Romantico. Drammatico", "Damien Chazelle"),
    new Movie("Inception", "2010", "Azione. Fantascienza. Thriller", "Christopher Nolan"),
    new Movie("Il padrino", "1972", "Drammatico. Crime", "Francis Ford Coppola"),
    new Movie("Il cavaliere oscuro", "2008", "Azione. Crime. Drammatico", "Christopher Nolan"),
    new Movie("Forrest Gump", "1994", "Commedia. Drammatico. Romantico", "Robert Zemeckis"),
    new Movie("Pulp Fiction", "1994", "Crimine. Drammatico. Thriller", "Quentin Tarantino"),
    new Movie("Interstellar", "2014", "Avventura. Fantascienza. Drammatico", " Christopher Nolan"),
    new Movie("Fight Club", "1999", " Drammatico. Thriller", " David Fincher"),
]


?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>php-oop-1</title>
</head>

<body>

    <div class="container ">
        <div class="row">
            <?php foreach ($movies as $movie) : ?>
                <div class="col-4">
                    <div class="card">
                        <h5><?php echo ($movie->Titolo) ?></h5>


                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>


</body>

</html>