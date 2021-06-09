<form method="post">
    Nhap x:<input type="text" name="numberX">
    <br>
    Nhap y:<input type="text" name="numberY">
    <br>
    <input type="submit" value="Submit">
</form>
<?php
function calculate($numberX, $numberY)
{
    $sum = $numberX + $numberY;
    $brand = $numberX - $numberY;

    echo 'Tong : ' . $sum . '<br>'
        . 'Hieu : ' . $brand . '<br>'
        . 'Tich : ' . $numberX * $numberY . '<br>'
        . 'Thuong : ' . $numberX / $numberY;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numberX = (int)$_POST['numberX'];
    $numberY = (int)$_POST['numberY'];
    if ($numberY == 0 || $numberX == 0 && $numberY == 0) {
        echo "by zero";
    } else {
        calculate($numberX, $numberY);
    }
}



