<?php
$n = readline("Nhập vào số nguyên dương n: ");

// Kiểm tra n có thỏa mãn yêu cầu không
if ($n <= 0 || $n >= 10) {
    echo "Số nguyên dương n không hợp lệ!";
    exit;
}

// In hình vuông
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        echo "* ";
    }
    echo "\n";
}
?>