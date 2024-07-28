<!-- TUGAS ANDRI WIDANI - VSGA PERTEMUAN 6-8 -->

<?php
// hanya akan aktif ketika button ditekan
if(isset($_POST["submit"])) {
    $belanja = $_POST["belanja"];
        function hitungDiskon() {
            global $belanja;

            if ($belanja >= 100000) {
                $diskon = 0.1 * $belanja;
            } elseif ($belanja >= 50000) {
                $diskon = 0.05 * $belanja;
            } else {
                $diskon = 0;
            }
        return $diskon;
    }
    // diskon dibulatkan terlebih dahulu oleh round untuk mencegah adanya angka desimal
    $diskon = round(hitungDiskon());
    $total = $belanja - $diskon;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja dan Diskon</title>
</head>
<body>
    <h2>Harga Total</h2>
    <p>
        <b>Diskon 10%</b> untuk total belanja lebih dari atau sama dengan Rp. 100.000,00 <br>
        <b>Diskon 5%</b> untuk total belanja lebih dari atau sama dengan Rp. 50.000,00 
    </p>
    <form action="" method="post">
        <label for="diskon">Masukkan Total Belanja Anda Rp. </label>
<!-- autocomplete="off" untuk menghilangkan history yang telah diinput sebelumnya -->
<!-- autofocus untuk memfokuskan user langsung pada input ketika membuka halaman -->
        <input type="number" name="belanja" id="diskon" autocomplete="off" autofocus>
        <button type="submit" name="submit">Total</button>
    </form>

    <!-- hanya akan aktif dan muncul ketika button ditekan -->
    <?php if(isset($_POST["submit"])) : ?>
        <ul>
            <li>Total belanja anda : <?php echo "Rp. $belanja"; ?></li>
            <li>Diskon : <?php echo "Rp. $diskon"; ?></li>
            <li>Total yang harus dibayar : <?php echo "Rp. $total"; ?></li>
        </ul>
    <?php endif; ?>

</body>
</html>