<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <header>
        <h1>Selamat Datang di Toko Kelapa</h1>
        <nav>
            <ul>
                <li><a href="index.php?page=beranda">Beranda</a></li>
                <li><a href="index.php?page=kontak">Kontak</a></li>
                <li><a href="index.php?page=tentang">Tentang</a></li>
                <li><a href="index.php?page=add_produk">Tambah Produk</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <?php
        $page = isset($_GET['page'])
        ?>