<?php
// array
$work_result = [100,200,100,400,500,200,300,200];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan 2</title>
    <style>
        div {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
    </style>
</head>
<body>

<?php for ( $i = 0; $i < count($work_result); $i++)
{ ?>

<div><?php echo $work_result[$i]; ?> </div>

<?php } ?>



</body>

</html>











