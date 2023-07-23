<!DOCTYPE html>
<html>

<head>
    <title>Giải phương trình bậc 2</title>
    <script>
    function giaiPhuongTrinh() {
        // Lấy giá trị từ các textbox
        var a = parseFloat(document.getElementById("txtA").value);
        var b = parseFloat(document.getElementById("txtB").value);
        var c = parseFloat(document.getElementById("txtC").value);

        // Kiểm tra a có phải là số không?
        if (isNaN(a)) {
            alert("Giá trị của a không hợp lệ");
            return;
        }

        // Tính delta
        var delta = b * b - 4 * a * c;

        // Kiểm tra delta để xác định số nghiệm
        if (delta > 0) {
            var x1 = (-b + Math.sqrt(delta)) / (2 * a);
            var x2 = (-b - Math.sqrt(delta)) / (2 * a);
            // Hiển thị kết quả
            document.getElementById("result").innerHTML = "Phương trình có 2 nghiệm:<br>x1 = " + x1 + "<br>x2 = " + x2;
        } else if (delta === 0) {
            var x = -b / (2 * a);
            // Hiển thị kết quả
            document.getElementById("result").innerHTML = "Phương trình có nghiệm kép:<br>x = " + x;
        } else {
            // Hiển thị kết quả
            document.getElementById("result").innerHTML = "Phương trình vô nghiệm";
        }
    }
    </script>
</head>

<body>
    <h1>Giải phương trình bậc 2</h1>
    <label for="txtA">Nhập a:</label>
    <input type="text" id="txtA"><br><br>
    <label for="txtB">Nhập b:</label>
    <input type="text" id="txtB"><br><br>
    <label for="txtC">Nhập c:</label>
    <input type="text" id="txtC"><br><br>
    <button onclick="giaiPhuongTrinh()">Giải</button><br><br>
    <div id="result"></div>
</body>

</html>