<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "curd";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST["submit"])){
// include 'db.php';
$sql = "INSERT INTO users (firstname, lastname,email, age, location) VALUES ('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['email']."','".$_POST['age']."','".$_POST['location']."')";

    if ($conn->query($sql) === TRUE) {  
        echo "User has been added to the database successfully!";
    }
    else
    {
        echo "Error adding the employee to the database!";
    }


$conn->close();
}
?>



