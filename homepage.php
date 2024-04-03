<!DOCTYPE html>
<html>
<head>
    <title>WEBSITE PRIBADI</title>
</head>
<body>
    <h2>HOME</h2>
    <form action="hasil.php" method="post">
    NIM: <input type="text" name="nim" value="NIM"> <br> 
    NAMA: <input type="text" name="nama" value="NAMA"> <br> 
    JENIS KELAMIN :
    <input type="radio" name="jenis_kelamin" value="laki-laki" checked=""> Laki - Laki
    <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan <br>
    <br> ASAL:
    <select name="asal">
        <option value="SUMATERA SELATAN">SUMATERA SELATAN</option>
        <option value="SULAWESI UTARA">SULAWESI UTARA</option>
        <option value="SUMATERA BARAT">SUMATERA BARAT</option>
    </select> <br>
    HOBBY :
    <input type="checkbox" name="hobby" value="FUTSAL"> FUTSAL
    <input type="checkbox" name="hobby" value="MEMBACA"> MEMBACA
    <input type="checkbox" name="hobby" value="BERENANG"> BERENANG <br> 
    <br> DESKRIPSI DIRI: <br>
    <textarea name="deskripsi_diri" rows="5" cols="20"> Ketikan deskripsi anda disini</textarea> <br>

    <input type="submit" value="OK">
    <input type="reset" value="RESET" id="resetButton">
</form>
</body>
</html>
