<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$idk = rand(1,20);
echo '<form action="game.php?idk='.$idk.'&n=0" method="post">';
echo '<input type="submit" value="Rozpocznij Grę">';
echo '</form>';

?>
</body>
</html>