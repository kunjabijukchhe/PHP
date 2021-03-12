<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration Form</title>
  </head>
  <body>
    <h3 style="text-align: center;">Please fill up the form to complete registraztion</h3>
    <hr>
    <form action="register.php" method="POST">

      <table>
        <tr>
          <th>First Name</th>
          <td><input type="text" name="fname" value=""></td>
        </tr>

        <tr>
          <th>Last Name</th>
          <td><input type="text" name="lname" value=""></td>
        </tr>

        <tr>
          <th>Date of Birth</th>
          <td><input type="date" name="dob" value=""></td>
        </tr>

        <tr>
          <th>Percentage</th>
          <td><input type="number" name="percentage" step='0.1'></td>
        </tr>

      </table>
      <input type="submit" name="Submit" value="Submit">


      <?php
      // if(!empty($_GET)){
      //   echo "<br>"."Following are the student details:"."<br>";
      //   echo "Name:".$_GET['fname'].$_GET['lname']."<br>";
      //   echo "Date of Birth:".$_GET['dob']."<br>";
      //   echo "Percentage:".$_GET['percentage']."<br>";
      // }
      if($_SERVER['REQUEST_METHOD']=='POST'){
        echo "<br>"."Following are the student details:"."<br>";
        echo "Name:".$_POST['fname'].$_POST['lname']."<br>";
        echo "Date of Birth:".$_POST['dob']."<br>";
        echo "Percentage:".$_POST['percentage']."<br>";
      }
      ?>
    </form>
  </body>
</html>
