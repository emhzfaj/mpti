<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container-login {
    display: flex;
    justify-content: space-between;
}

.form-section {
    width: calc(50% - 10px);
    padding: 20px;
    border-radius: 5px;
}

.left-section {
    background-color: #f9f9f9;
}

.right-section {
    background-color: #ffffff;
}

    </style>
</head>
<body>
<body>
    <div class="container-login">
        <div class="form-section left-section">
            <h2>Daftar Bimbel</h2>
            <form action="pendaftaran.php" method="POST">
                <!-- Left Section Fields -->
                <input type="text" name="nama" placeholder="Masukkan Nama Lengkap Anda" required><br>
                <input type="text" name="email" placeholder="Masukkan Email Anda" required><br>
                <input type="text" name="nomor" placeholder="Masukkan Nomor Anda (+62)" required><br>
                <input type="text" name="asal" placeholder="Asal Sekolah anda" required><br>
                <input type="date" name="tanggal" placeholder="tanggal" required><br>
                <input type="text" name="kota" placeholder="Kota Kabupaten" required><br>
            </form>
        </div>
        <div class="form-section right-section">
            <div class="dropdown-input">
                <!-- Right Section Fields -->
                <select name="semester" required>
                    <option value="">Pilih Semester Anda</option>
                    <option value="ganjil">Ganjil</option>
                    <option value="genap">Genap</option>
                </select>
                <select name="tahun" required>
                    <option value="">Pilih Tahun Ajaran</option>
                    <option value="tk">TK</option>
                    <option value="sd">SD</option>
                    <option value="smp">SMP</option>
                </select>
            </div>
            <div class="dropdown-input">
                <select name="program" required>
                    <option value="">Pilih Program Bimbel</option>
                    <option value="program1">Program 1</option>
                    <option value="program2">Program 2</option>
                    <option value="program3">Program 3</option>
                </select>
            </div>
            <input type="text" name="ortu" placeholder="Masukkan Nama Orang Tua" required><br>
            <input type="text" name="ortunomor" placeholder="Nomor Orang Tua" required><br>
            <input type="submit" value="Daftar Bimbel">
        </div>
    </div>
</body>

</body>
</html>