<!-- Pada file ini kalian membuat coding untuk logika create / menambahkan mobil pada showroom -->
<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include("connect.php");

// 

// (2) Buatlah perkondisian untuk memeriksa apakah permintaan saat ini menggunakan metode POST
if (isset($_POST['nama_mobil'])) {
    echo "memakai method POST";
} else {
    echo "bukan memakai method POST";
}

// 

// (3) Jika sudah coba deh kalian ambil data dari form (CLUE : pakai POST)

    // a. Ambil data nama mobil
    $nama_mobil = $_POST['nama_mobil'];
    // b. Ambil data brand mobil
    $brand_mobil = $_POST['brand_mobil'];
    // c. Ambil data warna mobil
    $warna_mobil = $_POST['warna_mobil'];
    // d. Ambil data tipe mobil
    $tipe_mobil = $_POST['tipe_mobil'];
    // e. Ambil data harga mobil
    $harga_mobil = $_POST['harga_mobil'];
    // (4) Kalau sudah, kita lanjut Query / Menambahkan data pada SQL (Disini ada perintah untuk SQL), Masukkan ke tabel showroom_mobil (include setiap nama column)
    $query = "INSERT INTO showroom_mobil(nama_mobil, brand_mobil, warna_mobil, tipe_mobil, harga_mobil) VALUES ('$nama_mobil', '$brand_mobil', '$warna_mobil', '$tipe_mobil', '$harga_mobil')";
    // (5) Buatkan kondisi jika eksekusi query berhasil
    if ($conn -> query ($query) === true) {
        echo "
        <script>
        alert ('Data berhasil ditambahkan');
        document.location.href = 'form_create_mobil.php'
        </script>";
    }
    // (6) Jika terdapat kesalahan, buatkan eksekusi query gagalnya 
    else {
        echo "
        <script>
        alert ('Data gagal ditambahkan');
        document.location.href = 'form_create_mobil.php'
        </script>";
    }
// (7) Tutup koneksi ke database setelah selesai menggunakan database
    mysqli_close($conn);
?>