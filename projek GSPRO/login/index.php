<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSPro - Halaman Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kotak">
        <h2>GSPRO SMK JP 1</h2>
        <h3>Login your account</h3>
        <form action="process.php" method="POST">        
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control">
            <button type="submit" class="btn-login">Login</button>
        </form>
    </div>
</body>
</html>