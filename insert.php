<?php

include('config.php');

$name = $_POST["Name"];
$mail = $_POST["Gmail"];
$game = $_POST["favGame"];
$assassin = $_POST["favAssassin"];

$sql = "INSERT INTO project(username,gmail,fav_game,fav_assassin) values('$name','$mail','$game','$assassin')";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
