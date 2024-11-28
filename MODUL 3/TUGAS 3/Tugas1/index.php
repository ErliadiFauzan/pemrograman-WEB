<<<<<<< HEAD
<?php

require 'src/Traits/SuaraTrait.php';
require 'src/abstrack/HewanDasar.php';
require 'src/Hewan.php';

use Project\Kucing;
use Project\Burung;


$kucing = new Kucing("Kitty", "Felidae",);
echo $kucing->bergerak() . "\n";
echo $kucing->buatSuara("meong") . "\n";
echo $kucing . "\n\n"; 


$burung = new Burung("Tweety", "Aves");
echo $burung->bergerak() . "\n";
echo $burung->buatSuara("kuku-ruyuuuuuuuuuuuu.uuk.uk.uk") . "\n";
echo $burung . "\n"; 
=======
<?php

require 'src/Traits/SuaraTrait.php';
require 'src/abstrack/HewanDasar.php';
require 'src/Hewan.php';

use Project\Kucing;
use Project\Burung;


$kucing = new Kucing("Kitty", "Felidae");
echo $kucing->bergerak() . "\n";
echo $kucing->buatSuara("meong") . "\n";
echo $kucing . "\n"; 


$burung = new Burung("Tweety", "Aves");
echo $burung->bergerak() . "\n";
echo $burung->buatSuara("kuku-ruyuuuuuuuuuuuu.uuk.uk.uk") . "\n";
echo $burung . "\n"; 
>>>>>>> 72869898264302d6e995d5cec64cd64356087809
