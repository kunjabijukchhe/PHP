<?php 
if(isset($_POST['submit'])){

    echo "Last Name: " ;
    echo $_POST["lname"];
    echo "<br>";

    echo "First Name: ";
    echo $_POST["fname"];
    echo "<br>";

    echo "Address line 1: ";
    echo  $_POST["add1"];
    echo "<br>";

    echo "Address line 2: ";
    echo $_POST["add2"];
    echo "<br>";

    echo "Town/city: ";
    echo $_POST["towncity"];
    echo "<br>";
    
    echo "Post Code: ";
    echo $_POST["pcode"];
    echo "<br>";

    echo "Telephone: ";
    echo $_POST["tel"];
    echo "<br>";

    echo "Email: ";
    echo $_POST["email"];
    echo "<br>";
    
}

?>