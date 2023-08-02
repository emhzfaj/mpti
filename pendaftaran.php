<!DOCTYPE html>
<html>
<head>
    <title>Daftar Bimbel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 0px;
            margin: 0px;
        }
        
        header {
            background-color: #FEBD59;
            padding: 10px;
        }
        
        .logo {
            width: 150px;
            height: auto;

        }
        
        .container-login {
            margin-top: 20px;
            width: 300px;
            padding: 20px;
            border-radius: 5px;
            display: inline-block;
            align-items: center;
        }
        
        .container-login h2 {
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 5px;
        }
        .container-login input[type="date"] {
  width: 100%;
  height: 30px;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  text-align: center;
  border-radius: 25px;
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
}

        .container-login input[type="text"],
        .container-login input[type="password"] {
            width: 300px;
            height:30px;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            text-align: center;
            border-radius: 25px;
        }
        
        .container-login input[type="submit"] {
            background-color: #DB2721;
            color: #ffffff;
            border: none;
            cursor: pointer;
            width: 130px;
            padding: 10px;
            border-radius: 5px;
        }
        .prompt-container {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 10px;
}
.dropdown-input {
  position: relative;
}

.dropdown-input select {
  width: 320px;
  height: 50px;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  text-align: center;
  border-radius: 25px;
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
}

.dropdown-input select::-ms-expand {
  display: none;
}

.dropdown-input::after {
  widht: 300px;
  position: absolute;
  top: 50%;
  right: 10px;
  transform: translateY(-50%);
  pointer-events: none;
}


    </style>
    <nav>
        <header>
            <img src="images/header.svg" alt="Logo" class="logo">
        </header>
    </nav>
</head>
<body>
    <div class="container-login">
        <h2>Daftar Bimbel</h2>
        <form action="pendaftaran.php" method="POST">
            <input type="text" name="nama" placeholder="Masukkan Nama Lengkap Anda" required><br>
            <input type="text" name="email" placeholder="Masukkan Email Anda" required><br>
            <input type="text" name="nomor" placeholder="Masukkan Nomor Anda (+62)" required><br>
            <input type="text" name="asal" placeholder="Asal Sekolah anda" required><br>
            
            <input type="date" name="tanggal" placeholder="tanggal" required><br>
            <input type="text" name="kota" placeholder="Kota Kabupaten" required><br>
            <div class="dropdown-input">
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
            <input type="text" name="ortu" placeholder="Masukan Nama Orang Tua" required><br>
            <input type="text" name="ortunomor" placeholder="Nomor Orang Tua" required><br>
            <input type="submit" value="Daftar Bimbel">
        </form>

        <?php
// Enable output buffering at the very beginning
ob_start();

// Include the database connection file
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['nama'];
    $email = $_POST['email'];
    $phone = $_POST['nomor'];
    $school = $_POST['asal'];
    $birthdate = $_POST['tanggal'];
    $semester = $_POST['semester'];
    $city = $_POST['kota'];
    $parentName = $_POST['ortu'];
    $parentPhone = $_POST['ortunomor'];
    $program = $_POST['program'];

    // Validate the form data (e.g., check for empty fields, validate email format, etc.)
    // ...

    // Insert data into the tdaftar table
    $sql = "INSERT INTO tdaftar (nama, email, no_hp, asal_sekolah, tgl_lahir, semester, domisili, program_bimbel, nama_ortu, no_hp_ortu) 
            VALUES ('$name', '$email', '$phone', '$school', '$birthdate', '$semester', '$city', '$program', '$parentName', '$parentPhone')";

    if (mysqli_query($conn, $sql)) {
        // Registration successful
        mysqli_close($conn);

        // Redirect to a success page or display a success message using JavaScript
        echo '<script>alert("Registration successful. Redirecting to index.php..."); 
              window.location.href = "index.php";</script>';
        exit();
    } else {
        // Registration failed
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);

// Flush the output buffer and send it to the browser
ob_end_flush();
?>
    </div>
</body>
</html>