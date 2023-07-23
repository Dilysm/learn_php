<!DOCTYPE html>
<html>

<head>
    <title>Xếp loại học sinh</title>
    <script>
    function tinhDiemTrungBinh() {
        // Lấy giá trị từ các textbox
        var diemMon1 = parseFloat(document.getElementById("txtMon1").value);
        var diemMon2 = parseFloat(document.getElementById("txtMon2").value);
        var diemMon3 = parseFloat(document.getElementById("txtMon3").value);
        var diemMon4 = parseFloat(document.getElementById("txtMon4").value);
        var diemMon5 = parseFloat(document.getElementById("txtMon5").value);
        var diemMon6 = parseFloat(document.getElementById("txtMon6").value);

        // Kiểm tra điểm mỗi môn
        if (diemMon1 < 0 || diemMon1 > 10 ||
            diemMon2 < 0 || diemMon2 > 10 ||
            diemMon3 < 0 || diemMon3 > 10 ||
            diemMon4 < 0 || diemMon4 > 10 ||
            diemMon5 < 0 || diemMon5 > 10 ||
            diemMon6 < 0 || diemMon6 > 10) {
            alert("Điểm môn học không hợp lệ");
            return;
        }

        // Tính điểm trung bình
        var diemTrungBinh = (diemMon1 + diemMon2 + diemMon3 + diemMon4 + diemMon5 + diemMon6) / 6;

        // Kiểm tra điểm trung bình và xếp loại
        if (diemTrungBinh < 5 || diemMon1 < 4 || diemMon2 < 4 || diemMon3 < 4 || diemMon4 < 4 || diemMon5 < 4 ||
            diemMon6 < 4) {
            alert("Xếp loại: Yếu");
        } else if (diemTrungBinh >= 5 && diemTrungBinh <= 6.4) {
            alert("Xếp loại: Trung bình");
        } else if (diemTrungBinh >= 6.5 && diemTrungBinh <= 7.9) {
            alert("Xếp loại: Khá");
        } else {
            alert("Xếp loại: Giỏi");
        }
    }
    </script>
</head>

<body>
    <h1>Xếp loại học sinh</h1>
    <label for="txtMon1">Nhập điểm môn 1:</label>
    <input type="text" id="txtMon1"><br><br>
    <label for="txtMon2">Nhập điểm môn 2:</label>
    <input type="text" id="txtMon2"><br><br>
    <label for="txtMon3">Nhập điểm môn 3:</label>
    <input type="text" id="txtMon3"><br><br>
    <label for="txtMon4">Nhập điểm môn 4:</label>
    <input type="text" id="txtMon4"><br><br>
    <label for="txtMon5">Nhập điểm môn 5:</label>
    <input type="text" id="txtMon5"><br><br>
    <label for="txtMon6">Nhập điểm môn 6:</label>
    <input type="text" id="txtMon6"><br><br>
    <button onclick="tinhDiemTrungBinh()">Tính</button><br><br>
</body>

</html>