<?php 
session_start();
require '../koneksi.php';

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu')
        window.location = '../login/index.php';
    </script>
    ";
}

?>

<?php require '../layout/sidebar.php'?>

<div class="main">
    <h2>Halo selamat datang di GSPRO SMK Jakarta Pusat 1</h2>
</div>