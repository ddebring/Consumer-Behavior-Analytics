    <?php include 'db.php'; ?>
    <h1>Linear Regression Predictions</h1>
    <a href="ml.php">Linear Regression</a>  | 
    <a href="leastsquare.php">Least Square Method</a>

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



$data=array();
for ($i=0; $i <89 ; $i++) { 
 $data[] = "{ x: ".$xs[$i].","."y: ".$ys[$i]."},";
}



?>
    <div>
<?php 
for ($i=0; $i <89 ; $i++) {  $xs[$i]."<br>"; }
 
for ($i=0; $i <89 ; $i++) {  $ys[$i]."<br>"; }


for ($i=0; $i <89 ; $i++) {  45 - $i;  "<br>"; }

$sumxsq=0;
for ($i=0; $i <89 ; $i++) {   (45 - $i)*(45 - $i); "<br>"; 
$sumxsq=$sumxsq+(45 - $i)*(45 - $i);}

$sumxy=0;
for ($i=0; $i <89 ; $i++) {  $ys[$i]*(45 - $i)."<br>";
$sumxy=$sumxy+$ys[$i]*(45 - $i);    
 } 
$a = 1562/89;
$m = $sumxy/$sumxsq;

$yhat=array();
for ($i=0; $i <89 ; $i++) {   $yhat[] = $a+$m*$i; 
}







?>




<?php
$data2=array();
for ($i=0; $i <89 ; $i++) { 
  $data2[] = "{ x: ".$xs[$i].","."y: ".$yhat[$i]."},";
}





?>


</div>
        
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
<style type="text/css">body{font-family: Arial;text-align: center;}a{color:#066;text-decoration:none;</style>
<body>	   
<canvas id="chart" style="width: 100%; height: 65vh;  margin-top: 10px;"></canvas>
<script>
	var ctx = document.getElementById("chart").getContext('2d');
    var scatterChart = new Chart(ctx, {
    type: 'scatter',
    data: {

        datasets: [{
            label: 'Actual Values',
            data: [<?php foreach ($data as $value) { echo $value; } ?>],
            backgroundColor: 'red',
            borderColor:'red',
		                borderWidth: 3	
        },{
            label: 'Predicted Values',
            data: [<?php foreach ($data2 as $value) { echo $value; } ?>],
            backgroundColor: 'blue',
            borderColor:'blue',
                        borderWidth: 3  
        }
        ]
    },
    options: {
        scales: {
            xAxes: [{
                type: 'linear',
               position: 'bottom'
            }]
        }
    }
});
			</script>
	    </div>
