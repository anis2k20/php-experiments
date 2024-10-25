<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = htmlspecialchars($_POST["username"]);

    $favoriteFood = $_POST["favorite-food"];

    if(empty($username)){
        header("location: index.php");
    }
    echo $username;
    echo "<br>";
    echo $favoriteFood;
}
else{
    header("location: index.php");
}