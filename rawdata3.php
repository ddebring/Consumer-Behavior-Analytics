<a href="rawdata.php"><b>Data - User Activity</b></a>&nbsp;<a href="rawdata2.php"><b>Data -  Products</b></a>&nbsp;<a href="rawdata3.php"><b>Data -  Users</b></a>
<table width="100%">
  <tr>
  <td><b>User id</b></td>
  <td><b>Gender</b></td>
  <td><b>Age</b></td>
  <td><b>Location</b></td>
  <td><b>Personality</b></td>
 
</tr><tr>

<?php
include 'dbconfig.php';
$sql = "SELECT * FROM users"; 
$result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
$gender= $row["gender"];
 if ($gender=='F') {
     $gender='Female';
   }else {
     $gender='Male';
   }
$person= $row["personality"];
 if ($person=='O') {
     $person='Open Minded ';
   }elseif($person=='C')  {
     $person='Conscientious, Competetant';
   }elseif($person=='E')  {
     $person='Full of Life, Frank';
   }elseif($person=='A')  {
     $person='Submissive, Agreeable';
   }elseif($person=='N')  {
     $person='Sentimental, Vulnerable';
   }

   echo "<td>".$row["userid"]."</td>";
   echo "<td>".$gender."</td>";
   echo "<td>".$row["age"]."</td>";
   echo "<td>".$row["location"]."</td>";
  
   echo "<td>".$person."</td>";
 echo '</tr>';

    }
  }


?>

</table>
<title>Users Data</title>