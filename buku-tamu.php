<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="buku-tamu-css.css">
    <link rel="icon" href="img/icon.png" type="image/png" sizes="16x16">
    <title>Johanes Blog</title>
</head>
<body>
    <form action="#" method="POST">
        <div class="navbar">
            <div class="kotak-navbar"></div>
            <a href="home.html"><div class="logo-navbar underline-3">j h s b l o g</div></a>
            <a href="about.html"><div class="about-navbar underline">about</div></a>
            <a href="blog.html"><div class="blog-navbar underline">blog</div></a>
            <a href="buku-tamu.php"><div class="buku-tamu-navbar underline-2">buku tamu</div></a>
        </div>
        <div class="menu">
            <div class="judul-buku-tamu">BUKU TAMU</div>
            <div class="garis-buku-tamu"></div>
            <div class="nama-tabel">Nama:</div>
            <div class="tabel-nama">
                <input type="text" name="nama" placeholder="Nama Anda">
            </div>
            <div class="email-tabel">email:</div>
            <div class="tabel-email">
                <input type="email" name="email" placeholder="email Anda contoh: yyy@xxx.domain">
            </div>
            <div class="pesan-tabel">Pesan:</div>
            <div class="tabel-pesan">
                <textarea name="pesan" cols="30" rows="10" placeholder="Pesan/Kritik/Saran"></textarea>
            </div>
            <div class="submit">
                <input type="submit" value="submit">
            </div>
        </div>
        <div class="footer">
            <footer>Made &nbsp;&nbsp;&nbsp; with Johanes Setiawan - Copyright@2022️</footer>
            <footer class="heard-red">❤</footer>
        </div>
    </form>
    <?php
    $nama = @$_POST['nama'];
    $email = @$_POST['email'];
    $pesan = @$_POST['pesan'];
    $submit = @$_POST['submit'];
    if($nama){
        echo "Nama: {$nama} <br>";
    }
    if($email){
        echo "Email: {$email} <br>";
    }
    if($pesan){
        echo "Pesan: {$pesan} <br>";
    }
    if ($submit){
        echo "<meta http-equiv='refresh' content='0'>";
    }
    ?>
</body>
</html>