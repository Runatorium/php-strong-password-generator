<?php
$pswLength = $_GET['length'];

function generateRandomPassword($pswLength)
{
    $pswComponents = '23456789abcdefghijkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ°"!@#$%^&*()_-';
    $finalPsw = '';
    for ($i = 0; $i < $pswLength; $i++) {
        $finalPsw .= $pswComponents[rand(0, strlen($pswComponents) - 1)];
    }
    return $finalPsw;
}

generateRandomPassword($pswLength);

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <?php echo $finalPsw;
        ?>
    </h1>
</body>

</html>