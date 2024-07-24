<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks Calculator</title>
</head>
<body>
    <h1>Marks calc</h1>
</body>
<?php
    $eng=rand(0,100);
    $math=rand(0,100);
    $phy=rand(0,100);
    $total = $eng + $math + $phy;
    $percentage = number_format((float)$total/300*100,2);
    echo "Marks are:<br> Eng: $eng <br> Math: $math <br> Physics: $phy<br>";
    if($eng<=50||$math<=50||$phy<=50)
    {
        echo "<h2 style='color:red'>You are Fail!!</h2>";
    }
    else{
        echo "<h2 style='color:green'>You are Pass!!</h2>";
    }
    echo "<h3><br><b>Total marks: $total</b> <br>";
    echo "<b>Percentage: $percentage %</b><br></h3>";
?>
</html>