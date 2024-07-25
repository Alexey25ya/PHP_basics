
<?php
$a = 5;
$b = '05';
var_dump($a == $b);
var_dump((int)'012345');
var_dump((float)123.0 === (int)123.0);
var_dump(0 == 'hello, world');

$x=1;
$y=2;
$x=$x+$y;
$y=$x-$y;
$x=$x-$y;
echo "x={$x}, y={$y}";


?>