<?php

require 'src/Traits/SuaraTrait.php';
require 'src/abstrack/HewanDasar.php';
require 'src/Hewan.php';

use Project\Kucing;
use Project\Burung;

// Membuat instance kucing
$kucing = new Kucing("Kitty", "Felidae");
echo $kucing->bergerak() . "\n";
echo $kucing->buatSuara("meong") . "\n";
echo $kucing . "\n"; // Magic method __toString

// Membuat instance burung
$burung = new Burung("Tweety", "Aves");
echo $burung->bergerak() . "\n";
echo $burung->buatSuara("kuku-ruyuuuuuuuuuuuu.uuk.uk.uk") . "\n";
echo $burung . "\n"; // Magic method __toString
