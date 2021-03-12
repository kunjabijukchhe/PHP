<html>
<head>
<title></title>

</head>
<body>
    <?php
    echo "<h3>FOODTRUCK OFFICAIL RECEIPT</h3>";

    ?>
    <?php echo "<i>", $_POST["name"],"</i>";?><br>
    <?php echo  "<i>",$_POST["address"],"</i>";?><br>
    <?php echo  "<i>",$_POST["phone"],"</i>";?><br>

    <table border="1" style="margin-top:30px;">
        <thead>
        <tr>
            <th><b>Menu</b></th>
            <th><b>Price</b></th>
            <th><b>  Quantity  </b></th>
            <th><b>  Total Price  </b></th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>Chicken Teriyaki</td>
            <td>Rs. 11.55</td>
            <td><?php echo $_POST["chicken"];?></td>
            <td>   
                <?php echo 11.55 *$_POST["chicken"];
                
                ?>
            </td>
           
          </tr>
          <tr>
            <td>Italian BMT</td>
            <td>Rs. 13.254</td>
            <td><?php echo $_POST["italian"];?></td>
            <td>    <?php echo  13.254 *$_POST["italian"];?></td>
          </tr>

          <tr>
            <td>Veggie Delight</td>
            <td>Rs. 9.90</td>
            <td><?php echo $_POST["veggie"];?></td>
            <td> <?php echo 9.90 *  $_POST["veggie"];?></td>
          </tr>
          </tbody>
          <tfoot>
          <tr>
              <td colspan="3">Total price to pay:(Rs.)</td>
              <td><?php echo 11.55 *$_POST["chicken"] +  13.254 *$_POST["italian"] + 9.90 *  $_POST["veggie"];?></td>
          </tr>
          </tfoot>
    </table>

</body>
</html>