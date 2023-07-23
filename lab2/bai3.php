<form action="bai3.php" method="post">
    <input type="text" name="cd">
    <input type="text" name="cr">
    <input type="submit" value="kiểm tra" name="kiemtra">
</form>
<?php 
    function showkq($cd,$cr){
        $kq="";
        if($cd==$cr){
            $kq.="Đây là hình vuông";
            $kq.="<br> - Chu vi: ".$cd*4;
            $kq.="<br> - Điện tích: ".$cd*$cr;
        }else{
            $kq.="Đây là hình chữ nhật";
            $kq.="<br> - Chu vi: ".($cd+$cr)*2;
            $kq.="<br> - Điện tích: ".$cd*$cr;
        }
        return $kq;
    }
    if (isset($_POST['kiemtra']) && $_POST['kiemtra']) {
        $cd = $_POST['cd'];
        $cr = $_POST['cr'];
        $ketqua = showkq($cd, $cr);
        echo $ketqua;
    }
    
?>