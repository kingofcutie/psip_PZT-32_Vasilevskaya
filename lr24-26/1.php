<?php
session_start();
echo "<br>";

echo "Имя сессии:".session_name()."<br>";
echo "Значение идентификатора сессии:".session_id()."<br>";

$_SESSION['phone'] = $_GET['phone'];
$_SESSION['email'] = $_GET['email'];

echo "phone: ".$_SESSION['phone']."<br>";
echo "email: ".$_SESSION['email']."<br>";
?>