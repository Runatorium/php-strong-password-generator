<?php
include_once __DIR__ . './functions.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <div class="myContainer">
        <div class="myInnerContainer">
            <form method="GET" action="index.php" class="row g-2">
                <div class="col-auto">
                    <label for="inputLength" class="visually-hidden">Password Length</label>
                    <input type="text" name="length" class="form-control" id="inputLength">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Confirm Length</button>
                </div>
            </form>
        </div>
        <div>
            <h1 id="psw">
                <?php echo generateRandomPassword($pswLength);
                ?>
            </h1>
        </div>
    </div>


</body>

</html>

</html>