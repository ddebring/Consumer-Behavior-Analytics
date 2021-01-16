    <?php include 'db.php'; ?>
    <h2>m=sum((x-xbar)(y-ybar))/sum((x-xbar)(x-xbar))</h2>
    <h4> xnum = 4005, ynum = 1562, xbar = 45, ybar = 17.550561797753, sum((x-xbar)(y-ybar))=842, sum((x-xbar)(x-xbar))= 58740, m=0.01433435478 </h4>
    <h4> y = mx + c, 

    <?php    
   $xs= array();
    $sql = "SELECT distinct daycount from activity  where daycount >=1 order by daycount";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {
	 $xs[] =  $row['daycount'] ; 

}
   $ys= array();
    $sql = "SELECT sum(sold) as sales from activity  group by crawldate";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {
	 $ys[] =  $row['sales'] ; 

}




 $sql = "SELECT sum(daycount) as totaldays from activity  where daycount >=1 ";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {
 $xnum =  $row['totaldays']; }
 $xbar = $xnum/89;

 $sql = "SELECT sum(sold) as sales from activity ";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {
 $ynum =  $row['sales'] ; }
 $ybar = $ynum/89;

$m = 0.01433435478;
$MSERR= 17.1005948897;
echo "c = y - mx =>";
echo $ybar - $xbar*$m;


?>
, regression line => y = 0.01433435478x + 16.905515832653, Mean Squared Error = <b>1/N*sum((y-y predicted)(y-y predicted))</b>=1/89*1521.9529451822=>17.1005948897<br>
TSS = 1534.0224719101, RSS = 1521.9529451822, R Squard = 1- RSS/TSS => 0.00786789435 or 0.78% accuracy.</h4>
<hr>
<div class="heading">
    <div>x</div>
    <div>y</div>
    <div>x-xbar</div>
    <div>y-ybar</div>
    <div>(x-xbar)(y-ybar)</div>
    <div>(x-xbar)(x-xbar)</div>
    <div>TSS=(y-ybar)(y-ybar)</div>
    <div>Predicted Values of y(yhat)</div>
    <div>RSS=(y-yhat)(y-yhat)</div>
</div>
<hr>
<div class="body">
    <div>
<?php 
for ($i=0; $i <89 ; $i++) { echo $xs[$i]."<br>"; }
echo "</div>"; 
for ($i=0; $i <89 ; $i++) { echo $ys[$i]."<br>"; }
echo "<div></div>";
$xmxbar = array();
for ($i=0; $i <89 ; $i++) { echo $xmxbar[] = $xs[$i]-45; echo "<br>"; }
echo "<div></div>";
$ymybar = array();
for ($i=0; $i <89 ; $i++) { echo $ymybar[] = $ys[$i]-17.550561797753 ;echo "<br>"; }
echo "<div></div>";
$sumxmx=0;
for ($i=0; $i <89 ; $i++) { echo $xmxbar[$i]*$ymybar[$i]."<br>";
$sumxmx= $xmxbar[$i]*$ymybar[$i]+$sumxmx; }
 $sumxmx;
echo "<div></div>";
$sumymy=0;
for ($i=0; $i <89 ; $i++) { echo $xmxbar[$i]*$xmxbar[$i]."<br>"; 
$sumymy= $xmxbar[$i]*$xmxbar[$i]+$sumymy;}
 $sumymy;
echo "<div></div>";

$tss=0;
for ($i=0; $i <89 ; $i++) { echo $ymybar[$i]*$ymybar[$i]."<br>"; 
$tss= $ymybar[$i]*$ymybar[$i]+$tss;}
  $tss;
echo "<div></div>";
 $m= $sumxmx/ $sumymy;
 $ypred = array();
 for ($i=1; $i <90 ; $i++) { echo $ypred[] = 0.01433435478*$i + 16.905515832653; echo "<br>"; }
echo "<div></div>";

$mse=0;
for ($i=0; $i <89 ; $i++) { echo ($ys[$i]-$ypred[$i])*($ys[$i]-$ypred[$i])."<br>"; 
$mse= ($ys[$i]-$ypred[$i])*($ys[$i]-$ypred[$i])+$mse;}

?>
</div>

<style type="text/css">
body{font-family: Arial;}
.heading{ display:flex; justify-content: space-between; width: 100%}
.body{display: flex; justify-content: space-between; width: 100%}
</style>
<hr>
<h4>
    calclated intercept c => 16.905515832653, initial m=0.01433435478, equation => yhat = <b>m</b>x + 16.905515832653,
    </h4>
<div class="heading">
    <div>iteration</div>
     <div>sum of new yhat</div>
    <div>RSS</div>
    <div>RSS/TSS</div>
    <div>R SQ</div>
    <div>Accuracy %</div>
  
</div>
<hr>

<div class="heading">
    <div>testing m</div>

    </div>
     <div class="body">
<?php 

$sumyhatnw=0;
$newrss=0;
for ($i=0; $i <89 ; $i++) { 
  echo $yhatnew=1*$i + 16.905515832653;
  $sumyhatnw=$sumyhatnw+$yhatnew;
  echo "............................................................................";
  echo $newrs = ($ys[$i]-(1*$i + 16.905515832653))*($ys[$i]-(1*$i + 16.905515832653));
  echo "<br>";
  $newrss=$newrss+ $newrs;



}


echo $sumyhatnw;
echo "............................................................................";
echo $newrss;
echo "............................................................................";
echo $coeff=$newrss/$tss;
$last = (1-$coeff)*100; 
echo "Accuracy Percentage..............". round($last,2)."%";



echo "</div>"; 

?>

<hr>

<div class="heading">
    <div>2- testing m</div>

    </div>
     <div class="body">
<?php 

$sumyhatnw=0;
$yhatmybar=0;
$newrss=0;
for ($i=0; $i <89 ; $i++) { 
   $yhatnew=0.014*$i + 16.905515832653;
  $sumyhatnw=$sumyhatnw+$yhatnew;

   "............................................................................";
   $newrs = ($ys[$i]-(0.014*$i + 16.905515832653))*($ys[$i]-(0.014*$i + 16.905515832653));
   "............................................................................";
   $ys[$i];
   "...................";
  echo ($ys[$i]-17.550561797753)*($ys[$i]-17.550561797753);
 "...................";
 ($yhatnew-17.550561797753)*($yhatnew-17.550561797753);
 $yhatmybar =  $yhatmybar + ($yhatnew-17.550561797753)*($yhatnew-17.550561797753);


  echo "<br>";
  $newrss=$newrss+ $newrs;



}


echo $sumyhatnw;
echo "............................................................................";
echo $newrss;
echo "............................................................................";
echo $coeff=$newrss/$tss;
$last = (1-$coeff)*100; 
echo "Accuracy Percentage..............". round($last,2)."%";



echo "</div>"; 

?>