<?php

require 'src/Traits/SuaraTrait.php';
require 'src/abstrack/HewanDasar.php';
require 'src/Hewan.php';

use Project\Kucing;
use Project\Burung;

// Membuat instance kucing
$kucing = new Kucing("Kitty", "Felidae");
echo $kucing->bergerak() . PHP_EOL;
echo $kucing->buatSuara("meong") . PHP_EOL;
echo $kucing . PHP_EOL; // Magic method __toString

// Membuat instance burung
$burung = new Burung("Tweety", "Aves");
echo $burung->bergerak() . PHP_EOL;
echo $burung->buatSuara("kuku-ruyuuuuuuuuuuuu.uuk.uk.uk") . PHP_EOL;
echo $burung . PHP_EOL; // Magic method __toString
