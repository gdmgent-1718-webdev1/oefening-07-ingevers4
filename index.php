<?php 

$count = 0;
$a = 0;
$b = 1;

echo $a.", ";
echo $b.", ";

while($count <= 100) {

    $c = $a+$b;
    echo $c." , ";

    $a=$b;
    $b=$c;

    $count=$count+1;
}
