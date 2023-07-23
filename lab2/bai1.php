<form action="bai1.php" method="post">
    <input type="text" name="soa">
    <input type="submit" value="Tính Tổng" name="tinhtong">
</form>
<?php
    if(isset($_POST['tinhtong']) && $_POST['tinhtong']){
        $soa=$_POST['soa'];
        $tongchan=0; $tongchan_str="";
        $tongle=0; $tongle_str="";
        for($i=1; $i<=$soa; $i++){
            if($i%2==0){
                if(($i==$soa) || ($i==$soa-1)){
                    $plus="";
                }else{
                    $plus=" + ";
                }
                $tongchans_str.=$i.$plus;
                $tongchan+=$i;
            }else{
                if(($i==$soa) || ($i==$soa-1)){
                    $plus="";
                }else{
                    $plus=" + ";
                }
                $tongle_str.=$i.$plus;
                $tongle_str +=$i;
            }
        }
        echo "Tông chẳn: ".$tongchan_str."=".$tongchan;
        echo "<br>Tổng lẻ: ".$tongle_str."=".$tongle;
    }
?>