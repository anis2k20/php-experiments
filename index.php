<?php

$a = "Hello";
$b = "world";
$c = $a . " ". $b;

$d = 2;
$d += 4;

echo $c;
echo $d;

if($c == $d){
    echo "matched";
}else{
    echo "Not Matched";
}
echo "<br><br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="connection.php" method="post">
        <label for="username">username</label>
        <input type="text" name="username" placeholder="username">
        <select name="favorite-food" id="">
            <option value="none">None</option>
            <option value="pizza">pizza</option>
            <option value="burger">burger</option>
            <option value="fries">fries</option>
        </select>
        <button type="submit">Submit</button>
    </form> 
</body>
</html>