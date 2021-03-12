<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    #text
    {
        resize: none;
        overflow-y: scroll;

    }
    </style>
  </head>
  <body>
  <form method = "post" action="oneshow.php">
        <label for="">First Name:</label>
        <input type = "text" name = "fname">
        <br><br>

        <label for="">Last Name:</label>
        <input type = "text" name = "lname"></td>
        <br><br>

        <label for="">Gender:</label>
        <br>
        Male<input type="radio" id="male" name = "gender" value="male">
        <br>
        Female<input type="radio" id="female" name = "gender" value="female">
        <br><br>

        <label for="">Please select your skills:</label>
        <br>
        Steak<input type="checkbox" id="steak" name="foods[]" value="Steak">
        <br>
        Pizza<input type="checkbox" id="pizza" name="foods[]" value="Pizza">
        <br>
        Chicken<input type="checkbox" id="chicken" name="foods[]" value="Chicken">
        <br><br>

        <textarea name="comment"  cols="30" rows="8" id= "text"></textarea>
        <br><br>

        <label for="">Select a Level of Education:</label>
        <br>
        <select name="education" id="education">
                <option name = "education" value="College">College</option>
                <option name = "education" value="HighSchool">HighSchool</option>
        </select>
        <br><br>

        <label for="">Select your favorite time of day:</label>
        <br>
        <select name="day" id="day">
                <option name = "day" value="Morning">Morning</option>
                <option name = "day" value="Day">Day</option>
                <option name = "day" value="Night">Night</option>
        </select>
        <br><br>

        <input type = "submit" name = "submit" value = "Submit">
      </form>
  </body>
</html>




