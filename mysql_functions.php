<?php
$db = mysqli_connect("localhost","root","","test_performance");

function query($query){
    // get query function from mysql.php code
    global $db;
    $result = mysqli_query($db,$query);
    $rows = [];


// ambil data dari karyawan (fetch!)
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}
return $rows;

}

function add($data){
    global $db;
    $nama = $data["nama"];
    $npk = $data["npk"];
    $section = $data["section"];

    $query = "INSERT INTO karyawan VALUES('','$nama','$npk','$section','','')";
    mysqli_query($db,$query);

    return mysqli_affected_rows($db);
}

?>
