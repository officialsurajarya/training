<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary Check</title>
</head>
<body>
    <form action="">
        <input type="text" name="num" id="">
        <br><br>
        <input type="submit" value="Check Number">
    </form>

    <?php
        $num=$_GET['num'];
        
        if($num>=10000 && $num< 20000){
            $newNum=$num*1.10;
            echo $newNum;
        }
        elseif($num>=20000 && $num< 30000){
            $newNum=$num*1.08;
            echo $newNum;
        }
        elseif($num>=30000 && $num< 40000){
            $newNum=$num*1.05;
            echo $newNum;
        }
        elseif($num>=40000 && $num< 50000){
            $newNum=$num*1.02;
            echo $newNum;
        }
        else {
            echo $num;
        }
    ?>
</body>
</html>
