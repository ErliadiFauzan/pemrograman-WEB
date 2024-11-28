<?php

function cetakBilangan($n) {

    if ($n <= 0 || !is_int($n)) {
        echo "Masukkan bilangan bulat positif.\n";
        return;
    }


    for ($i = 1; $i <= $n; $i++) {
        if ($i % 4 == 0 && $i % 6 == 0) {

            echo "Pemrograman Website 2024\n";
        } elseif ($i % 2 == 0) {

            echo "2024\n";
        } elseif ($i % 4 == 0) {

            echo "Pemrograman\n";
        } elseif ($i % 6 == 0) {

            echo "Website\n";
        } else {

            echo $i . "\n";
        }
    }
}

cetakBilangan(30);
?>