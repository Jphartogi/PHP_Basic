<?php
function salam($waktu,$nama){
  return " Selamat $waktu, $nama";
}


// $h = 10;
// $a = 60*60*24*$h;
// echo date("d-M-Y",time()+$a);

// echo date("l",mktime(0,0,0,6,4,1997));
// echo  date("l",strtotime("04 jun 1997"));

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Latihan Function</title>
  </head>
  <body>
    <h1><?php echo salam("Pagi","Joshua") ?></h1>
  </body>
</html>
