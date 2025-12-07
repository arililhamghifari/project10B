<?php

// Fungsi sanitasi: Menggunakan htmlspecialchars untuk mencegah XSS
function bersihkan($data) {
    // Trim whitespace (sebaiknya ditambahkan)
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

// Mengambil dan membersihkan data input dari $_POST

// Sanitasi dasar (Input Text)
// Menggunakan operator null coalescing (??) untuk menangani kasus jika field tidak terkirim
$nim            = bersihkan($_POST['nim'] ?? '');
$nama           = bersihkan($_POST['nama'] ?? '');

// Sanitasi Umur (number): Membersihkan dan memastikan nilainya numerik
$umur           = filter_var($_POST['umur'] ?? 0, FILTER_SANITIZE_NUMBER_INT);
$tempat_lahir   = bersihkan($_POST['tempat_lahir'] ?? '');
$tanggal_lahir  = bersihkan($_POST['tanggal_lahir'] ?? '');

// Sanitasi No HP (hanya mempertahankan angka)
$no_hp_raw      = $_POST['no_hp'] ?? '';
$no_hp          = preg_replace("/[^0-9\+]/", "", $no_hp_raw); // Mempertahankan angka dan tanda +

$alamat         = bersihkan($_POST['alamat'] ?? '');

// Membersihkan Email dan melakukan validasi sederhana (baik untuk sanitasi)
$email          = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);

// Sanitasi kota (Select/Dropdown)
$kota = bersihkan($_POST['kota'] ?? '');

// Sanitasi jenis kelamin (radio): Menggunakan isset()
$jk = isset($_POST['jk']) ? bersihkan($_POST['jk']) : "-";

// Sanitasi status kawin (radio)
$status = isset($_POST['status']) ? bersihkan($_POST['status']) : "-";

// Sanitasi checkbox hobi
$hobi_list = [];
if (!empty($_POST['hobi']) && is_array($_POST['hobi'])) { 
    foreach ($_POST['hobi'] as $hobi) {
        $hobi_list[] = bersihkan($hobi);
    }
}
$hobi_output = implode(", ", $hobi_list); // Menggunakan ", " agar ada spasi

// Mendapatkan nilai Kota yang diformat
$kota_output = "Tidak Diketahui";
$allowed_cities = ["Semarang", "Solo", "Salatiga", "Kudus", "Pekalongan"]; 
// Menambahkan "Brebes" dan "Demak" seperti di logic PHP lama, meski tidak ada di form HTML yang Anda berikan
if (in_array($kota, $allowed_cities) || $kota == "Brebes" || $kota == "Demak") {
    $kota_output = $kota;
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Data POST</title>
    <!-- Link Google Font: Inter untuk tampilan modern -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Variabel CSS untuk kemudahan perubahan tema */
        :root {
            --primary-color: #007bffff; /* Hijau segar */
            --secondary-color: #f0f2f5; /* Latar belakang halaman */
            --card-bg: #ffffff;
            --text-color: #333;
            --light-text: #666;
            --shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--secondary-color);
            color: var(--text-color);
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: flex-start; /* Biarkan konten mulai dari atas */
            min-height: 100vh;
        }

        .container {
            background-color: var(--card-bg);
            padding: 30px;
            border-radius: 12px;
            box-shadow: var(--shadow);
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
        }

        h2 {
            color: var(--primary-color);
            text-align: center;
            margin-bottom: 30px;
            font-weight: 700;
            border-bottom: 2px solid var(--primary-color);
            padding-bottom: 10px;
        }

        /* Styling untuk setiap baris data */
        .data-row {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px dashed #e0e0e0;
            font-size: 1rem;
        }

        .data-row:last-child {
            border-bottom: none;
        }

        .data-label {
            font-weight: 600;
            color: var(--text-color);
            flex-basis: 40%; /* Mengatur lebar label */
        }

        .data-value {
            color: var(--light-text);
            text-align: right;
            flex-basis: 60%; /* Mengatur lebar nilai */
            word-wrap: break-word; /* Memastikan teks panjang tidak meluber */
        }
        
        /* Penanganan khusus untuk Alamat agar nilai tidak terlalu ke kanan */
        .data-row.alamat .data-value {
            text-align: left;
            padding-top: 5px;
            font-style: italic;
        }
        
        .data-row.alamat {
            flex-direction: column;
        }
        
        /* Responsif: Di layar yang sangat kecil, ubah tata letak alamat */
        @media (max-width: 480px) {
            .data-row {
                flex-direction: column;
                align-items: flex-start;
                gap: 5px;
            }

            .data-value {
                text-align: left;
                width: 100%;
                font-size: 0.95rem;
            }
        }
        
    </style>
    <div class="container">
    <h2>HASIL INPUT DATA MAHASISWA</h2>

    <div class="data-row">
        <span class="data-label">NIM:</span>
        <span class="data-value"><?= $nim ?></span>
    </div>

    <div class="data-row">
        <span class="data-label">Nama:</span>
        <span class="data-value"><?= $nama ?></span>
    </div>

    <div class="data-row">
        <span class="data-label">Umur:</span>
        <span class="data-value"><?= $umur ?> tahun</span>
    </div>

    <div class="data-row">
        <span class="data-label">Tempat Lahir:</span>
        <span class="data-value"><?= $tempat_lahir ?></span>
    </div>

    <div class="data-row">
        <span class="data-label">Tanggal Lahir:</span>
        <span class="data-value"><?= $tanggal_lahir ?></span>
    </div>

    <div class="data-row">
        <span class="data-label">No HP:</span>
        <span class="data-value"><?= $no_hp ?></span>
    </div>

    <div class="data-row alamat">
        <span class="data-label">Alamat:</span>
        <span class="data-value"><?= nl2br($alamat) ?></span>
    </div>

    <div class="data-row">
        <span class="data-label">Email:</span>
        <span class="data-value"><?= $email ?></span>
    </div>
    
    <div class="data-row">
        <span class="data-label">Kota:</span>
        <span class="data-value"><?= $kota_output ?></span>
    </div>

    <div class="data-row">
        <span class="data-label">Jenis Kelamin:</span>
        <span class="data-value"><?= $jk ?></span>
    </div>

    <div class="data-row">
        <span class="data-label">Status:</span>
        <span class="data-value"><?= $status ?></span>
    </div>

    <div class="data-row">
        <span class="data-label">Hobi:</span>
        <span class="data-value"><?= empty($hobi_output) ? "Tidak Ada Hobi Dipilih" : $hobi_output ?></span>
    </div>

</div>
</head>
<body>