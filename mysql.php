<?php
require 'mysql_functions.php';

$karyawan = query("SELECT * FROM karyawan");

?>


<!DOCTYPE html>
<html>
<head>
  
</head>
<body>
    <h1>Daftar Karyawan</h1>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Nama</th>
        <th>NPK</th>
        <th>Section</th>
        <th>Performance Today</th>
        <th>Performance Average</th>

    </tr>
    <?php $i = 1 ?>

    <?php foreach ($karyawan as $row): ?>
    <tr>

        <td><?= $i ?> </td>
        <td><a href="">ubah</a> |
            <a href="">hapus</a>
        </td>
        <td><?php echo $row["nama"] ?></td>
        <td><?php echo $row["npk"] ?></td>
        <td><?php echo $row["section"] ?></td>
        <td><?php echo $row["performance_today"] ?></td>
        <td><?php echo $row["performance_average"] ?></td>
        <?php $i = $i + 1 ?>
    </tr>
    <?php endforeach ?>

</table>




</body>
</html>
