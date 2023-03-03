<?php
function func($t)
{
    $f = (((-$t)+sqrt(7+$t))/(8-abs($t)));
    return $f;
}

echo func(6);
?>