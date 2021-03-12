<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>My Contact Details</h1>
    <form method = "post" action="contactinfo.php">
         <p>Please enter your contact details:</p>
         <label for="lname">Last name:</label>
         <input type = "text" name = "lname"><br><br>

         <label for="fname">First name:</label>
         <input type = "text" name = "fname"><br><br>
        
        <label for="add1">Address line 1:</label>
        <input type = "text" name = "add1"><br><br>

        <label for="add2">Address line 2:</label>
        <input type = "text" name = "add2"><br><br>

        <label for="towncity">Town/city:</label>
        <input type = "text" name = "towncity"><br><br>

        <label for="pcode">Post code:</label>
        <input type = "text" name = "pcode"><br><br>

        <label for="tel">Telephone:</label>
        <input type = "text" name = "tel"><br><br>

        <label for="email">E-mail:</label>
        <input type = "email" name = "email"><br><br>

        <input type="submit" name = "submit" value="Submit">

    </form>
  </body>
</html>
