<?php
$pswLength = $_GET['length'];
$repeatActive = $GET['repeat/N'];


/*
function generateRandomPasswordnoRepeat($pswLength)
{
$pswComponents = '23456789abcdefghijkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ!@#$%^&*()_-';
$finalPsw = '';
$pswTempChar = '';
for ($i = 0; $i < $pswLength; $i++) {
$pswTempChar = $pswComponents[rand(0, strlen($pswComponents) - 1)];
if (str_contains($finalPsw, $pswTempChar)) {
$i--;
$pswTempChar = '';
} else {
$finalPsw .= $pswTempChar;
$pswTempChar = '';
}
}
return $finalPsw;
}
*/

function generateRandomPassword($pswLength)
{
    $pswComponents = '23456789abcdefghijkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ!@#$%^&*()_-';
    $finalPsw = '';
    for ($i = 0; $i < $pswLength; $i++) {
        $finalPsw .= $pswComponents[rand(0, strlen($pswComponents) - 1)];
    }
    return $finalPsw;
}



?>