<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Pie/src/css/style_php.css">
    <title>Document</title>

</head>
<body>

<?php

$name = $_POST['name'];
$age = $_POST['age'];
$sex = $_POST['sex'];

if (!empty($name) && !empty($age) && !empty($sex)){
    $mysqli = new mysqli("localhost", "root", "1234", "demo");
    $mysqli->query("insert into test(name, age, sex) values('$name', $age, '$sex')");

    $res = $mysqli->query("select * from test");

    while ($e = $res->fetch_assoc()){
        /*echo '<pre>';
        var_dump($e);
        echo '</pre>';*/
        echo "
        <div class='card'> 
        <div class='name'>$e[name]</div>
        <br>
        <div class='age'>$e[age]</div>
        <br>
        <div class='sex'>$e[sex]</div>
        </div>
        ";
    }
}
else {
    echo 'данные пустые';
}

?>

</body>
</html>

