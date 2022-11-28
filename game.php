<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="wrapper">
<div class="strona">
<div class="box">
    <center>
<?php
error_reporting(E_ERROR | E_PARSE);
$idk = $_GET['idk'];
$n = $_GET['n'];
$odp = $_POST['odp'];
if($odp==$idk){
    echo "Udało ci się! Twoją liczbą było: ".$idk."</br></br>";
    $idk = rand(1,20);
    echo '<form action="game.php?idk='.$idk.'&n=0" method="post">';
    echo '<input type="submit" class="style-btn" value="Zagraj Ponownie"></br></br>';
    echo '</form>';
    
} else if($n==5) {
    echo "Przegrałeś! Twoją liczbą było: ".$idk."</br></br>";
    $idk = rand(1,20);
    echo '<form action="game.php?idk='.$idk.'&n=0" method="post">';
    echo '<input type="submit" class="style-btn" value="Spróbuj Ponownie"></br></br>';
    echo '</form>';
    
} else{
if($n<5){
echo '<form action="game.php?idk='.$idk.'&n='.($n+1).'" method="post">';
echo '<input type="number" class="style" name="odp" id="odp"></br></br>';
echo '<input type="submit" class="style-btn" value="Zgadnij">';
echo '</form>';
if($n!=0){
    if($odp>$idk){
        echo "<p class='text'>Nie udało ci się! Niższa Liczba!</p>";
    } else{
        echo "<p class='text'>Nie udało ci się! Wyższa Liczba!</p>";
    }
}
}}
?>
</div>
</div>
</div>
</center>
</body>
</html>