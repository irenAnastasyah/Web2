<?php 
// buat class rumah
class Rumah{
    // properti
public $iren = "iren";
public $warna_rumah = "hijau";
public $merk_tv = "politron";
    // methode

private function getRumah($nama_pemilik, $warna_rumah, $merk_tv){
echo "</br>";
echo "Warna rumah ini adalah " . "$warna_rumah";
echo "</br>";
echo "Merk TV nya ". $merk_tv;
}
public function getDetail(){
    echo $this->getRumah("bu aul","pink","samsung");
}

}
// project rumah 1
$rumah1 = new Rumah();
$rumah1->nanda = "nanda";
$rumah1->warna_rumah = "pink";
$rumah1->mb_convert_kana_tv = "Thosiba";
var_dump($rumah1);

echo "</br>";
echo "</br>";
// object 2
$rumah2 = new Rumah();
var_dump($rumah2);
