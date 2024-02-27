<?php

$mahasiswas = [["Anies","TI","8"],["Prabowo","SI","9"],["Ganjar","BD","16"]];

foreach ($mahasiswas as $mahasiswa) {
    echo "nama : " .$mahasiswa[0] ."<br>";
    echo "jurusan : " .$mahasiswa[1] ."<br>";
    echo "semester : " .$mahasiswa[2] ."<br>";
    echo "<br>";
}