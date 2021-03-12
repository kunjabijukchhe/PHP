<!doctype html>
<html>
<title>Individual Project</title>
<head></head>
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
<body>

 <?php 
   $lang=isset($_GET['lang'])?$_GET['lang']:"e";
   function lang($key) 
   {
      $translation= array( 
          "Name" => "नाम", 
          "Email" => "ईमेल", 
          "Date Of Birth" => "जन्म मिति", 
          "Gender" => "लिंग",
          "Male" => "पुरुष",
          "Female" => "महिला"    
       ); 
       global $lang;
       if($lang=='e'){
           return $key;
       }
       return $translation[$key];
   } 
   if ($lang=="e"){
        echo "<a href='?lang=n'>Click here for Nepali</a>";
    }
    else{
         echo "<a href='?lang=e'>Click here for English</a>";
    }
       echo "<form Action = '/individual-project/submit.php' method='POST'>"; 

               
               echo "<label for='name'>". lang("Name").":</label>";
               echo "<input type='text' name='name'><br>";


               echo "<label for='email'>".  lang("Email").":</label>";
               echo "<input type='email' id='email' name='email'><br>";

               echo "<label for='dob'>". lang("Date Of Birth").":</label>";
               echo "<input type='date' id='dob' name='dob'><br>";

               echo "<label for='gender'>". lang("Gender").":</label>";
    
               echo "<input type='radio' name='gender' id='male' value='male'>";
               echo "<label for='male'>".lang("Male")."</label>";
               echo "<input type='radio' name='gender' id='female' value='female'>";
               echo "<label for='female'>".lang("Female")."</label>";
               echo "<br>";
               
                
               echo "<input type='submit' value='Save'>";

       echo "</form>"; 
  
   ?>
   
</body> 
</html> 



