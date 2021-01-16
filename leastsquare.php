    <?php include 'db.php'; ?>
 
    <h4>  m=0.012238861785854, c= 17.550561797753 </h4>
    <h4> y = mx + c, </h4>

    <?php    
   $xs= array();
    $sql = "SELECT distinct crawldate from activity order by crawldate";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {
	 $xs[] =  $row['crawldate'] ; 

}
   $ys= array();
    $sql = "SELECT sum(sold) as sales from activity  group by crawldate";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {
	 $ys[] =  $row['sales'] ; 

}




 $sql = "SELECT sum(daycount) as totaldays from activity  where daycount >=1 ";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {
 $xnum =  $row['totaldays']; }

 $sql = "SELECT sum(sold) as sales from activity ";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {
 $ynum =  $row['sales'] ; }
 


?>

<hr>
<div class="heading">
    <div>Date</div>
    <div>y</div>
    <div>X(Deviation from middle value )</div>
    <div>X sq </div>
    <div>XY</div>
    <div>Yhat</div>

</div>
<hr>
<div class="body">
    <div>
<?php 
for ($i=0; $i <89 ; $i++) { echo $xs[$i]."<br>"; }
echo "</div>"; 
for ($i=0; $i <89 ; $i++) { echo $ys[$i]."<br>"; }
echo "<div></div>";

for ($i=0; $i <89 ; $i++) { echo 45 - $i; echo "<br>"; }
echo "<div></div>";
$sumxsq=0;
for ($i=0; $i <89 ; $i++) { echo  (45 - $i)*(45 - $i);echo "<br>"; 
$sumxsq=$sumxsq+(45 - $i)*(45 - $i);}

echo "<div></div>";
$sumxy=0;
for ($i=0; $i <89 ; $i++) { echo $ys[$i]*(45 - $i)."<br>";
$sumxy=$sumxy+$ys[$i]*(45 - $i);    
 } 
$a = 1562/89;
$m = $sumxy/$sumxsq;
echo "<div></div>";
$yhat=array();
for ($i=0; $i <89 ; $i++) {  echo $yhat[] = $a+$m*$i ."<br>"; 
}

echo "<div></div>";



?>
</div>
<hr>
<?php
echo "  calculation of a =>";
echo $a;
echo "  calculation of m =>";
echo $m;
?>
<style type="text/css">
body{font-family: Arial;}
.heading{ display:flex; justify-content: space-between; width: 100%}
.body{display: flex; justify-content: space-between; width: 100%}
</style>
