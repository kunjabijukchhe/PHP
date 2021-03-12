<html>
<head>
<title>Online PHP Script Execution</title>
</head>
<body>
<?php
$marks = array("fin" => 45, "bray" => 67, "dave" => 33);
echo "Mark of fin is = <br>";
echo "Mark of bray is <br>";
echo 'Mark of dave is <br>';
$marks ['dave'] = "max"; 
$marks ['fin'] = "min"; 
$marks ['bray'] = "avg";
echo "Mark of fin is<br>";
echo "Mark of bray is <br>";
echo "Mark of dave is <br>";
?>

</body>
</html>