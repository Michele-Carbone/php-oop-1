<?php

/*
Oggi pomeriggio ripassate i primi concetti di classe e di proprietà e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza (proprietà)
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative 
proprietà, se possibile cerchiamo di stampare senza ricorrere a var_dump

*/

class Movies
{
    public $id;
    public $title;
    public $genres;
    public $director;
    public $image;
    public $duration;
    public $plot;


    //tutto quello che serve per il costrutto
    public function __construct($_id, $_title, $_genres, $_director, $_image, $_duration)
    {
        $this->id = $_id;
        $this->title = $_title;
        $this->genres = $_genres;
        $this->director = $_director;
        $this->image = $_image;
        $this->duration = $_duration;
    }

    public function getPlot($_plot)
    {
        return $this->plot = $_plot;
    }
}


//prima istanza
$movie_1 = new Movies(1, 'Dune', ' Adventur,Action, science-fiction', ' Warner Bros', 'https://pad.mymovies.it/filmclub/2019/01/033/locandina.jpg', '155 min');
$plot_1 = 'Nel sistema feudale che domina l\'universo nel futuro il potere è nelle mani di un imperatore sotto il quale lottano tra di loro delle importanti casate. Sul desertico pianeta Arrakis si trova la Spezia, sostanza preziosa per una varietà di motivi. Alla casata Atreides e al suo capo, il Duca Leto viene affidato il controllo del pianeta ma in realtà si sta approntando una congiura per eliminarlo. Leto ha però un figlio, Paul, il quale è dotato di particolari poteri che sta sviluppando con l\'aiuto di sua madre Lady Jessica. Anche lui finisce quindi con il diventare un ostacolo da abbattere.';


$movie_1->getPlot($plot_1);


//seconda istanza 
$movie_2 = new Movies(2, 'FAST & FURIOUS 9', ' Adventur ,Action', ' Universal Pictures', 'https://pad.mymovies.it/filmclub/2017/10/059/locandina.jpg', '175 min');
$plot_2 = 'Dopo aver diretto gli episodi 3, 4, 5 e 6, Justin Lin riprende il volante della saga e mette mano all\'albero genealogico dei Toretto. Col suo ‘autore’, Fast & Furious ritrova la grazia meccanica degli opus passati e supera i limiti della credibilità, godendo (come noi) della propria assurdità. Nobilmente sincero e gloriosamente comico, parte a marcia indietro e accende i motori nel 1989, quando i sentimenti come le auto da corsa erano analogiche. E in quel passato prossimo scopriamo un Toretto di cui nessuno ha mai sentito parlare. Ganci in mezzo al cielo, macchine volanti, Pontiac lunari, non c’è sfida che non possa essere vinta con inventività plastica e una dose massiccia di autoderisione.';


$movie_2->getPlot($plot_2);


//terza istanza
$movie_3 = new Movies(3, 'THE SUICIDE SQUAD - MISSIONE SUICIDA', '  Azione, Avventura, Fantasy - USA 2021', ' Universal Pictures', 'https://pad.mymovies.it/filmclub/2017/02/113/locandina.jpg', '132 min');
$plot_3 = 'Amanda Waller ha una nuova cruciale missione e ha bisogno di una nuova squadra di supercriminali, imprigionati dal sistema carcerario-industriale americano. È particolarmente determinata ad avvalersi di Bloodsport, che pensa abbia la stoffa di un vero leader e possa guidare il team al successo. Al suo fianco una galleria di personaggi a dir poco improbabili e spesso caricaturali, con in più il ritorno di Rick Flagg, Harley Quinn e Capitan Boomerang. Riusciranno a recuperare le informazioni sul misterioso progetto Starfish, sull\'isola Corto Maltese?';


$movie_3->getPlot($plot_3);


//var_dump($movie_1);
//var_dump($movie_2);
