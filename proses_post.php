<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Input POST</title>
</head>
<body>
    <h2>Data yang DikiriM dengan Metode POST</h2>
    <?php 
        echo "NIM : " . $_POST['nim'] . "<br>";
        echo "Nama : " . $_POST['nama'] . "<br>";
        echo "Tempat Lahir : " . $_POST['tempat_lahir'] . "<br>";
        echo "Tanggal Lahir : " . $_POST['tanggal_lahir'] . "<br>";
        echo "Alamat : " . $_POST['alamat'] . "<br>";

        // Menampilkan Kota menggunakan IF
        $kota = $_POST['kota'];

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
        $jk = $_POST['jk'];

        if ($jk == "Laki-Laki") {
            echo "Jenis Kelamin : Laki-Laki<br>";
        } else {
            echo "Jenis Kelamin : Perempuan<br>";
        }

        echo "Email : " . $_POST['email'] . "<br>";
        echo "No Hp : " . $_POST['nh'] . "<br>";
        echo "Umur : " . $_POST['umur'] . "<br>";

        // Menampilkan Status menggunakan IF
        $status = $_POST['status'];

        if ($status == "Kawin") {
            echo "Status : Kawin<br>";
        } else {
            echo "Status : Belum Kawin<br>";
        }

        // Menampilkan Hobi menggunakan IF
        $hobi = $_POST['hobi'];

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