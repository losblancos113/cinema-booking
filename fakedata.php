<?php
/**
 * Created by PhpStorm.
 * User: hmtma
 * Date: 4/13/2018
 * Time: 9:50 PM
 */

$$servername = "localhost";
$username = "root";
$password = "Abcd@1234";
$dbname = "abcphim";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="";
for ($i = 1; $i <= 10; $i++){
    for ($j = 1; $j <= 10; $j++){
        $hang = $i;
        $soghe = $j;
        $tenghe = $hang."_".$j;
        $sql .= "INSERT INTO ghe(tenghe, maphong, trangthai, hang, soghe) VALUES('".$tenghe."',1,0,'".$hang."',".$soghe.");";
    }
}

if ($conn->multi_query($sql) === TRUE){
    echo "inserted success";
}else{
    echo "Error:".$conn->error;
}
$conn->close();