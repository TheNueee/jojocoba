<!-- Pada file ini kalian membuat coding untuk logika create / menambahkan mobil pada showroom -->

<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa

include("connect.php");
//  

// (2) Buatlah perkondisian untuk memeriksa apakah permintaan saat ini menggunakan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_mobil = $_POST["nama_mobil"];
    // b. Ambil data brand mobil
    $brand_mobil = $_POST["brand_mobil"];
    // c. Ambil data warna mobil
    $warna_mobil = $_POST["warna_mobil"];
    // d. Ambil data tipe mobil
    $tipe_mobil = $_POST["tipe_mobil"];
    // e. Ambil data harga mobil
    $harga_mobil = $_POST["harga_mobil"];

    $query = "INSERT INTO showroom_mobil( nama_mobil, brand_mobil, warna_mobil, tipe_mobil, harga_mobil) 
    VALUE(, '$nama_mobil', '$brand_mobil', '$warna_mobil', '$tipe_mobil', '$harga_mobil')";

    if($conn->query($query)== TRUE){
        echo"data berhasil diinput";
    }else{
        echo"gagal input";
    }


}

// 

// (3) Jika sudah coba deh kalian ambil data dari form (CLUE : pakai POST)
    
    // a. Ambil data nama mobil
    // $nama_mobil = $_POST["nama_mobil"];
    // // b. Ambil data brand mobil
    // $brand_mobil = $_POST["brand_mobil"];
    // // c. Ambil data warna mobil
    // $warna_mobil = $_POST["warna_mobil"];
    // // d. Ambil data tipe mobil
    // $tipe_mobil = $_POST["tipe_mobil"];
    // // e. Ambil data harga mobil
    // $harga_mobil = $_POST["harga_mobil"];
    // // (4) Kalau sudah, kita lanjut Query / Menambahkan data pada SQL (Disini ada perintah untuk SQL), Masukkan ke tabel showroom_mobil (include setiap nama column)
    // $query = mysqli_query($conn, "INSERT INTO showroom_mobil(id, nama_mobil, brand_mobil, warna_mobil, tipe_mobil, harga_mobil) VALUE('$id', '$nama_mobil', '$brand_mobil', '$warna_mobil', '$tipe_mobil', '$harga_mobil')");

    // (5) Buatkan kondisi jika eksekusi query berhasil
   
    // (6) Jika terdapat kesalahan, buatkan eksekusi query gagalnya 

// (7) Tutup koneksi ke database setelah selesai menggunakan database
    $conn -> close();
?>