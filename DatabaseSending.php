<?php

include "DatabaseCreationandConnection.php";

$LoginTable = "CREATE TABLE LoginDetails(
LoginID int(10),
StudentNumber int(10),
StudentPassword varchar(50)
)";
mysqli_query($Connection,$LoginTable);

$SampleData = "INSERT INTO `logindetails`(`LoginID`, `StudentNumber`, `StudentPassword`)
VALUES (01 , 12345678 , 'FirstData'),
(02 , 910111213 , 'SecondData'),
(03 , 1415161718 , 'ThirthData')";
mysqli_query($Connection,$SampleData);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $StudentNumber = ($_POST["username"]);
    $Password = ($_POST["password"]);
    $query = "SELECT StudentPassword FROM `logindetails` WHERE StudentNumber = '$StudentNumber'";
    if(mysqli_query($Connection, $query) == true){
        echo("You are logged in");
    }
    else{
        echo("Incorrect password");
    };
}

?>