<?php
$conn = mysqli_connect("localhost", "root", "", "siswa");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows= [];
    while($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}
// Tambah
function tambah($data){

    global $conn;

$Nama = htmlspecialchars ($data ["Nama"]);
$Nis = htmlspecialchars ($data ["Nis"]);
$Rombel = htmlspecialchars ($data ["Rombel"]);
$Rayon = htmlspecialchars ($data ["Rayon"]);
$Status = htmlspecialchars ($data ["Status"]);


$query = "INSERT INTO students
           VALUES
           ('', '$Nama', '$Nis', '$Rombel', '$Rayon', '$Status')
";
mysqli_query($conn, $query);
return  mysqli_affected_rows($conn);

}
//hapus
function deleted($id) {
  global $conn;
  mysqli_query($conn, "DELETE  FROM students WHERE id = $id");
  return  mysqli_affected_rows($conn);
}

// ubah
function change ($data){

    global $conn;

    $id = $data ["id"]; 
    $Nama = htmlspecialchars ($data ["Nama"]);
    $Nis = htmlspecialchars ($data ["Nis"]);
    $Rombel = htmlspecialchars ($data ["Rombel"]);
    $Rayon = htmlspecialchars ($data ["Rayon"]);
    $Status = htmlspecialchars ($data ["Status"]);


    $query = "UPDATE students SET
    
               Nama = '$Nama',
               Nis = '$Nis',
               Rombel = '$Rombel',
               Rayon = '$Rayon',
               Status = '$Status'
            WHERE id = $id
               ";

     mysqli_query($conn, $query );

    return  mysqli_affected_rows($conn);
}
// search
function Search($keyword){
    $query = "SELECT * FROM students
                WHERE
            Nama LIKE '%$keyword%' OR
            Nis LIKE '%$keyword%' OR
            Rombel LIKE '%$keyword%' OR
            Rayon LIKE '%$keyword%' OR
            Status LIKE '%$keyword%'

        ";
        return query($query);
}


?> 