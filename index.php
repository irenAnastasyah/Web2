<!-- panggil file atas atau header -->
<?php
include 'atas.php';
?>

      <!-- Main Content -->
      <br>
      <br>
      <br>
      <br>
      <br>
      <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        h1 {
            color: #333;
        }
        p {
            margin-bottom: 10px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Pemrograman Web2</h1>
        <p>PHP (Hypertext Preprocessor) adalah bahasa skrip sisi server yang paling umum digunakan untuk pengembangan web. Berikut beberapa poin penting tentang PHP:</p>
        
        <h2>Fungsi Utama PHP:</h2>
        <ul>
            <li><strong>Pembuatan Halaman Web Dinamis:</strong> PHP memungkinkan pembuatan halaman web yang berubah sesuai dengan permintaan pengguna. Dengan PHP, Anda dapat menampilkan konten yang berbeda berdasarkan kondisi tertentu atau data yang berasal dari database.</li>
            <li><strong>Interaksi dengan Database:</strong> PHP sering digunakan untuk mengambil, menyimpan, dan mengubah data di database. Ini memungkinkan pengembangan aplikasi web yang kuat dan dinamis dengan kemampuan manajemen data yang baik.</li>
            <li><strong>Pengolahan Formulir:</strong> PHP dapat digunakan untuk mengirim dan menerima data dari formulir HTML. Data yang dikirimkan melalui formulir dapat diproses menggunakan PHP untuk validasi, pengolahan, dan penyimpanan.</li>
            <li><strong>Interaksi dengan File:</strong> PHP dapat digunakan untuk membaca, menulis, dan mengelola file di server. Ini dapat berguna untuk membuat aplikasi yang melibatkan manipulasi file, seperti upload dan download file.</li>
        </ul>
        
        <h2>Penyisipan PHP dalam HTML:</h2>
        <p>PHP dapat disisipkan langsung ke dalam kode HTML menggunakan tanda `<?php` dan `?>`. Ini memungkinkan Anda untuk membuat halaman web dinamis dengan menambahkan logika PHP ke dalam kode HTML.</p>
        
        <h2>Framework dan Library PHP:</h2>
        <p>Di dunia PHP, terdapat berbagai framework dan library yang mempercepat pengembangan aplikasi web dengan menyediakan struktur, fungsi, dan komponen siap pakai. Contoh-framework populer termasuk Laravel, Symfony, CodeIgniter, dan banyak lagi.</p>
    </div>
</body>
</html>

    <!-- panggil file bawah atau footer -->
    <?php
    include 'bawah.php';
?>