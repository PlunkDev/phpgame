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
<?php
$idk = rand(1,20);
echo '<form action="game.php?idk='.$idk.'&n=0" method="post">';
echo '<input type="submit" class="style-btn" value="Rozpocznij Grę">';
echo '</form>';

?>
</div>
</div>
</body>
</html>