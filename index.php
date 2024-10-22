<?php

require 'Auteur.php';
require 'Livre.php';

$stephenKing = new Auteur('King', 'Stephen');


$ca = new Livre('Ca', 1138, 1986, 20, $stephenKing);
$simetierre = new Livre('Simetierre', 374, 1983, 15, $stephenKing);
$leFleau = new Livre('Le Fleau', 823, 1978, 14, $stephenKing);
$shining = new Livre('Shining', 447, 1977, 16, $stephenKing);

echo $stephenKing->afficherBibliographie();

