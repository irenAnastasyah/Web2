<?php
//ambil volue yang di imput user dan simpan ke dalam variabel
$proses = $POST['proses'];
$nana = $_POST['nama'];
$matkul = $_POST['matkul'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$Praktikum = $_POST['Praktkum'];
function grade($rata_rata){
    if ($rata_rata >= 85 && $rata_rata <=100) {
        return "A (Sangat baik)";
    } elseif ($rata_rata >= 70 && $rata_rata <=84) {
        return "B (baik)";
    } elseif ($rata_rata >= 56 && $rata_rata <=69) {
        return "C (Cukup)";
    }  elseif ($rata_rata >= 36 && $rata_rata <=55) {
        return "D (Kurang)";
    } elseif ($rata_rata >= 0 && $rata_rata <=35) {
        return "E (Sangat Kurang)";
    }else{
        return "I (Tidak Nilai)";
    }
    }

//pangil variabel yang memiliki value kolom, tampilan menggunakan echo
echo "proses : $proses";
echo "<br>Nama Lengkap : $nama";
echo "<br>Mata Kulia : $matkul";
echo "<br>Nilai UTS : $uts";
echo "<br>Nilai UAS : $uas";
echo "<br>Praktium : $Praktikum";

?>