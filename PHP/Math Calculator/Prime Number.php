<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <input type="number" name="num" id="">
        <br><br>
        <input type="submit" value="Check Number">
    </form>

    <?php
        $num=$_GET['num'];
        $f=0;
        for($i=2; $i<$num; $i++){
        if($num%$i==0){
            $f=1;
            break;
        }
    }
    if($f==1){
        echo"This is not prime Number";
    }
    else{
        echo "This IS Not Prime Number";
    }
    ?>
</body>
</html>