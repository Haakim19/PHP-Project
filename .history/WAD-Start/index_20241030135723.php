<?php
echo ("hello wolrd!");
$name = "Haakim";
echo ("<br>" . $name);
$num1 = 100;
$num2 = 200;
echo ("<br>" . $num1 + $num2);
$rads = 10;
echo ("<br>" . round(pi() * $rads * $rads, 3) . "<br>");
$sub1 = 70;
$sub2 = 45;
$sub3 = 80;
$avg = ($sub1 + $sub2 + $sub3) / 3;
echo ("The avarage is" . $avg);
if ($avg < 50) {
    echo ("<br>Pass");
}
