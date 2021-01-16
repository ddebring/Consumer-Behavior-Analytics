<a href="rawdata.php"><b>Data - User Activity</b></a>&nbsp;<a href="rawdata2.php"><b>Data -  Products</b></a>&nbsp;<a href="rawdata3.php"><b>Data -  Users</b></a>
<table width="100%">
  <tr>
  <td><b>Activity id</b></td>
  <td><b>Product id</b></td>
  <td><b>User id</b></td>
  <td><b>Time Spent</b></td>
  <td><b>Crawl Date</b></td>
  <td><b>Product Sold</b></td>
  <td><b>Product Wishlisted</b></td>
</tr><tr>

<?php
include 'dbconfig.php';
$sql = "SELECT * FROM activity"; 
$result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
$sold= $row["sold"];
 if ($sold==1) {
     $sold='Sold';
   }else {
     $sold='Unsold';
   }
$wish= $row["wishlist"];
 if ($wish==1) {
     $wish='Wishlisted';
   }else {
     $wish='Not Wishlisted';
   }

   echo "<td>".$row["activityno"]."</td>";
   echo "<td>".$row["productid"]."</td>";
   echo "<td>".$row["userid"]."</td>";
   echo "<td>".$row["crawltime"]."&nbsp;sec</td>";
   echo "<td>".$row["crawldate"]."</td>";
   echo "<td>".$sold."</td>";
   echo "<td>".$wish."</td>";
 echo '</tr>';

    }
  }


?>

</table>
<title>Activity Data</title>
