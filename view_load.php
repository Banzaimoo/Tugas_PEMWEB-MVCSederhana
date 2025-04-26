<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <form method="get">
        <button name="page" type="submit" value="insert">Tambah Data</button>
    </form>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Universitas</th>
            <th>Program Studi</th>
            <th>Aksi</th>
        </tr>
        <?php $i=1 ?>
        <?php foreach($data as $row) :?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['nim']; ?></td>
            <td><?= $row['universitas']; ?></td>
            <td><?= $row['program_studi']; ?></td>
            <td><a href="?page=update&nim=<?= $row['nim']?>">Update</a> | <a href="?page=delete&nim=<?= $row['nim']?>">Hapus</a></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</body>
</html>