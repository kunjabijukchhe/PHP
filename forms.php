<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php


$fname = $lname = $gender = $education = $skills = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = test_input($_POST["fname"]);
  $lname = test_input($_POST["lname"]);
  $gender = test_input($_POST["gender"]);
  $education = test_input($_POST["education"]);
  $skills = test_input($_POST["skills"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
      <form method = "post" action="show.php">
         <table>
            <tr>
               <td>First Name:</td>
             
               <td><input type = "text" name = "fname"></td>
            </tr>

            <tr>
               <td>Last Name:</td>
            
               <td><input type = "text" name = "lname"></td>
            </tr>

            <tr>
               <td>Gender:</td>
            
               <td>
            <select name="gender" id="gender">
                <option name = "gender" value="Male">Male</option>
                <option name = "gender" value="Female">Female</option>
            </select>
               </td>
               
            </tr>

            <tr>
               <td>Education:</td>
               </tr>
            <tr>
               <td><input type="radio" id="diploma" name="education" value="Diploma"> Diploma</td>

               </tr>
               <tr>
               <td><input type="radio" id="undergrads" name="education" value="Undergrads"> Undergrads</td>

               </tr>
               <tr>
               <td><input type="radio" id="postgrads" name="education" value="Postgrads"> Postgrads</td>
            </tr>

            <tr>
               <td>Please select your skills</td>
               </tr>
            <tr>
               <td><input type="checkbox" id="python" name="skills[]" value="Python"> Python</td>

               </tr>
               <tr>
               <td><input type="checkbox" id="angular" name="skills[]" value="Angular">Angular</td>

               </tr>
               <tr>
               <td><input type="checkbox" id="react" name="skills[]" value="React">React</td>
            </tr>
           

            <tr>
               <td>
                  <input type = "submit" name = "submit" value = "Submit">
               </td>
            </tr>
            
         </table>
      </form>
  </body>
</html>
