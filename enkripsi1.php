<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action= "enkripsi1.php" method="post">
        <input type="text" name="input">
        <input type="submit" value="Enkripsi"/>
<?php
function enkripsi(){
    $input=$_POST["input"];

    $key = array(
        'p' => 'b', 'n' => 'q', 'd' => 'l', 'u' => 'o', 'w' => 'j', 'i' => 'u', 't' => 'w', 'r' => 'z',
        'P' => 'B', 'N' => 'Q', 'D' => 'L', 'U' => 'O', 'W' => 'J', 'I' => 'U', 'T' => 'W', 'R' => 'Z'
    );

    $enkripsi = str_replace(array_keys($key), $key, $input);
    echo"<br><br>";
    echo "Kata yang di enkripsi adalah ", $input;

    echo"<br><br>";
    echo "hasil enkripsi adalah ", $enkripsi;
};
?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
            {
                enkripsi();
            }
?>
</body>
</html>