<!DOCTYPE html>
<html>
  <head>
    <title>How to put PHP in HTML - foreach Example</title>
  </head>
  <body>
    
    <h1>List of Employees</h1>
    <div>
        <form name="register" method="post" action="db.php">
        <input name="csrf" type="hidden" value="<?php echo escape($_SESSION['csrf']); ?>">
        
        <label for="firstname">First Name</label>
        <input type="text" name="firstname" id="firstname">
        <label for="lastname">Last Name</label>
        
        <input type="text" name="lastname" id="lastname">
        <label for="email">Email Address</label>
        <input type="text" name="email" id="email">
        <label for="age">Age</label>
        <input type="text" name="age" id="age">
        <label for="location">Location</label>
        <input type="text" name="location" id="location">
        <input type="submit" name="submit" value="Submit">
        </form>
    </div>

  </body>
</html>