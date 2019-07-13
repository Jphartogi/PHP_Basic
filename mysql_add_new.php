
<?php
require 'mysql_functions.php';
$db = mysqli_connect("localhost","root","","test_performance");

if (isset($_POST["submit"])) {

    // cek apakah data berhasil diinput
    $status = add($_POST);
    if ($status > 0) {
        echo "Successfully added new employee";
    }
    else {
        echo "Error occured!";
        echo "<br>";
        echo mysqli_error($db);
    }
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Tambah data karyawan</title>
    </head>
    <body>
        <h1>Masukan data karyrawan</h1>

        <form class="" action="" method="post">
            <ul>

                <li>
                    <label for="nama">Nama:</label>
                    <input type="text" name="nama" id="nama">
                </li>
                <li>
                    <label for="npk">NPK:</label>
                    <input type="text" name="npk" id="npk">
                </li>
                <li>
                    <label for="section">Section:</label>
                    <input type="text" name="section" id="section">
                </li>
                <li>
                <button type="submit" name="submit">Add</button>
                </li>
            </ul>

        </form>
    </body>
</html>
