
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Latihan 1</title>
    <style media="screen">
      .warna-baris{
        background-color: silver;
      }
      .warna-baris2{
        background-color: green;
      }
    </style>
  </head>
  <body>
<table border="11" cellpadding="20" cellspacing="5">
  <?php for ($i=1; $i <= 5; $i++) : ?>
    <?php if ($i % 2 == 0) : ?>
      <tr class="warna-baris">
    <?php else : ?>
      <tr class="warna-baris2">
    <?php endif; ?>
      <?php for ($a=1; $a <= 5; $a++) : ?>
        <td><?php echo "$i,$a"; ?></td>
      <?php endfor; ?>
  </tr>
<?php endfor;  ?>

</table>
  </body>
</html>
