<?php
/**
 * Created by PhpStorm.
 * User: Kaan
 * Date: 30/04/2017
 * Time: 11:05
 */
$username = $_REQUEST["username"];
$email = $_REQUEST["mail"];
$pass = $_REQUEST["pass"];
$pass = hash(sha256,$pass);

if(isset($_REQUEST["name"])){
    $name = $_REQUEST["name"];
}else{
    $name = "NULL";
}
if(isset($_REQUEST["famName"])){
    $famName = $_REQUEST["famName"];
}else{
    $famName = "NULL";
}

$servername = "www.swagclan.net";
$usrname = "PhGpKG";
$password = "GKaKi0207";
$dbname = "school_PhGpKG";

// Create connection
$conn = new mysqli($servername, $usrname, $password, $dbname);

$sql = "INSERT INTO users (username, email, password, name, famName) VALUES ('$username', '$email', '$pass', '$name', '$famName')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "SELECT * FROM users WHERE username = $username";
$result = $conn->query($sql);
if($result->num_rows > 0){
    session_start();
    $row = $result->fetch_assoc();
    echo $row['id'] . "-*-" . $row['username'] . "-*-" . $row['email'];
}else{
    echo "Couldn't log you in automaticly. Please go back and log in manually";
}
$conn->close();
?>