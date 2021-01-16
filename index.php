
<!DOCTYPE html>
<html>
<head>
	<title>Minor</title>
</head>
<body>
	<?php include 'db.php'; 

 $sql = "SELECT SUM(products.price) as Sales FROM products join activity on products.productid=activity.productid WHERE activity.sold=1 ";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $price =  $row['Sales'] ;  }
  $sql = "SELECT SUM(products.price) as Sales FROM products join activity on products.productid=activity.productid  ";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $tprice =  $row['Sales'] ;  }
    ?>

    <table style="margin-left: 20%;width: 60%">

	<td width="30%">
		<div class="pads2" style="background: #f00">
			<h2>Total Sales </h2>
			<h1>₹<?php echo number_format($price) ?></h1>
		</div>
	</td>
	<td width="30%">
		<div class="pads2" style="background: #ff0;color:#000">
			<h2>Total GMV </h2>
		<h1>₹<?php echo number_format($tprice) ?></h1>
		</div>
	</td>
	
</table>



<div class="buttonone">

	<a href="importCSV.php" style="color: #000">Import CSV</a>
</div>
<br><br>
<table style="margin-left: 20%;width: 60%">
	<tr>
	<td width="33.3%">
		<div class="pads">
			<a href="rawdata.php">Rawdata</a>
		</div>
	</td>
	<td width="33.3%">
		<div class="pads">
			<a href="testdata.php">Linear Regression</a>
		</div>
	</td>
	<td width="33.3%">
		<div class="pads">
			<a href="graphs.php">Analytics </a>
		</div>
	</td>
	
</tr>
</table>
</body>

</html>
<style type="text/css">
	.buttonone{margin:auto;background: #fff;height: 35px;width: 300px;margin-top: 15%;border-radius: 2px;box-shadow: 0px 5px 30px -1px #000;padding: 1px 5px;font-size: 25px;text-align: center;opacity: 0.7;}
	a{text-decoration: none; color: #fff}
	.pads{width: 75%;opacity: 0.9;border-radius: 2px;background: #000; text-align: center;padding: 40px}
	.pads2{width: 80%;opacity: 0.9;border-radius: 2px;text-align: center;padding: 40px;color: #fff;margin-top: 50px}
	body{margin: 0; padding: 0;background: url('dome.jpg');background-size: cover;justify-content: center;text-align: center;font-family: Arial, sans-serif;}
</style>