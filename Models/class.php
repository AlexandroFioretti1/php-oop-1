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
