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
?>
   
<!DOCTYPE html>
<html>
<title>Individual Project</title>
<head></head>
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
<body>
    <?php if ($lang=="e"){
        echo "<a href='?lang=n'>Click here for Nepali</a>";
    }
    else{
        echo "<a href='?lang=e'>Click here for English</a>";
    }
    ?>
    <form action = '/individual-project/submit.php' method='POST'>
    <?php echo lang("Name")?>:<input type="text" id="name"><br>
    <?php echo lang("Email")?>:<input type="email" id="email" name="email"><br>
    <?php echo lang("Date Of Birth")?>:<input type="date" id="dob" name="dob"><br>
    <?php echo lang("Gender")?>: <select>
        <option value="m"><?php echo lang("Male")?></option>
        <option value="f"><?php echo lang("Female")?></option>
    </select> <br>
    <input type="submit" value="Save">
    </form>

</body> 

</html> 

