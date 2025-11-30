<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Input GET</title>
</head>
<body>
    <h2>Data yang DikiriM dengan Metode GET</h2>
    <?php 
        echo "NIM : " . $_GET['nim'] . "<br>";
        echo "Nama : " . $_GET['nama'] . "<br>";
        echo "Tempat Lahir : " . $_GET['tempat_lahir'] . "<br>";
        echo "Tanggal Lahir : " . $_GET['tanggal_lahir'] . "<br>";
        echo "Alamat : " . $_GET['alamat'] . "<br>";

        // Menampilkan Kota menggunakan IF
        $kota = $_GET['kota'];

        if ($kota == "Semarang") {
            echo "Kota : Semarang<br>";
        } elseif ($kota == "Solo") {
            echo "Kota : Solo<br>";
        } elseif ($kota == "Salatiga") {
            echo "Kota : Salatiga<br>";
        } elseif ($kota == "Kudus") {
            echo "Kota : Kudus<br>";
        } else {
            echo "Kota : Pekalongan<br>";
        }

        // Menampilkan Jenis Kelamin menggunakan IF
        $jk = $_GET['jk'];

        if ($jk == "Laki-Laki") {
            echo "Jenis Kelamin : Laki-Laki<br>";
        } else {
            echo "Jenis Kelamin : Perempuan<br>";
        }

        echo "Email : " . $_GET['email'] . "<br>";
        echo "No Hp : " . $_GET['nh'] . "<br>";
        echo "Umur : " . $_GET['umur'] . "<br>";

        // Menampilkan Status menggunakan IF
        $status = $_GET['status'];

        if ($status == "Kawin") {
            echo "Status : Kawin<br>";
        } else {
            echo "Status : Belum Kawin<br>";
        }

        // Menampilkan Hobi menggunakan IF
        $hobi = $_GET['hobi'];

        if ($hobi == "Membaca") {
            echo "Hobi : Membaca<br>";
        } elseif ($hobi == "OlahRaga") {
            echo "Hobi : Olah Raga<br>";
        } elseif ($hobi == "Musik") {
            echo "Hobi : Musik<br>";
        } elseif ($hobi == "Traveling") {
            echo "Hobi : Traveling<br>";
        }

    ?>
</body>
</html>