<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php

$name = $email = $gender = $comment = $website = $box= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
//   $box=test_input($_POST["box"];
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
    
    <fieldset>
      <legend>Personal information</legend>

      <form method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         <table>
            <tr>
               <td>Name:</td>
               </tr>
            <tr>
               <td><input type = "text" name = "name"></td>
            </tr>

            <tr>
               <td>E-mail:</td>
            </tr>
            <tr>
               <td><input type = "text" name = "email"></td>
            </tr>

            <tr>
               <td>Website:</td>
            </tr>
            <tr>
               <td><input type = "text" name = "website"></td>
            </tr>

            <tr>
               <td>Comment:</td>
            </tr>
            <tr>
               <td><textarea name = "comment" rows = "5" cols = "40"></textarea></td>
            </tr>

            <tr>
               <td>Gender:</td>
            
               <td>
                 <input type = "radio" name = "gender" value = "male">Male
               </td>
               <td>
                 <input type = "radio" name = "gender" value = "female">Female
               </td>
               <td>
                  <input type = "radio" name = "gender" value = "male">Other
               </td>
            </tr>

            <td>
               <input type = "checkbox" name = "box" value = "male">I Accept all the condition
            </td>

            <tr>
               <td>
                  <input type = "submit" name = "submit" value = "Submit">
               </td>
            </tr>
         </table>
      </form>
      <?php 
       echo "Name:";
       echo $_POST["name"];
       echo "<br>";

       echo "Email:";
       echo $_POST["email"];
       echo "<br>";

       echo "Website:";
       echo $_POST["website"];
       echo "<br>";

       echo "Comment:";
       echo $_POST["comment"];
       echo "<br>";

       echo "Gender:";
       echo $_POST["gender"];
       echo "<br>";
       echo "I Accept all the condition";
      
    ?>


  </fieldset>
  </body>
</html>
