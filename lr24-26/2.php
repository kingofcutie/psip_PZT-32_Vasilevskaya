<?php

$a = 10;
$b = 20;

$filename = __DIR__ . '/file.txt';
$fh = fopen($filename, 'w');

if ($a>$b){
    echo $a." > ".$b;
    fwrite($fh, $a);
}
else{
    echo $b." > ".$a;
    fwrite($fh, $b);
}

fclose($fh);

?>