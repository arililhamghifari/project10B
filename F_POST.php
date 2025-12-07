<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Mahasiswa - Responsive</title>
    <!-- Link Google Font: Inter untuk tampilan modern -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* CSS Reset dan Font Global */
        :root {
            --primary-color: #007bffff; /* Biru cerah */
            --secondary-color: #f8f9fa; /* Abu-abu muda/latar belakang */
            --text-color: #333;
            --border-color: #ced4da;
            --shadow-light: 0 4px 6px rgba(0, 0, 0, 0.1);
            --transition-speed: 0.3s;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--secondary-color);
            color: var(--text-color);
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            box-sizing: border-box;
        }

        /* Styling Kontainer Form */
        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: var(--shadow-light);
            width: 100%;
            max-width: 800px;
        }

        h2 {
            color: var(--primary-color);
            text-align: center;
            margin-bottom: 25px;
            font-weight: 700;
        }

        /* Styling Form dan Grouping */
        form {
            display: grid;
            grid-template-columns: 1fr; /* Default: Satu kolom untuk mobile */
            gap: 20px;
        }

        /* Media Query untuk Desktop/Tablet: Dua Kolom */
        @media (min-width: 640px) {
            form {
                grid-template-columns: repeat(2, 1fr);
            }
            /* Alamat dan Hobi mengambil penuh lebar */
            .form-group.full-width {
                grid-column: 1 / -1;
            }
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        label {
            font-weight: 600;
            margin-bottom: 5px;
            font-size: 0.95rem;
        }

        /* Styling Input, Textarea, dan Select */
        input:not([type="radio"]):not([type="checkbox"]),
        textarea,
        select {
            padding: 10px 12px;
            border: 1px solid var(--border-color);
            border-radius: 6px;
            font-size: 1rem;
            width: 100%;
            box-sizing: border-box;
            transition: border-color var(--transition-speed), box-shadow var(--transition-speed);
        }

        input:focus,
        textarea:focus,
        select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.25);
            outline: none;
        }

        /* Styling Radio dan Checkbox Groups */
        .radio-group, .checkbox-group {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .option-item {
            display: inline-flex;
            align-items: center;
            cursor: pointer;
        }

        /* Styling Checkbox/Radio Input tersembunyi */
        input[type="radio"], input[type="checkbox"] {
            margin-right: 5px;
            /* Opsional: Kustomisasi tampilan radio/checkbox */
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            width: 18px;
            height: 18px;
            border: 2px solid var(--border-color);
            border-radius: 4px;
            outline: none;
            cursor: pointer;
            transition: border-color var(--transition-speed), background-color var(--transition-speed);
        }

        input[type="radio"] {
            border-radius: 50%; /* Bulat untuk radio */
        }

        input[type="radio"]:checked, input[type="checkbox"]:checked {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        input[type="radio"]:checked::before {
            content: '';
            display: block;
            width: 8px;
            height: 8px;
            margin: 3px;
            border-radius: 50%;
            background: white;
        }

        input[type="checkbox"]:checked::before {
            content: '✓';
            display: block;
            color: white;
            font-size: 14px;
            line-height: 15px;
            text-align: center;
        }


        /* Styling Tombol Submit */
        .submit-group {
            grid-column: 1 / -1; /* Ambil penuh lebar di semua ukuran */
            text-align: center;
            margin-top: 10px;
        }

        input[type="submit"] {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color var(--transition-speed), transform 0.1s;
            box-shadow: 0 4px 8px rgba(0, 123, 255, 0.3);
        }

        input[type="submit"]:hover {
            background-color: #0056b3; /* Warna lebih gelap saat hover */
        }

        input[type="submit"]:active {
            transform: translateY(1px); /* Efek tekan */
        }

    </style>
</head>
<body>
    <div class="form-container">
        <h2>FORM INPUT DATA MAHASISWA</h2>
        <form action="proses_post_sanitasi.php" method="POST">
            
            <div class="form-group">
                <label for="nim">NIM:</label>
                <input type="text" name="nim" id="nim" maxlength="14" required>
            </div>

            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" pattern="[A-Za-z\s]+" title="Nama hanya boleh berisi huruf dan spasi" required>
            </div>

            <div class="form-group">
                <label for="umur">Umur:</label>
                <input type="number" name="umur" title="Umur hanya boleh berisi angka" required>
            </div>

            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir:</label>
                <input type="text" name="tempat_lahir">
            </div>

            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" name="tanggal_lahir">
            </div>

            <div class="form-group">
                <label for="no_hp">No Hp:</label>
                <input type="text" name="no_hp">
            </div>
            
            <div class="form-group full-width">
                <label for="alamat">Alamat:</label>
                <textarea name="alamat" id="alamat" rows="4"></textarea>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email">
            </div>

            <div class="form-group">
                <label for="kota">Kota:</label>
                <select name="kota" id="kota">
                    <option>Semarang</option>
                    <option>Solo</option>
                    <option>Salatiga</option>
                    <option>Kudus</option>
                    <option>Pekalongan</option>
                </select>
            </div>

            <!-- Jenis Kelamin Group -->
            <div class="form-group">
                <label>Jenis Kelamin:</label>
                <div class="radio-group">
                    <label class="option-item">
                        <input type="radio" name="jk" value="Laki-Laki"> Laki-Laki
                    </label>
                    <label class="option-item">
                        <input type="radio" name="jk" value="Perempuan"> Perempuan
                    </label>
                </div>
            </div>

            <!-- Status Group -->
            <div class="form-group">
                <label>Status:</label>
                <div class="radio-group">
                    <label class="option-item">
                        <input type="radio" name="status" value="Kawin"> Kawin
                    </label>
                    <label class="option-item">
                        <input type="radio" name="status" value="BelumKawin"> Belum Kawin
                    </label>
                </div>
            </div>
            
            <!-- Hobi Group (Full Width) -->
            <div class="form-group full-width">
                <label>Hobi:</label>
                <div class="checkbox-group">
                    <label class="option-item">
                        <input type="checkbox" name="hobi[]" value="Membaca"> Membaca
                    </label>
                    <label class="option-item">
                        <input type="checkbox" name="hobi[]" value="OlahRaga"> Olah Raga
                    </label>
                    <label class="option-item">
                        <input type="checkbox" name="hobi[]" value="Musik"> Musik
                    </label>
                    <label class="option-item">
                        <input type="checkbox" name="hobi[]" value="Traveling"> Traveling
                    </label>
                </div>
            </div>

            <div class="submit-group">
                <input type="submit" value="Kirim Data">
            </div>
        </form>
    </div>

    <script>
        // Logika JavaScript untuk format NIM
        document.getElementById('nim').addEventListener('input', function () {
            let nilai = this.value.replace(/\./g, ''); // hapus titik sementara

            // Batasi hanya huruf dan angka
            nilai = nilai.replace(/[^a-zA-Z0-9]/g, '');

            let hasil = '';

            // Tambah titik setelah 3 karakter
            if (nilai.length > 3) {
                hasil += nilai.substring(0, 3) + '.';
                // Setelah titik pertama, lanjutkan
                if (nilai.length > 7) {
                    hasil += nilai.substring(3, 7) + '.';
                    hasil += nilai.substring(7, 12); // total 5 angka terakhir
                } else {
                    hasil += nilai.substring(3);
                }
            } else {
                hasil = nilai;
            }

            this.value = hasil.substring(0, 14); // batasi maksimal 14 karakter
        });
    </script>

</body>
</html>