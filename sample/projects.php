<?php include "projects.html"; ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("connection error". $conn->connect_error);
}
$sql = "select * from project";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        echo "<h3>Project Name:".$row["projectname"]."</h3>";
        echo "<h4>Description: " . $row["description"]. "</h4>";
        echo "<h4>Other Details: " . $row["otherdetails"]. "</h4>";
        echo "<hr>";
}
}
else {
    echo "0 results";
}

$conn->close();
?>
