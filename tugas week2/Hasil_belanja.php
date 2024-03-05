<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer = $_POST['customer'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];
    $Total = $_POST['Total'];

    echo "Customer: " . "iren anastasyah" . "<br>";
    echo "Produk Pilihan: " ."TV" . "<br>";
    echo "Jumlah Beli: " . "1" . "<br>";
    echo "Total: " . "Rp4.200.000" . "<br>";
}
?>