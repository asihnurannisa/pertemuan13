<?php
include 'koneksi.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

$id = $_GET['id'];
if (isset($_POST['submit'])) {
    $tanggal_pinjam = $_POST['tanggal_pinjam'];
    $durasi = $_POST['durasi'];
    $username = $_SESSION['username'];

    $query = "INSERT INTO transaksi (id_kendaraan, username, tanggal_sewa, durasi) 
              VALUES ($id, '$username', '$tanggal_pinjam', $durasi)";
    mysqli_query($koneksi, $query);
    echo "<p style='text-align: center; color: green;'>Booking berhasil!</p>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Mobil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <div class="navbar">
            <h1>PT Bendi Car</h1>
            <nav>
                <ul>
                <li><a href="dashboard.php">Home</a></li>
                    <li><a href="mobil.php">Daftar Mobil</a></li>
                    <li><a href="booking.php">Booking</a></li>
                    <li><a href="kontak.php">Kontak</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <h2>Form Booking Mobil</h2>
        <form action="" method="post">
            <label>Tanggal Sewa:</label>
            <input type="date" name="tanggal_sewa" required>
            <label>Durasi (hari):</label>
            <input type="number" name="durasi" required>
            <button type="submit" name="submit">Booking</button>
        </form>
    </div>
</body>
</html>
