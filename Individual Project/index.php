<!doctype html>
<html>
<title>Individual Project</title>
<head></head>
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
<body>

 <?php 
   $entrydata= array( 
       "Name" => "नाम", 
       "Email" => "ईमेल", 
       "Date Of Birth" => "जन्म मिति", 
       "Gender" => "लिंग", 
 	 
    ); 
 
    $gender = array( 
       "Male" => "पुरुष", 
       "Female" => "महिला"  
   );  
 
   function english() 
   { 	 
   
    $link = "<a href='?lang=n'>Click here for Nepali</a>";
    echo $link;
       echo "<form Action = '/individual-project/submit.php' method='POST'>"; 

               $data = array_keys($GLOBALS['entrydata']);  
               $genders = array_keys($GLOBALS['gender']); 
               echo "<label for='name'>$data[0]:</label>";
               echo "<input type='text' name='name'><br>";


               echo "<label for='email'> $data[1]:</label>";
               echo "<input type='email' id='email' name='email'><br>";

               echo "<label for='dob'>$data[2]:</label>";
               echo "<input type='date' id='dob' name='dob'><br>";

               echo "<label for='gender'>$data[3]:</label>";
    
               echo "<input type='radio' name='gender' id='male' value='male'><label for='male'>$genders[0]</label>";
               echo "<input type='radio' name='gender' id='female' value='female'><label for='female'>$genders[1]</label><br>";
               
                
               echo "<input type='submit' value='Save'>";

       echo "</form>"; 

 
   } 
  
   function nepali() 
   { 
    $link = "<a href='?lang=en'>Click here for English</a>";
    echo $link;
       echo "<form Action = '/individual-project/submit.php' method='POST'>"; 

 	 
               $data = array_values($GLOBALS['entrydata']);  
               $genders = array_values($GLOBALS['gender']); 
            
               echo "<label for='name'>$data[0]:</label>";
               echo "<input type='text' name='name'><br>";


               echo "<label for='email'> $data[1]:</label>";
               echo "<input type='email' id='email' name='email'><br>";

               echo "<label for='dob'>$data[2]:</label>";
               echo "<input type='date' id='dob' name='dob'><br>";
               
               echo "<label for='gender'>$data[3]:</label>";
    
               echo "<input type='radio' name='gender' id='male' value='male'><label for='male'>$genders[0]</label>";
               echo "<input type='radio' name='gender' id='female' value='female'><label for='female'>$genders[1]</label><br>";
               
               echo "<input type='submit' value='Save'>";

               echo "</form>"; 

 
   }  
   

    
    error_reporting(0);
    $lang = "en"; 
    $lan = $_GET["lang"]; 
    if($lan == 'n') 
    { 
        nepali(); 
         
    }  
    else
    { 
        english(); 
    } 

    
   ?>
   
</body> 
</html> 



