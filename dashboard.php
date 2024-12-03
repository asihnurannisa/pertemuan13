<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard PT Bendi Car</title>
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
        <h2>Selamat Datang, <?php echo $_SESSION['username']; ?>!</h2>
        <p>Selamat datang di layanan rental mobil PT Bendi Car. Temukan mobil terbaik untuk perjalananmu!</p>
        <h2>Promo Spesial!</h2>
        <p>Nikmati berbagai promo menarik dari PT Bendi Car. Berikut promo yang tersedia:</p>
        <ul>
            <li>**Diskon 20%** untuk pemesanan lebih dari 3 hari.</li>
            <li>**Free Driver** untuk pemesanan di akhir pekan.</li>
            <li>**Cashback** hingga Rp 200.000 untuk pelanggan baru.</li>
        </ul>

    </div>
</body>
</html>
