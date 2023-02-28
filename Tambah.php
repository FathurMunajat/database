<?php
require 'loker.php';

if(isset($_POST["submit"]) ) {

  if(Tambah($_POST) > 0 ){
    echo "<script>
        alert('Data added successfully!')
        document.localtion.href = 'database.php';
        </script>";
  } else {
    echo "<script>
           alert('Data cannot be added!')
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
    <title>Add data</title>
</head>
<body>
    <h1>Add Your Data</h1>
    <form action="" method="post">
    <ul>
        <li>
            <label for="Nama">NAMA :</label>
            <input type="text" name="Nama" id"Nama"
            required>
        </li>

        <li>
            <label for="Nis">NIS :</label>
            <input type="text" name="Nis" id"Nis">
        </li>

        <li>
            <label for="Rombel">ROMBEL :</label>
            <input type="text" name="Rombel" id"Rombel">
        </li>

        <li>
            <label for="Rayon">RAYON :</label>
            <input type="text" name="Rayon" id"Rayon">
        </li>
        
        <li>
            <label for="Status">STATUS :</label>
            <input type="text" name="Status" id"Status">
        </li>

        <li>
            <button type="submit" name="submit"> Add your data! </button>
        </li>
    </ul>
    <table><a href="database.php">back</a></table>

</body>
</html>