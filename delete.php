<?php
require 'loker.php';

$id = $_GET["id"];

if( deleted($id) > 0 ) {
    echo "
          <script>
           alert('the data has been deleted!')
            document.localtion.href = 'database.php';
            </script>";
} else {
    echo "
    <script>
    alert('data failed to delete!')
     document.localtion.href = 'database.php';
     </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
<table><a href="database.php">back</a></table>
</body>
</html>