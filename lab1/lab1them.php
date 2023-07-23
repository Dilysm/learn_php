<?php
$a = "Lương nhân viên tư vấn";
$b = "Lương nhân viên kinh doanh";
$c = "Lương nhân viên IT";
$aa = "1000$";
$bb = "1500$";
$cc = "2000$";

?>
<style>
th {
    border: 1px solid;
}

td {
    border: 1px solid;
}
</style>
<form method="POST">
    <table>

        <tr>

            <td> <?php echo "$a " ;
            ?></td>
            <td><?php echo "$aa ";
            ?></td>
        </tr>
        <tr>
            <td> <?php echo "$b " ;
            ?></td>
            <td><?php echo "$bb ";
            ?></td>
        </tr>
        <tr>
            <td> <?php echo "$c " ;
            ?></td>
            <td><?php echo "$cc ";
            ?></td>
        </tr>
    </table>
</form>