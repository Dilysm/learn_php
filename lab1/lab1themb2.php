<?php
$file = basename($_SERVER['PHP_SELF']);
$so_dong = count(file($file));
echo "co $so_dong trong $file "."<br>";
?>