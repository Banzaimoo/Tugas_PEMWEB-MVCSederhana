<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data</h1>
    <form action="?page=insert" method="post">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" value="" require required autocomplete="off"><br>
        <label for="nim">NIM</label>
        <input type="text" name="nim" id="nim" value="" require required autocomplete="off"><br>
        <label for="univ">Universitas</label>
        <input type="text" name="univ" id="univ" value="" require required autocomplete="off"><br>
        <label for="prodi">Program Studi</label>
        <input type="text" name="prodi" id="prodi" value="" require required autocomplete="off"><br>
        <button type="submit" name="insert" value="done">Submit</button>
    </form>
    <form action="index.php?page=load" method="get">
        <button type="submit" name="page" value="load">Kembali</button>
    </form>
</body>
</html>