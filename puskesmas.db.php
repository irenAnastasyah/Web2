<?php
// Koneksi ke database
$host = "localhost";
$username = "iren_anastasyah";
$password = ""; //kosongkan
$database = "Dbpuskesmas";

$conn = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else {
    echo "Koneksi berhasil";
}

// tabel pasien
$sql_pasien = "CREATE TABLE IF NOT EXISTS pasien (
    id_pasien INT AUTO_INCREMENT PRIMARY KEY,
    nama_depan VARCHAR(50) NOT NULL,
    nama_belakang VARCHAR(50),
    jenis_kelamin ENUM('Laki-laki', 'Perempuan') NOT NULL,
    tempat_lahir VARCHAR(100),
    tanggal_lahir DATE,
    alamat VARCHAR(255) NOT NULL,
    kelurahan VARCHAR(100),
    kecamatan VARCHAR(100),
    kota VARCHAR(100),
    provinsi VARCHAR(100),
    kode_pos VARCHAR(10),
    no_telepon VARCHAR(15),
    email VARCHAR(100),
    golongan_darah ENUM('A', 'B', 'AB', 'O'),
    agama VARCHAR(50),
    pekerjaan VARCHAR(100),
    nik VARCHAR(20),
    no_kartu_bpjs VARCHAR(50),
    tanggal_pendaftaran DATE
)";



if ($conn->query($sql_pasien) === TRUE) {
    echo "Tabel pasien berhasil dibuat<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

// tabel dokter
$sql_dokter = "CREATE TABLE IF NOT EXISTS dokter (
    id_dokter INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    spesialisasi VARCHAR(100),
    jenis_kelamin ENUM('Laki-laki', 'Perempuan') NOT NULL,
    no_telepon VARCHAR(15),
    tanggal_masuk DATE
)";

if ($conn->query($sql_dokter) === TRUE) {
    echo "Tabel dokter berhasil dibuat<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

// tabel rekam medis
$sql_rekam_medis = "CREATE TABLE IF NOT EXISTS rekam_medis (
    id_rekam_medis INT AUTO_INCREMENT PRIMARY KEY,
    id_pasien INT,
    id_dokter INT,
    tanggal_kunjungan DATE,
    keluhan TEXT,
    diagnosa TEXT,
    resep_obat TEXT,
    FOREIGN KEY (id_pasien) REFERENCES pasien(id_pasien),
    FOREIGN KEY (id_dokter) REFERENCES dokter(id_dokter)
)";

if ($conn->query($sql_rekam_medis) === TRUE) {
    echo "Tabel rekam medis berhasil dibuat<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

// tabel pemeriksaan
$sql_pemeriksaan = "CREATE TABLE IF NOT EXISTS pemeriksaan (
    id_pemeriksaan INT AUTO_INCREMENT PRIMARY KEY,
    id_rekam_medis INT,
    jenis_pemeriksaan VARCHAR(100),
    hasil_pemeriksaan TEXT,
    FOREIGN KEY (id_rekam_medis) REFERENCES rekam_medis(id_rekam_medis)
)";

if ($conn->query($sql_pemeriksaan) === TRUE) {
    echo "Tabel pemeriksaan berhasil dibuat<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

// Menutup koneksi
$conn->close();
?>
