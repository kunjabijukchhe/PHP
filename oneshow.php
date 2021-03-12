<?php 
if(isset($_POST['submit'])){
    echo "Hello, ";
    echo $_POST["fname"]." " .$_POST["lname"];
    echo ".<br>";
       
    echo "You are ";
    echo $_POST['gender'];
    echo ", and you like ";
    if(!empty($_POST['foods'])){
        foreach($_POST['foods'] as $checked){
          echo $checked."</br>";
        }
      }
    echo "<i>".$_POST['comment']."</i>";
    echo "<br>";

    echo "You're favorite time is ";
    echo $_POST['day'];
    echo ", and you passed ";
    echo $_POST['education'];
    echo "!";
   }

    ?>