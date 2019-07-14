
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
        <title>Halaman Admin</title>
        <link href="mysql.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    </head>
    <body>
        <h1 align="center">Masukan data karyawan</h1>

        <div class="wrapper fadeInDown">
          <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
              <img src="dharmagroup.png" id="icon" alt="User Icon" />
            </div>

        <form class="" action="" method="post">
            <!-- <ul> -->

                <!-- <li> -->
                    <!-- <label for="nama">Nama:</label> -->
                    <input type="text" name="nama" id="nama" class="fadeIn second" placeholder="Nama" >
                <!-- </li>
                <li> -->
                    <!-- <label for="npk">NPK:</label> -->
                    <input type="text" name="npk" id="npk" class="fadeIn third" placeholder="NPK">
                <!-- </li>
                <li> -->
                    <!-- <label for="section">Section:</label> -->
                    <input type="text" name="section" id="section" class="fadeIn fourth" placeholder="Section">
                <!-- </li>
                <li> -->
                <input type="submit" name="submit" value="Log In" class="fadeIn fifth">
                <!-- <button type="submit" name="submit" class="fadeIn fifth">Add</button> -->
                <!-- </li> -->
            <!-- </ul> -->

        </form>
    </body>
</html>
