<h1>POO Exercises</h1>

<?php

spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});


$stephenking = new Auteur("King","Stephen");

$ca = new Livre("Ca","1138","1986","20e");
$Simetierre = new Livre("Simetierre","374","1983","15e");
$LeFleau = new Livre("Le fleau","823","1978","14e");
$Shining = new Livre("Shining","447","1977","16e");


echo $stephenking->afficherBibliographie();


