<!DOCTYPE html>
<html>
<head>
    <title>Output Data</title>
</head>
<body>
    <h2>Output Data</h2>
    <?php
    // Memeriksa apakah ada data yang dikirimkan
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mendapatkan nilai yang dikirimkan melalui form
        $nim = $_POST["nim"];
        $nama = $_POST["nama"];
        $jenis_kelamin = $_POST["jenis_kelamin"];
        $asal = $_POST["asal"];
        $hobby = $_POST["hobby"];
        $deskripsi_diri = $_POST["deskripsi_diri"];
        
        // Menampilkan data yang diterima
        echo "nim: " . $nim . "<br>";
        echo "nama: " . $nama . "<br>";
        echo "jenis_kelamin: " . $jenis_kelamin . "<br>";
        echo "asal: " . $asal . "<br>";
        echo "hobby: " . $hobby . "<br>";
        echo "deskripsi_diri: " . $deskripsi_diri . "<br>";
    } else {
        // Jika tidak ada data yang dikirimkan, tampilkan pesan
        echo "Tidak ada data yang diterima.";
    }
    ?>
</body>
</html>
