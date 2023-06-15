<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
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
            margin-top: 150px;
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
        
        .container-login input[type="text"],
        .container-login input[type="password"] {
            width: 100%;
            height:30px;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            text-align: center;
            border-radius: 25px;
        }
        
        .container-login input[type="submit"] {
            background-color: #4caf50;
            color: #ffffff;
            border: none;
            cursor: pointer;
            width: 100px;
            padding: 10px;
            border-radius: 5px;
        }
        .prompt-container {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 10px;
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
        <h2>Daftar Akun</h2>
        <form action="/register" method="POST">
            <input type="text" name="nama" placeholder="Masukkan Nama Lengkap Anda" required><br>
            <input type="password" name="nomor" placeholder="Masukkan Nomor Anda (+62)" required><br>
            <input type="text" name="email" placeholder="Masukkan Username" required><br>
            <input type="password" name="password" placeholder="Masukkan Kata Sandi" required><br>
            <input type="password" name="passkonfirm" placeholder="Konfirmasi Kata Sandi" required><br>
            <input type="submit" value="Daftar">
        </form>
        <div class="prompt-container">
            <p>Sudah Punya Akun?</p>
            <a href="login.php" class="prompt">Login</a>
        </div>
    </div>
</body>
</html>
