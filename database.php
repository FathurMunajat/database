<?php
require 'loker.php';
$kills = query("SELECT * FROM students");

if ( isset ($_POST["Search"]) ) {
    $kills = Search($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar siswa</title>
</head>
<body>
    <h1>Daftar Siswa</h1>

    <!-- search -->

    <form class="d-flex" role="search" action="" method="post">
            <input class="form-control me-2" type="search" 
            placeholder="Search" aria-label="Search" name="keyword"
                autofocus autocomplete="off">
            <button class="btn btn-outline-success" 
            type="submit" name="Search">Search</button>
        </form>
<br>

    <table border="1" cellpadding="10" cellspacing="0">
       <!-- Table -->
    <tr>

        <th>No.</th>
        <th>Nama</th>
        <th>Nis</th>
        <th>Rombel</th>
        <th>Rayon</th>
        <th>Status</th>
        <th>Option</th>

    </tr>
    <?php $i= 1; ?>
<?php foreach( $kills as $kill ): ?>
    <tr>
        <td><?= $i; ?></td>
        <td><?= $kill ["Nama"];?></td>
        <td><?= $kill ["Nis"];?></td>
        <td><?= $kill ["Rombel"];?></td>
        <td><?= $kill ["Rayon"];?></td>
        <td><?= $kill ["Status"];?></td>
        <td>
            <a href="change.php?id=<?= $kill ["id"]?>" onclick= "return confirm ('yakin mau diubah?')">Change</a> |
            <a href="delete.php?id=<?= $kill ["id"]?>" onclick= "return confirm ('yakin mau dihapus?')">Delete</a>
        </td>
    </tr>
    <?php $i++; ?>
<?php endforeach; ?>
    </table>
    <table><a href="Tambah.php">Add data</a></table>



</body>
</html>