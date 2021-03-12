<?php 
if(isset($_POST['submit'])){
    $a=$_POST["a"];
    $b=$_POST["b"];
    $c=$_POST["c"];
    $sum=$a+$b+$c;
    echo "a = $a";
    echo "<br>";

    echo "b = $b";
    echo "<br>";

    echo "c = $c";
    echo "<br>";
       
    echo "The total is $sum";
}

?>