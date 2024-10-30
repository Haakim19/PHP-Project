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
$sub2 = 40;
$sub3 = 40;
$avg = ($sub1 + $sub2 + $sub3) / 3;
echo ("The avarage is " . $avg);
if ($avg > 50) {
    echo ("<br>Pass");
} else {
    echo ("<br> Fail");
}
echo ("<br>");
$num = 1;
while ($num <= 11) {
    echo str_repeat("*", $num);
    echo ("<br>");
    $num++;
}
$num = 10;
while ($num >= 0) {
    echo str_repeat("*", $num);
    echo ("<br>");
    $num--;
}
$num = 10;
do {
    echo ($num);
    $num--;
    echo ("<br>");
} while ($num > 0);

for ($i = 0; $i <= 10; $i) {
    echo ("<br>" . "hello");
}
