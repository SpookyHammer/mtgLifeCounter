<?php
/**
 * Created by PhpStorm.
 * User: Kaân Gostek
 * Date: 30/04/2017
 * Time: 19:31
 */
$email = $_REQUEST["mail"];
$pass = $_REQUEST["pass"];
$pass = hash(sha256,$pass);

$servername = "www.swagclan.net";
$usrname = "PhGpKG";
$password = "GKaKi0207";
$dbname = "school_PhGpKG";


// Create connection
$conn = new mysqli($servername, $usrname, $password, $dbname);

$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);
if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    if($pass == $row['password']){
        echo $row['id'] . "-*-" . $row['username'] . "-*-" . $row['email'];
    }
}else{
    echo "Error: Your email/password was not correct";
}
$conn->close();
?>