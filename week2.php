<!-- panggil file atas atau header -->
<?php
include 'atas.php';
?>

<br>
<br>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<form method="POST" action="week2.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Customer</label> 
    <div class="col-6">
      <input id="nama" name="nama" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
        <label for="produk_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-4">
      <input id="jumlah" name="jumlah" type="number" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-success">Kirim</button>
    </div>
  </div>
</form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari form pemesanan
    $customer = $_POST["nama"];
    $product = $_POST["produk"];
    $quantity = $_POST["jumlah"];

    // Menghitung total belanja produk

    switch ($product) {
        case "TV":
            $price = 4200000;
            break;
        case "Kulkas":
            $price = 3100000;
            break;
        case "Mesin Cuci":
            $price = 3800000;
            break;
        default:
            $price = 0;
    }

    $total = $price * $quantity;

    
    echo "<h5>Hasil Belanja</h5>";
    echo "<p>Nama Customer: $customer</p>";
    echo "<p>Produk Pilihan: $product</p>";
    echo "<p>Jumlah Beli: $quantity</p>";
    echo "<p>Total Belanja: Rp " . number_format($total, 0, ',', '.') . "</p>";
}
?>
<!-- panggil file bawah atau footer -->
<?php
include 'bawah.php';
?>
