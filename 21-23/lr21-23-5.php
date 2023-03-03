<?php
$str1 = 'Vika';
$str2 = "PHP и Компьютерные сети";
$len=strlen($str1);
echo $str1;
echo "<br>";
$words = explode(" ", $str2); //разбиение строки на слова в массив
foreach ($words as &$value) { //вывод массива
    print $value;
    echo " "; 
}
echo "<br>";
print "Длина строки: $len";
echo "<br>";
$str1 = 'Павел'; //замена
echo $str1;
?>
