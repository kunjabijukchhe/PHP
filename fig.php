<html>
<head>
<title>Registration Successful</title>

</head>
<body>
    <?php
    echo "<h1>Your establishment has been registered successfully!</h1>";
    echo "The details are as follows:<br><br>";
    ?>
    <b>Establishment Name:</b> <?php echo  $_POST["estname"];?><br>
    <b>Proprietor Name:</b> <?php echo  $_POST["propname"];?><br>
    <b>PAN Card Number:</b> <?php echo  $_POST["panno"];?><br>
    <b>PAN Card Name:</b> <?php echo  $_POST["panname"];?><br>
    <b>Mobile Number:</b> <?php echo  $_POST["mob"];?> 
</body>
</html>