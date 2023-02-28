<?php
require 'loker.php';


$id = $_GET["id"];


$kill = query ("SELECT * FROM students WHERE id = $id")[0];




if(isset($_POST["submit"]) ) {

  if( Change ($_POST) > 0 ){
    echo "<script>
        alert('The data is successful already!')
        document.localtion.href = 'database.php';
        </script>";

  } else {
    echo "<script>
           alert('Data failed already!')
            document.localtion.href = 'database.php';
            </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change data</title>
</head>
<body>
    <h1>Change Your Data</h1>
    <form action="" method="post">

    <input type="hidden" name="id" value="<?= $kill ["id"]; ?>">

    <ul>
        <li>
            <label for="Nama">NAMA :</label>
            <input type="text" name="Nama" id"Nama" required
            value="<?= $kill["Nama"]; ?>">
        </li>

        <li>
            <label for="Nis">NIS :</label>
            <input type="text" name="Nis" id"Nis" required
            value="<?= $kill ["Nis"]; ?>">
        </li>

        <li>
            <label for="Rombel">ROMBEL :</label>
            <input type="text" name="Rombel" id"Rombel" required
            value="<?= $kill ["Rombel"]; ?>">
        </li>

        <li>
            <label for="Rayon">RAYON :</label>
            <input type="text" name="Rayon" id"Rayon" required
            value="<?= $kill ["Rayon"]; ?>">
        </li>
        
        <li>
            <label for="Status">STATUS :</label>
            <input type="text" name="Status" id"Status" required
            value="<?= $kill ["Status"]; ?>">
        </li>

        <li>
            <button type="submit" name="submit"> Change your data! </button>
        </li>
    </ul>
    <table><a href="database.php">back</a></table>

</body>
</html>