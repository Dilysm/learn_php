<?php
$input = "082307";

// Sử dụng substr để trích xuất các phần tử trong chuỗi
$hours = substr($input, 0, 2);
$minutes = substr($input, 2, 2);
$seconds = substr($input, 4, 2);

// Sử dụng chunk_split để thêm dấu ":" giữa các phần tử
$time_formatted = chunk_split($hours . $minutes . $seconds, 2, ':');

echo $time_formatted; // Output: 08:23:07
?>