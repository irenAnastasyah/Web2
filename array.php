<?php

$animals = ["kucing","ayam","banteng","ikan"];
echo 'ini nama hewan index ke 1 : ' .$animals[1];
echo "<br>";
echo 'ini hewan dengan index ke 2 : ' .$animals[3];
echo "<br>";
//mencetak seluruh data array gunakan looping foreach
foreach ($animals as $animal) {
    echo '<li>'.$animal.'</li>';
}