<?php

// Pastikan formulir telah dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai yang dikirimkan dari formulir
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $no_telepon = $_POST['no_telepon'];

    // Melakukan koneksi ke database
    $host = "localhost"; // Sesuaikan dengan host database Anda
    $username = "iren_anastasyah"; // Sesuaikan dengan username database Anda
    $password = ""; // Sesuaikan dengan password database Anda
    $database = "Dbpuskesmas"; // Sesuaikan dengan nama database Anda
    $conn = new mysqli($host, $username, $password, $database);
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Menyiapkan dan menjalankan kueri SQL untuk menyimpan data pasien ke dalam tabel 'pasien'
    $sql = "INSERT INTO pasien (nama_depan, tanggal_lahir, alamat, no_telepon) 
            VALUES ('$nama', '$tanggal_lahir', '$alamat', '$no_telepon')";

    if ($conn->query($sql) === TRUE) {
        echo "Pendaftaran pasien baru berhasil.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Menutup koneksi database
    $conn->close();
} else {
    // Jika formulir tidak dikirimkan, tampilkan pesan kesalahan
    echo "Error: Formulir tidak dikirimkan.";
}

?>


