<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Input Table</title>
</head>
<body>
    <form action="">
        <p><b>Enter a Number That You Want To Find Square Root</b></p>
        <input type="number" name="num" id="">
        <br><br>
        <input type="submit" value="Generate Factorial"> 
        <br><br>
    </form>

    <?php
        $num=$_GET['num'];
        $ans =$num**2;
        echo $ans;  
    ?>
</body>
</html>