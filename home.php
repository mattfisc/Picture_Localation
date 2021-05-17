<?php

if(!empty($_GET['location'])){
    $maps_url = 'https://maps.googleapis.com/api/geocode/json?address='
    .urlencode($_GET['location']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Picture Locator</title>
</head>
<body>
    <form action="">
        <input type="text">
    </form>
</body>
</html>