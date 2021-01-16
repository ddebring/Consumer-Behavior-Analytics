<a href="rawdata.php"><b>Data - User Activity</b></a>&nbsp;<a href="rawdata2.php"><b>Data -  Products</b></a>&nbsp;<a href="rawdata3.php"><b>Data -  Users</b></a>
<table width="100%">
  <tr>
  <td><b>Product id</b></td>
  <td><b>Price</b></td>
  <td><b>Color</b></td>
  <td><b>Brand</b></td>
  <td><b>Ratings</b></td>

</tr><tr>

<?php
include 'dbconfig.php';
$sql = "SELECT * FROM products"; 
$result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
     $brand=$row["brand"];
     if ($brand==1) {
       $brand ='branded';
     }else{
      $brand='unbranded';
     }

   echo "<td>".$row["productid"]."</td>";
   echo "<td>Rs.&nbsp;".$row["price"]."</td>";
   echo "<td>".$row["color"]."</td>";
   echo "<td>".$brand."</td>";
   echo "<td>".$row["ratings"]."/5</td>";

 echo '</tr>';

    }
  }


?>

</table>
<title>Products Data</title>