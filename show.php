<!-- <?php 
      //  echo "<h2>Your Given details are as :</h2>";
      //  echo "Name:";
      //  echo $_POST["name"];
      //  echo "<br>";

      //  echo "Email:";
      //  echo $_POST["email"];
      //  echo "<br>";

      //  echo "Website:";
      //  echo $_POST["website"];
      //  echo "<br>";

      //  echo "Comment:";
      //  echo $_POST["comment"];
      //  echo "<br>";

      //  echo "Gender:";
      //  echo $_POST["gender"];
      //  echo "<br>";
      //  echo "I Accept all the condition";
    ?>
    -->

    <?php 
   
   if(isset($_POST['submit'])){
       if($_POST['gender']=="Male")
       {
        echo "Hello Mr. ";
        echo $_POST["fname"]." " .$_POST["lname"];
        echo "<br>";
       }
       else{
        echo "Hello Ms. ";
        echo $_POST["fname"]." " .$_POST["lname"];
        echo "<br>";

       }

       echo "Congratulations for completing your ";
       echo $_POST["education"];
       echo "<br>";


        if(!empty($_POST['skills'])){
        foreach($_POST['skills'] as $checked){
          echo $checked."</br>";
        }
      }
  
       echo "We wish you all the best";
   }

    ?>


