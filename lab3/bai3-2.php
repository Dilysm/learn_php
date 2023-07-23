<?php
$input = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";

// Sử dụng hàm explode để chuyển chuỗi thành mảng dựa trên ký tự xuống dòng ("\n")
$array = explode("\n", $input);

// Xuất kết quả dưới định dạng HTML sử dụng var_dump và thẻ <pre>
echo "<pre>";
var_dump($array);
echo "</pre>";
?>