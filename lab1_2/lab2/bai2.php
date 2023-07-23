<form action="bai2.php" method="post">
    <input type="text" name="soa">
    <input type="text" name="sob">
    <input type="submit" value="Tính Tổng" name="tinhtong">
</form>
<?php
    function tinhtong($bien1, $bien2=1){
        $tongle = 0;
        $tongle_str = "";
        $tongchan = 0;
        $tongchan_str = "";
        for($i = $bien1; $i <= $bien2; $i++){
            if($i % 2 == 1){
                $tongle += $i;
                if(($i == $bien2) || ($i == ($bien2-1))){
                    $plus = "";
                } else {
                    $plus = " + ";
                }
                $tongle_str .= $i . $plus;
            } else {
                $tongchan += $i;
                if(($i == $bien2) || ($i == ($bien2-1))){
                    $plus = "";
                } else {
                    $plus = " + ";
                }
                $tongchan_str .= $i . $plus;
            }
        }
        $kq = $tongle_str . " = " . $tongle;
        $kq .= "<br>" . $tongchan_str . " = " . $tongchan;
        return $kq;
    }

    if (isset($_POST['tinhtong']) && $_POST['tinhtong']) {
        $soa = $_POST['soa'];
        $sob = $_POST['sob'];
        $ketqua = tinhtong($soa, $sob);
        echo $ketqua;
    }
?>
