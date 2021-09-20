<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action= "dekripsi1.php" method="post">
        <input type="text" name="input">
        <input type="submit" value="Dekripsi"/>
<?php
function dekripsi(){
    $input=$_POST["input"];

    $key = array(
        'b' => 'p', 'q' => 'n', 'l' => 'd', 'u' => 'i', 'w' => 't', 'z' => 'r', 'o' => 'u', 'j' => 'w', 
        'B' => 'P', 'Q' => 'N', 'L' => 'D', 'U' => 'I', 'W' => 'T', 'Z' => 'R', 'O' => 'U', 'J' => 'W'
    );

    $dekripsi = str_replace(array_keys($key), $key, $input);
    echo"<br><br>";
    echo "Kata yang di dekripsi adalah ", $input;

    echo"<br><br>";
    echo "hasil dekripsi adalah ", $dekripsi;
};
?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
            {
                dekripsi();
            }
?>
</body>
</html>