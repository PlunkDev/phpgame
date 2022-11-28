<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
    <input type="text" name="za" id="za">
    <input type="number" name="zc" id="zc">
    <input type="submit" value="Oblicz">
</form>
<?php
    if(!empty($_POST['za'])){
        $a = $_POST['za'];
        $c = $_POST['zc'];
        echo "<ol>";
        for($ile = 0; $ile<$c; $ile++){
            echo "<li>".$a."</li>";
        }
        echo "</ol>";
    }
    
?>
</body>
</html>