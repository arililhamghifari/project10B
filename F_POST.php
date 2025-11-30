<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data (POST)</title>
</head>
<body>
    <h2>Form Input Data Mahasiswa - POST</h2>
    <form action="proses_get.php" method="GET">
        NIM : <input type="text" name="nim"><br><br>
        Nama : <input type="text" name="nama"><br><br>
        Tempat Lahir : <input type="text" name="tempat_lahir"><br><br>
        Tanggal Lahir : <input type="date" name="tanggal_lahir"><br><br>
        Alamat : <br>
        <textarea name="alamat" cols="30" rows="4"></textarea><br><br>
        Kota :
        <select name="kota">
            <option>Semarang</option>
            <option>Solo</option>
            <option>Salatiga</option>
            <option>Kudus</option>
            <option>Pekalongan</option>
        </select><br><br>
        Jenis Kelamin :
        <input type="radio" name="jk" value="Laki-Laki"> Laki-Laki
        <input type="radio" name="jk" value="Perempuan"> Perempuan
        <br><br>
        Email : <input type="email" name="email"><br><br>
        No Hp : <input type="text" name="nh"><br><br>
        Umur : <input type="text" name="umur"><br><br>
        Status : 
        <input type="radio" name="status" value="Kawin"> Kawin
        <input type="radio" name="status" value="BelumKawin"> Belum Kawin <br> <br>
        Hobi : <br> 
        <input type="checkbox" name="hobi" value="Membaca"> Membaca <br>
        <input type="checkbox" name="hobi" value="OlahRaga"> Olah Raga <br>
        <input type="checkbox" name="hobi" value="Musik"> Musik <br>
        <input type="checkbox" name="hobi" value="Traveling"> Traveling <br><br>
        <input type="submit" value="kirim">
    </form>
</body>
</html>