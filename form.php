<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
    <form method="POST " action="hasil.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Masukan Nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Matkul" class="col-4 col-form-label">Mata Kulia</label> 
    <div class="col-8">
      <select id="Matkul" name="Matkul" class="custom-select">
        <option value="DDP">Dasar-Dasar Pembrograman</option>
        <option value="WEB">Pembrograman Web</option>
        <option value="BASDAT">Basisdata</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="uts" name="uts" placeholder="Ulangan Tengah Semester" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="uas" name="uas" placeholder="Ulangan Ahir Semester" type="text" class="form-control">
    </div>
  </div> <div class="form-group row">
    <label for="Praktikum" class="col-4 col-form-label">praktikum</label> 
    <div class="col-8">
      <input id="Praktikum" name="Praktikum" placeholder="Praktikum" type="text" class="form-control">
    </div>
 <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" value="Data Berhasil Disimpan" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
    </div>
</body>
</html>
<hr>
<h3>Hasil Inputan Form :</h3>


