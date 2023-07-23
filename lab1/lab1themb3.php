<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <input type="number" name="m">
        <input type="submit" value="OK ">
    </form>
    <?php
    if ($_SERVER ["REQUEST_METHOD"] == "POST"){
        $m = $_POST["m"];
        
        if ($m > 10){
            echo " so "  .$m  ." lon hon 10<br>";
        }if ($m > 15){
            echo " so "  .$m  ." lon hon 15<br>";
        }if ($m > 20){
        echo " so "  .$m  ." lon hon 20<br>";
        }elseif($m < 20){
        echo "So " .$m  ." be hon 20 <br>";
    }
}  
    
    ?>
</body>

</html>