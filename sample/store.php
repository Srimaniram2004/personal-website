<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die ("connection failed" + $conn->connect_error);
}
    $projectname = $_POST["projectName"];
    $description = $_POST ["description"];
    $otherdetails = $_POST["otherDetails"];

    $sql = "insert into project (projectname,description,otherdetails)values('$projectname','$description','$otherdetails')";

if($conn->query ($sql) === true){
    echo "new record inserted sucessfully";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
