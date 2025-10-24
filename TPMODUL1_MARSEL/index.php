<?php
// Data otomatis milik Marsel
$nama = "Marcela Nur Hidayah";
$email = "chellsmarcela8@gmail.com";
$telepon = "085647608801";
$perangkat = "Laptop";
$alamat = "Teluk";
$keluhan = "";
$keluhanErr = "";

// Kalau tombol submit diklik
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["keluhan"])) {
        $keluhanErr = "Keluhan wajib diisi";
    } else {
        $keluhan = htmlspecialchars($_POST["keluhan"]);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan Teknisi Marsel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Form Pemesanan Teknisi Online (TechCare)</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?php echo $nama; ?>" readonly>

        <label>Email:</label>
        <input type="text" name="email" value="<?php echo $email; ?>" readonly>

        <label>Nomor Telepon:</label>
        <input type="text" name="telepon" value="<?php echo $telepon; ?>" readonly>

        <label>Jenis Perangkat:</label>
        <select name="perangkat" disabled>
            <option value="Laptop" selected>Laptop</option>
        </select>

        <label>Keluhan:</label>
        <textarea name="keluhan"><?php echo $keluhan; ?></textarea>
        <span class="error"><?php echo $keluhanErr; ?></span>

        <label>Alamat Servis:</label>
        <textarea name="alamat" readonly><?php echo $alamat; ?></textarea>

        <div class="button-container">
            <button type="submit">Kirim Pemesanan</button>
        </div>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !$keluhanErr) {
        echo "<h3>Data Pemesanan:</h3>";
        echo "<table>";
        echo "<tr><th>Nama</th><td>$nama</td></tr>";
        echo "<tr><th>Email</th><td>$email</td></tr>";
        echo "<tr><th>Nomor Telepon</th><td>$telepon</td></tr>";
        echo "<tr><th>Jenis Perangkat</th><td>$perangkat</td></tr>";
        echo "<tr><th>Keluhan</th><td>$keluhan</td></tr>";
        echo "<tr><th>Alamat Servis</th><td>$alamat</td></tr>";
        echo "</table>";
    }
    ?>
</div>
</body>
</html>