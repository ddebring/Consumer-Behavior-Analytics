<?php include 'db.php'; ?>        
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
<title>Insights</title>
<style type="text/css">body{font-family: Arial;margin:0;padding: 0;color: #000;text-align: center;}

.chart{width: 100%; height: 100%; background: #fff; border-radius: 10px; margin-top: 10px;}
</style>
<body>

<h1 style="margin: 100px;">Insights & Analytics</h1>
<table style="width: 80%;margin-left: 15%; height: 100vh">

    <td >

            <h2>Consumer Location Insight</h2>
      <?php    
     $person = '';$usernose = '';
    $sql = "SELECT   count(userid) as usernose, location FROM users  group by location ";
    $result = mysqli_query($mysqli, $sql);{
    while ($row = mysqli_fetch_array($result)) {
       $person = $person . '"'. $row['location'] .'",';
        $usernose = $usernose . '"'. $row['usernose'] .'",';

    }
}
     $person = trim($person,",");
     $usernose = trim($usernose,",");

   
     ?>
        <div style="width:1100px; height: 600px;">
            <canvas id="locationchart" class="chart" style=""></canvas>
            <script>
                var ctx = document.getElementById("locationchart").getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [<?php echo $person; ?>],
                    datasets: 
                    [{
                        label: 'Consumers in Number',
                        data: [<?php echo $usernose; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    }]
                },
                           
            });
            </script>
     </div> 



    <table width="100%">
       <td width="50%">
  
     <h2>Consumer Personality Insight</h2>
      <?php    
     $person = '';$usernose = '';
    $sql = "SELECT   count(personality) as usernose, personality FROM users WHERE personality='O'||personality='C'||personality='E'||personality='A'||personality='N' group by personality ";
    $result = mysqli_query($mysqli, $sql);{
    while ($row = mysqli_fetch_array($result)) {
       $person = $person . '"'. $row['personality'] .'",';
        $usernose = $usernose . '"'. $row['usernose'] .'",';

    }
}
     $person = trim($person,",");
     $usernose = trim($usernose,",");

   
     ?>
        <div style="width:550px; height: 350px;">
            <canvas id="chart2" class="chart" style=""></canvas>
            <script>
                var ctx = document.getElementById("chart2").getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [<?php echo $person; ?>],
                    datasets: 
                    [{
                        label: 'Consumers in Number',
                        data: [<?php echo $usernose; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    }]
                },
                           
            });
            </script>
     </div> 
         <h2>Product Numbers by Prices</h2>
      <?php    
     $person = '';$usernose = '';
    $sql = "SELECT   count(productid) as usernose, price FROM products group by price ";
    $result = mysqli_query($mysqli, $sql);{
    while ($row = mysqli_fetch_array($result)) {
       $person = $person . '"'. $row['price'] .'",';
        $usernose = $usernose . '"'. $row['usernose'] .'",';

    }
}
     $person = trim($person,",");
     $usernose = trim($usernose,",");

   
     ?>
        <div style="width:550px; height: 350px;">
            <canvas id="productprice" class="chart" style=""></canvas>
            <script>
                var ctx = document.getElementById("productprice").getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [<?php echo $person; ?>],
                    datasets: 
                    [{
                        label: 'Products in Number',
                        data: [<?php echo $usernose; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    }]
                },
                           
            });
            </script>
     </div> 
    

     <h2>Product Numbers by Colors</h2>
      <?php    
     $person = '';$usernose = '';
    $sql = "SELECT   count(productid) as usernose, color FROM products group by color ";
    $result = mysqli_query($mysqli, $sql);{
    while ($row = mysqli_fetch_array($result)) {
       $person = $person . '"'. $row['color'] .'",';
        $usernose = $usernose . '"'. $row['usernose'] .'",';

    }
}
     $person = trim($person,",");
     $usernose = trim($usernose,",");

   
     ?>
        <div style="width:550px; height: 350px;">
            <canvas id="productcolor" class="chart" style=""></canvas>
            <script>
                var ctx = document.getElementById("productcolor").getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [<?php echo $person; ?>],
                    datasets: 
                    [{
                        label: 'Products in Number',
                        data: [<?php echo $usernose; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    }]
                },
                           
            });
            </script>
     </div> 
    </td>

















 
   
     <td width="50%">
  
     <h2>Consumer Age Insight</h2>
      <?php    
     $person = '';$usernose = '';
    $sql = "SELECT   count(age) as usernose, age FROM users  group by age ";
    $result = mysqli_query($mysqli, $sql);{
    while ($row = mysqli_fetch_array($result)) {
       $person = $person . '"'. $row['age'] .'",';
        $usernose = $usernose . '"'. $row['usernose'] .'",';

    }
}
     $person = trim($person,",");
     $usernose = trim($usernose,",");

   
     ?>
        <div style="width:550px; height: 350px;">
            <canvas id="chart4" class="chart" style=""></canvas>
            <script>
                var ctx = document.getElementById("chart4").getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [<?php echo $person; ?>],
                    datasets: 
                    [{
                        label: 'Consumers by Age',
                        data: [<?php echo $usernose; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    }]
                },
                           
            });
            </script>
     </div> 

      <h2>Consumer Gender Insight</h2>
      <?php    
     $person = '';$usernose = '';  $person2 = '';$usernose2 = '';
    $sql = "SELECT   count(gender) as usernose, gender FROM users group by gender";
    $result = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($result)) {
       $person = $person . '"'. $row['gender'] .'",';
        $usernose = $usernose . '"'. $row['usernose'] .'",';

    }
     $person = trim($person,",");
      $usernose = trim($usernose,",");

   
     ?>
        <div style="width:550px; height: 350px;">
            <canvas id="genderchart" class="chart" style=""></canvas>
            <script>
                var ctx = document.getElementById("genderchart").getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: [<?php echo $person; ?>],
                    datasets: 
                    [{
                        label: 'Data 1',
                        data: [<?php echo $usernose; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#fff',
                        borderWidth: 4
                    },

                   ]
                },
                           
            });
            </script>
     </div> 
 <h2>Product Numbers by Brands</h2>
      <?php    
     $person = '';$usernose = '';
    $sql = "SELECT   count(productid) as usernose, brand FROM products group by brand ";
    $result = mysqli_query($mysqli, $sql);{
    while ($row = mysqli_fetch_array($result)) {
       $person = $person . '"'. $row['brand'] .'",';
        $usernose = $usernose . '"'. $row['usernose'] .'",';

    }
}
     $person = trim($person,",");
     $usernose = trim($usernose,",");

   
     ?>
        <div style="width:550px; height: 350px;">
            <canvas id="productbrand" class="chart" style=""></canvas>
            <script>
                var ctx = document.getElementById("productbrand").getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Branded','Local'],
                    datasets: 
                    [{
                        label: 'Products in Number',
                        data: [<?php echo $usernose; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#fff',
                        borderWidth: 4
                    }]
                },
                           
            });
            </script>
     </div> 
    
    </td>

</table>
</td>
</table>
   
<table style="width: 80%;margin-left: 15%; height: 100vh">

    <td >

            
    <table width="100%">
       <td width="50%">
  <h2>Products Bought by 502 users</h2>
        <?php     $date = '';$sold = '';
    $sql = "SELECT distinct activity.userid  FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 ";
    $result = mysqli_query($mysqli, $sql);{
    while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ; }
         $rowcount=mysqli_num_rows($result);
   }
 $sql2 = "SELECT distinct activity.userid  FROM users join activity on users.userid=activity.userid WHERE activity.sold=0 ";
    $result2 = mysqli_query($mysqli, $sql2);{
    while ($row = mysqli_fetch_array($result2)) {  $person =  $row['userid'] ; }
     $rowcount2=mysqli_num_rows($result2);
}

    
  
     ?>
        <div style="width:550px; height: 350px;">
            <canvas id="chart" class="chart" style=""></canvas>
            <script>
                var ctx = document.getElementById("chart").getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Total Distinct Sessions'],

                    datasets: 
                    [{
                        label: 'Actually Bought the Product',
                        data: [<?php echo $rowcount; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    },
                    {
                        label: 'Not Bought the Product',
                        data: [<?php echo $rowcount2; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    }]
                },
                options: {
    scales: {
        yAxes: [{
            ticks: {
                min: 200
              
            }
        }]
    }
}           
            });
            </script>
     </div> 
    
 <h2>Total Units Sold Color Wise Distribution</h2>
        <?php     $date = '';$sold = '';
   $sql = "SELECT * FROM products join activity on products.productid=activity.productid WHERE activity.sold=1 AND products.color='red'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['color'] ;  }
      $redcolor=mysqli_num_rows($result);
  $sql = "SELECT * FROM products join activity on products.productid=activity.productid WHERE activity.sold=1 AND products.color='blue'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['color'] ;  }
      $bluecolor=mysqli_num_rows($result);
  $sql = "SELECT * FROM products join activity on products.productid=activity.productid WHERE activity.sold=1 AND products.color='green'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['color'] ;  }
      $greencolor=mysqli_num_rows($result);
  $sql = "SELECT * FROM products join activity on products.productid=activity.productid WHERE activity.sold=1 AND products.color='yellow'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['color'] ;  }
      $yellowcolor=mysqli_num_rows($result);
  $sql = "SELECT * FROM products join activity on products.productid=activity.productid WHERE activity.sold=1 AND products.color='white'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['color'] ;  }
      $whitecolor=mysqli_num_rows($result);
  $sql = "SELECT * FROM products join activity on products.productid=activity.productid WHERE activity.sold=1 AND products.color='black'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['color'] ;  }
      $blackcolor=mysqli_num_rows($result);
  $sql = "SELECT * FROM products join activity on products.productid=activity.productid WHERE activity.sold=1 AND products.color='orange'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['color'] ;  }
      $orangecolor=mysqli_num_rows($result);


  
     ?>
        <div style="width:550px; height: 350px;">
            <canvas id="colorch" class="chart" style=""></canvas>
            <script>
                var ctx = document.getElementById("colorch").getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Total Units bought under sessions'],

                    datasets: 
                    [{
                        label: 'Red',
                        data: [<?php echo $redcolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Blue',
                        data: [<?php echo $bluecolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Green',
                        data: [<?php echo $greencolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Yellow',
                        data: [<?php echo $yellowcolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'White',
                        data: [<?php echo $whitecolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Black',
                        data: [<?php echo $blackcolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Orange',
                        data: [<?php echo $orangecolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    }
                    ]
                },
                options: {
    scales: {
        yAxes: [{
            ticks: {
                min: 0
            }
        }]
    }
}           
            });
            </script>
     </div> 





<h2>Brand vs Local</h2>
        <?php     $date = '';$sold = '';
    $sql = "SELECT * FROM products join activity on products.productid=activity.productid WHERE activity.sold=1 AND products.brand = 1";
    $result = mysqli_query($mysqli, $sql);{
    while ($row = mysqli_fetch_array($result)) {  $person =  $row['brand'] ; }
         $rowcount=mysqli_num_rows($result);
   }
 $sql2 = "SELECT * FROM products join activity on products.productid=activity.productid WHERE activity.sold=1 AND products.brand = 0 ";
    $result2 = mysqli_query($mysqli, $sql2);{
    while ($row = mysqli_fetch_array($result2)) {  $person =  $row['brand'] ; }
     $rowcount2=mysqli_num_rows($result2);
}

    
  
     ?>
        <div style="width:550px; height: 350px;">
            <canvas id="brandch" class="chart" style=""></canvas>
            <script>
                var ctx = document.getElementById("brandch").getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Total Units sold by Brand vs Local'],

                    datasets: 
                    [{
                        label: 'Bought Branded Units',
                        data: [<?php echo $rowcount; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    },
                    {
                        label: 'Bought Local Units',
                        data: [<?php echo $rowcount2; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    }]
                },
                options: {
    scales: {
        yAxes: [{
            ticks: {
                min: 200
              
            }
        }]
    }
}           
            });
            </script>
     </div> 









<h2>Behavioral Distribution of Consumers</h2>
        <?php     
   $sql = "SELECT distinct users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.personality = 'O'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $redcolor=mysqli_num_rows($result);
  $sql = "SELECT distinct users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.personality = 'C'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $bluecolor=mysqli_num_rows($result);
  $sql = "SELECT distinct users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.personality = 'E'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $greencolor=mysqli_num_rows($result);
  $sql = "SELECT distinct users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.personality = 'A'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $yellowcolor=mysqli_num_rows($result);
 
 $sql = "SELECT distinct users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.personality = 'N'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $yellowcolor=mysqli_num_rows($result);
  
     ?>
        <div style="width:550px; height: 350px;">
            <canvas id="perch" class="chart" style=""></canvas>
            <script>
                var ctx = document.getElementById("perch").getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Behavior Distribution of Buyers'],

                    datasets: 
                    [{
                        label: 'Open Minded',
                        data: [<?php echo $redcolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Strict, Conscientious',
                        data: [<?php echo $bluecolor; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    },
                    {
                        label: 'Frank, Full of Life',
                        data: [<?php echo $greencolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Submissive, Agreeable',
                        data: [<?php echo $yellowcolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Sentimental, Vulnerable',
                        data: [<?php echo $yellowcolor; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    }
                    ]
                },
                options: {
    scales: {
        yAxes: [{
            ticks: {
                min: 0
            }
        }]
    }
}           
            });
            </script>
     </div> 










<h2>Gender Distribution of Buyers</h2>
        <?php     
   $sql = "SELECT users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.gender = 'F'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $redcolor=mysqli_num_rows($result);
  $sql = "SELECT distinct users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.gender = 'F'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $bluecolor=mysqli_num_rows($result);

  $sql = "SELECT users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.gender = 'M'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $greencolor=mysqli_num_rows($result);
       $sql = "SELECT distinct users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.gender = 'M'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $greencolor2=mysqli_num_rows($result);

  
     ?>
        <div style="width:550px; height: 350px;">
            <canvas id="gench" class="chart" style=""></canvas>
            <script>
                var ctx = document.getElementById("gench").getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Buyers distribution by Gender'],

                    datasets: 
                    [{
                        label: 'Female: Total Sold',
                        data: [<?php echo $redcolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Female: Unique Buyers',
                        data: [<?php echo $bluecolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Male: Total Sold',
                        data: [<?php echo $greencolor; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    },
                    {
                        label: 'Male: Unique Buyers',
                        data: [<?php echo $greencolor2; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    }
                    ]
                },
                options: {
    scales: {
        yAxes: [{
            ticks: {
                min: 0
            }
        }]
    }
}           
            });
            </script>
     </div> 














<h2>Behavior & Gender</h2>
        <?php     
   $sql = "SELECT distinct users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.gender = 'M' AND users.personality='O'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $redcolor=mysqli_num_rows($result);
  $sql = "SELECT distinct users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.gender = 'F' AND users.personality='O'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $bluecolor=mysqli_num_rows($result);

  $sql = "SELECT distinct users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.gender = 'M' AND users.personality='C'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $greencolor=mysqli_num_rows($result);
       $sql = "SELECT distinct users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.gender = 'F' AND users.personality='C'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $greencolor2=mysqli_num_rows($result);

  $sql = "SELECT distinct users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.gender = 'M' AND users.personality='E'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $yellowcolor=mysqli_num_rows($result);
      $sql = "SELECT distinct users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.gender = 'F' AND users.personality='E'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $yellowcolor2=mysqli_num_rows($result);

 
 $sql = "SELECT distinct users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.gender = 'M' AND users.personality='A'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $hcolor=mysqli_num_rows($result);
 $sql = "SELECT distinct users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.gender = 'F' AND users.personality='A'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $hcolor2=mysqli_num_rows($result);

   $sql = "SELECT distinct users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.gender = 'M' AND users.personality='N'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $blackcolor=mysqli_num_rows($result);
    $sql = "SELECT distinct users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.gender = 'F' AND users.personality='N'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $blackcolor2=mysqli_num_rows($result);
  
     ?>
        <div style="width:550px; height: 350px;">
            <canvas id="becch" class="chart" style=""></canvas>
            <script>
                var ctx = document.getElementById("becch").getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Buyers from different groups by gender'],

                    datasets: 
                    [{
                        label: 'Open Minded: Male',
                        data: [<?php echo $redcolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Open Minded: Female',
                        data: [<?php echo $bluecolor; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    },
                    {
                        label: 'Conscientious: Male',
                        data: [<?php echo $greencolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Conscientious: Female',
                        data: [<?php echo $greencolor2; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    },
                    {
                        label: 'Extraversion: Male',
                        data: [<?php echo $yellowcolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Extraversion: Female',
                        data: [<?php echo $yellowcolor2; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    },
                    {
                        label: 'Agreeable: Male',
                        data: [<?php echo $hcolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Agreeable: Female',
                        data: [<?php echo $hcolor2; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    },
                    {
                        label: 'Vulnerable: Male',
                        data: [<?php echo $blackcolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Vulnerable: Female',
                        data: [<?php echo $blackcolor2; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    }
                    ]
                },
                options: {
    scales: {
        yAxes: [{
            ticks: {
                min: 0
            }
        }]
    }
}           
            });
            </script>
     </div> 




















<h2>Top 2 location and gender</h2>
        <?php     
   $sql = "SELECT distinct users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.gender = 'M' AND users.location='delhi'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $redcolor=mysqli_num_rows($result);
  $sql = "SELECT distinct users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.gender = 'F' AND users.location='delhi'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $bluecolor=mysqli_num_rows($result);

  $sql = "SELECT distinct users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.gender = 'M' AND users.location='mumbai'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $greencolor=mysqli_num_rows($result);
       $sql = "SELECT distinct users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.gender = 'F' AND users.location='mumbai'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $greencolor2=mysqli_num_rows($result);


 

  
     ?>
        <div style="width:550px; height: 350px;">
            <canvas id="genloccch" class="chart" style=""></canvas>
            <script>
                var ctx = document.getElementById("genloccch").getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Buyers from top 2 locations by gender'],

                    datasets: 
                    [{
                        label: 'Delhi Buyers: Male',
                        data: [<?php echo $redcolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Delhi Buyers: Female',
                        data: [<?php echo $bluecolor; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    },
                    {
                        label: 'Mumbai Buyers: Male',
                        data: [<?php echo $greencolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Mumbai Buyers: Female',
                        data: [<?php echo $greencolor2; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    }
                    ]
                },
                options: {
    scales: {
        yAxes: [{
            ticks: {
                min: 0
            }
        }]
    }
}           
            });
            </script>
     </div> 



















<h2>Brands and Color Relation</h2>
        <?php     
   $sql = "SELECT products.productid FROM products join activity on products.productid=activity.productid WHERE activity.sold=1 AND products.brand =1 AND products.color='red'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['productid'] ;  }
      $redcolor=mysqli_num_rows($result);
  $sql = "SELECT products.productid FROM products join activity on products.productid=activity.productid WHERE activity.sold=1 AND products.brand =1 AND products.color='blue'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['productid'] ;  }
      $bluecolor=mysqli_num_rows($result);

  $sql = "SELECT products.productid FROM products join activity on products.productid=activity.productid WHERE activity.sold=1 AND products.brand =1 AND products.color='green'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['productid'] ;  }
      $greencolor=mysqli_num_rows($result);
       $sql = "SELECT products.productid FROM products join activity on products.productid=activity.productid WHERE activity.sold=1 AND products.brand =1 AND products.color='white'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['productid'] ;  }
      $greencolor2=mysqli_num_rows($result);

  $sql = "SELECT products.productid FROM products join activity on products.productid=activity.productid WHERE activity.sold=1 AND products.brand =1 AND products.color='black'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['productid'] ;  }
      $yellowcolor=mysqli_num_rows($result);
      $sql = "SELECT products.productid FROM products join activity on products.productid=activity.productid WHERE activity.sold=1 AND products.brand =1 AND products.color='orange'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['productid'] ;  }
      $yellowcolor2=mysqli_num_rows($result);

 
 $sql = "SELECT products.productid FROM products join activity on products.productid=activity.productid WHERE activity.sold=1 AND products.brand =1 AND products.color='Yellow'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['productid'] ;  }
      $hcolor=mysqli_num_rows($result);
 
   
  
     ?>
        <div style="width:550px; height: 350px;">
            <canvas id="behhx" class="chart" style=""></canvas>
            <script>
                var ctx = document.getElementById("behhx").getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Branded units and Color Relation'],

                    datasets: 
                    [{
                        label: 'Branded: Color Red',
                        data: [<?php echo $redcolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Branded: Color Blue',
                        data: [<?php echo $bluecolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Branded: Color Green',
                        data: [<?php echo $greencolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Branded: Color White',
                        data: [<?php echo $greencolor2; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Branded: Color Black',
                        data: [<?php echo $yellowcolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Branded: Color Orange',
                        data: [<?php echo $yellowcolor2; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Branded: Color Yellow',
                        data: [<?php echo $hcolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    }
                    ]
                },
                options: {
    scales: {
        yAxes: [{
            ticks: {
                min: 0
            }
        }]
    }
}           
            });
            </script>
     </div> 





    </td>

















 
   
     <td width="50%">
         <h2>Total Units Sold vs Unsold</h2>
        <?php     $date = '';$sold = '';
   $sql = "SELECT activity.productid  FROM products join activity on products.productid=activity.productid WHERE activity.sold=1 ";
    $result = mysqli_query($mysqli, $sql);{
    while ($row = mysqli_fetch_array($result)) { $person =  $row['productid'] ;  }
    }
   $rowcount=mysqli_num_rows($result);
   
 $sql2 = "SELECT activity.productid  FROM products join activity on products.productid=activity.productid WHERE activity.sold=0 ";
    $result2 = mysqli_query($mysqli, $sql2);
    while ($row = mysqli_fetch_array($result2)) {  $person =  $row['productid'] ; }


     $rowcount2=mysqli_num_rows($result2);
   $countdata2 = $rowcount;
     ?>
        <div style="width:550px; height: 350px;">
            <canvas id="unitsoldch" class="chart" style=""></canvas>
            <script>
                var ctx = document.getElementById("unitsoldch").getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Sold and Unsold units from Activity'],

                    datasets: 
                    [{
                        label: 'Successful Sessions',
                        data: [<?php echo $countdata2; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    },
                    {
                        label: 'Unscessful Sessions',
                        data: [<?php echo $rowcount2; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    }]
                },
                options: {
    scales: {
        yAxes: [{
            ticks: {
                min: 200
            }
        }]
    }
}           
            });
            </script>
     </div> 









<h2>Total Units Sold Color under Ratings</h2>
        <?php     
   $sql = "SELECT * FROM products join activity on products.productid=activity.productid WHERE activity.sold=1 AND products.ratings BETWEEN 0.1 and 1.0";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['ratings'] ;  }
      $redcolor=mysqli_num_rows($result);
  $sql = "SELECT * FROM products join activity on products.productid=activity.productid WHERE activity.sold=1 AND products.ratings BETWEEN 1.1 and 2.0";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['ratings'] ;  }
      $bluecolor=mysqli_num_rows($result);
  $sql = "SELECT * FROM products join activity on products.productid=activity.productid WHERE activity.sold=1 AND products.ratings BETWEEN 2.1 and 3.0";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['ratings'] ;  }
      $greencolor=mysqli_num_rows($result);
  $sql = "SELECT * FROM products join activity on products.productid=activity.productid WHERE activity.sold=1 AND products.ratings BETWEEN 3.1 and 4.0";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['ratings'] ;  }
      $yellowcolor=mysqli_num_rows($result);
  $sql = "SELECT * FROM products join activity on products.productid=activity.productid WHERE activity.sold=1 AND products.ratings BETWEEN 4.1 and 5.0";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['ratings'] ;  }
      $whitecolor=mysqli_num_rows($result);
 

  
     ?>
        <div style="width:550px; height: 350px;">
            <canvas id="starch" class="chart" style=""></canvas>
            <script>
                var ctx = document.getElementById("starch").getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Total Units sold under Ratings'],

                    datasets: 
                    [{
                        label: '1 Star',
                        data: [<?php echo $redcolor; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    },
                    {
                        label: '2 Star',
                        data: [<?php echo $bluecolor; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    },
                    {
                        label: '3 Star',
                        data: [<?php echo $greencolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: '4 Star',
                        data: [<?php echo $yellowcolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: '5 Star',
                        data: [<?php echo $whitecolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    }
                    ]
                },
                options: {
    scales: {
        yAxes: [{
            ticks: {
                min: 0
            }
        }]
    }
}           
            });
            </script>
     </div> 









<h2>Age Distribution of Consumers</h2>
        <?php     
   $sql = "SELECT distinct users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.age BETWEEN 18 AND 24";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $redcolor=mysqli_num_rows($result);
  $sql = "SELECT distinct users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.age BETWEEN 25 AND 34";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $bluecolor=mysqli_num_rows($result);
  $sql = "SELECT distinct users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.age BETWEEN 35 AND 50";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $greencolor=mysqli_num_rows($result);
  $sql = "SELECT distinct users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.age >= 51";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $yellowcolor=mysqli_num_rows($result);
 

  
     ?>
        <div style="width:550px; height: 350px;">
            <canvas id="agech" class="chart" style=""></canvas>
            <script>
                var ctx = document.getElementById("agech").getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Age distribution of buyers'],

                    datasets: 
                    [{
                        label: '18-24 Years',
                        data: [<?php echo $redcolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: '25-34 Years',
                        data: [<?php echo $bluecolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: '35-50 Years',
                        data: [<?php echo $greencolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: '50 Years & Above',
                        data: [<?php echo $yellowcolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    }
                    ]
                },
                options: {
    scales: {
        yAxes: [{
            ticks: {
                min: 0
            }
        }]
    }
}           
            });
            </script>
     </div> 











<h2>Top 5 Buyers Locations</h2>
        <?php     
   $sql = "SELECT users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.location = 'delhi'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $redcolor=mysqli_num_rows($result);
  $sql = "SELECT distinct users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.location = 'Delhi'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $bluecolor=mysqli_num_rows($result);

  $sql = "SELECT users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.location = 'mumbai'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $greencolor=mysqli_num_rows($result);
       $sql = "SELECT distinct users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.location = 'mumbai'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $greencolor2=mysqli_num_rows($result);

  $sql = "SELECT users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.location = 'banglore'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $yellowcolor=mysqli_num_rows($result);
      $sql = "SELECT distinct users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.location = 'banglore'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $yellowcolor2=mysqli_num_rows($result);

 
 $sql = "SELECT users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.location = 'chandigarh'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $hcolor=mysqli_num_rows($result);
 $sql = "SELECT distinct users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.location = 'chandigarh'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $hcolor2=mysqli_num_rows($result);

   $sql = "SELECT users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.location = 'gurugram'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $blackcolor=mysqli_num_rows($result);
    $sql = "SELECT distinct users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.location = 'gurugram'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $blackcolor2=mysqli_num_rows($result);
  
     ?>
        <div style="width:550px; height: 350px;">
            <canvas id="locch" class="chart" style=""></canvas>
            <script>
                var ctx = document.getElementById("locch").getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Buyers from top different locations'],

                    datasets: 
                    [{
                        label: 'Delhi: Total Sold',
                        data: [<?php echo $redcolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Delhi: Unique Buyers',
                        data: [<?php echo $bluecolor; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    },
                    {
                        label: 'Mumbai: Total Sold',
                        data: [<?php echo $greencolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Mumbai: Unique Buyers',
                        data: [<?php echo $greencolor2; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    },
                    {
                        label: 'Banglore: Total Sold',
                        data: [<?php echo $yellowcolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Banglore: Unique Buyers',
                        data: [<?php echo $yellowcolor2; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    },
                    {
                        label: 'Chandigrah: Total Sold',
                        data: [<?php echo $hcolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Chandigrah: Unique Buyers',
                        data: [<?php echo $hcolor2; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    },
                    {
                        label: 'Gurugram: Total Sold',
                        data: [<?php echo $blackcolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Gurugram: Unique Buyers',
                        data: [<?php echo $blackcolor2; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    }
                    ]
                },
                options: {
    scales: {
        yAxes: [{
            ticks: {
                min: 0
            }
        }]
    }
}           
            });
            </script>
     </div> 












<h2>Total Units Sold Price Wise Distribution</h2>
        <?php     
   $sql = "SELECT * FROM products join activity on products.productid=activity.productid WHERE activity.sold=1 AND products.price BETWEEN 150 and 200";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['price'] ;  }
      $redcolor=mysqli_num_rows($result);
  $sql = "SELECT * FROM products join activity on products.productid=activity.productid WHERE activity.sold=1 AND products.price BETWEEN 201 and 250";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['price'] ;  }
      $bluecolor=mysqli_num_rows($result);
  $sql = "SELECT * FROM products join activity on products.productid=activity.productid WHERE activity.sold=1 AND products.price BETWEEN 251 and 300";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['price'] ;  }
      $greencolor=mysqli_num_rows($result);
  $sql = "SELECT * FROM products join activity on products.productid=activity.productid WHERE activity.sold=1 AND products.price BETWEEN 301 and 350";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['price'] ;  }
      $yellowcolor=mysqli_num_rows($result);
  

  
     ?>
        <div style="width:550px; height: 350px;">
            <canvas id="prch" class="chart" style=""></canvas>
            <script>
                var ctx = document.getElementById("prch").getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Total Units sold under Ratings'],

                    datasets: 
                    [{
                        label: 'below Rs.200',
                        data: [<?php echo $redcolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Rs.201 - Rs.250',
                        data: [<?php echo $bluecolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Rs.251 - Rs.300',
                        data: [<?php echo $greencolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Rs.300 and above',
                        data: [<?php echo $yellowcolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    }
                    ]
                },
                options: {
    scales: {
        yAxes: [{
            ticks: {
                min: 0
            }
        }]
    }
}           
            });
            </script>
     </div> 









<h2>Age & Gender Distribution</h2>
        <?php     
   $sql = "SELECT distinct users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.gender = 'M' AND users.age BETWEEN 18 and 24";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $redcolor=mysqli_num_rows($result);
  $sql = "SELECT distinct users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.gender = 'F'  AND users.age BETWEEN 18 and 24";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $bluecolor=mysqli_num_rows($result);

  $sql = "SELECT distinct users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.gender = 'M' AND users.age BETWEEN 25 and 34";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $greencolor=mysqli_num_rows($result);
       $sql = "SELECT distinct users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.gender = 'F' AND users.age BETWEEN 25 and 34";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $greencolor2=mysqli_num_rows($result);

  $sql = "SELECT distinct users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.gender = 'M' AND users.age BETWEEN 35 and 50";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $yellowcolor=mysqli_num_rows($result);
      $sql = "SELECT distinct users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.gender = 'F' AND users.age BETWEEN 35 and 50";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $yellowcolor2=mysqli_num_rows($result);

 
 $sql = "SELECT distinct users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.gender = 'M' AND users.age BETWEEN 50 and 100";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $hcolor=mysqli_num_rows($result);
 $sql = "SELECT distinct users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.gender = 'F' AND users.age BETWEEN 50 and 100";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $hcolor2=mysqli_num_rows($result);

  
  
     ?>
        <div style="width:550px; height: 350px;">
            <canvas id="gencch" class="chart" style=""></canvas>
            <script>
                var ctx = document.getElementById("gencch").getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Buyers from different age groups by gender'],

                    datasets: 
                    [{
                        label: 'Male Buyers: Age 18-24',
                        data: [<?php echo $redcolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Female Buyers: Age 18-24',
                        data: [<?php echo $bluecolor; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    },
                    {
                        label: 'Male Buyers: Age 25-34',
                        data: [<?php echo $greencolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Female Buyers: Age 25-34',
                        data: [<?php echo $greencolor2; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    },
                    {
                        label: 'Male Buyers: Age 35-50',
                        data: [<?php echo $yellowcolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Female Buyers: Age 35-50',
                        data: [<?php echo $yellowcolor2; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    },
                    {
                        label: 'Male Buyers: Age 50 & above',
                        data: [<?php echo $hcolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Female Buyers: Age 50 & Above',
                        data: [<?php echo $hcolor2; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    }
                    ]
                },
                options: {
    scales: {
        yAxes: [{
            ticks: {
                min: 0
            }
        }]
    }
}           
            });
            </script>
     </div> 



   






<h2>Age group from top 2 locations</h2>
        <?php     
   $sql = "SELECT users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.location = 'delhi' AND users.age between 18 and 24";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $redcolor=mysqli_num_rows($result);
  $sql = "SELECT users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.location = 'delhi' AND users.age between 25 and 30";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $bluecolor=mysqli_num_rows($result);

  $sql = "SELECT users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.location = 'delhi' AND users.age between 35 and 50";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $greencolor=mysqli_num_rows($result);
       $sql = "SELECT users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.location = 'delhi' AND users.age between 51 and 100";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $greencolor2=mysqli_num_rows($result);

  $sql = "SELECT users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.location = 'mumbai' AND users.age between 18 and 24";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $yellowcolor=mysqli_num_rows($result);
      $sql = "SELECT users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.location = 'mumbai' AND users.age between 24 and 34";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $yellowcolor2=mysqli_num_rows($result);

 
 $sql = "SELECT users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.location = 'mumbai' AND users.age between 35 and 50";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $hcolor=mysqli_num_rows($result);
 $sql = "SELECT users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.location = 'mumbai' AND users.age between 51 and 100";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $hcolor2=mysqli_num_rows($result);

 
     ?>
        <div style="width:550px; height: 350px;">
            <canvas id="agecch" class="chart" style=""></canvas>
            <script>
                var ctx = document.getElementById("agecch").getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Age distribution from top 2 locations'],

                    datasets: 
                    [{
                        label: 'Delhi: Age 18-24',
                        data: [<?php echo $redcolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Delhi: Age 25-34',
                        data: [<?php echo $bluecolor; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    },
                    {
                        label: 'Delhi: Age 35-50',
                        data: [<?php echo $greencolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Delhi: Age 50 & Above',
                        data: [<?php echo $greencolor2; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    },
                    {
                        label: 'Mumbai: Age 18-24',
                        data: [<?php echo $yellowcolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Mumbai: Age 25-34',
                        data: [<?php echo $yellowcolor2; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    },
                    {
                        label: 'Mumbai: Age 35-50',
                        data: [<?php echo $hcolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Mumbai: Age 50 & Above',
                        data: [<?php echo $hcolor2; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    }
                    ]
                },
                options: {
    scales: {
        yAxes: [{
            ticks: {
                min: 0
            }
        }]
    }
}           
            });
            </script>
     </div> 









<h2>Behavior in Top 2 locations</h2>
        <?php     
   $sql = "SELECT users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.location = 'delhi' AND users.personality='O'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $redcolor=mysqli_num_rows($result);
  $sql = "SELECT users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.location = 'delhi' AND users.personality='C'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $bluecolor=mysqli_num_rows($result);

  $sql = "SELECT users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.location = 'delhi' AND users.personality='E'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $greencolor=mysqli_num_rows($result);
       $sql = "SELECT users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.location = 'delhi' AND users.personality='A'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $greencolor2=mysqli_num_rows($result);

  $sql = "SELECT users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.location = 'delhi' AND users.personality='N'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $yellowcolor=mysqli_num_rows($result);
      $sql = "SELECT users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.location = 'mumbai' AND users.personality='O'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $yellowcolor2=mysqli_num_rows($result);

 
 $sql = "SELECT users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.location = 'mumbai' AND users.personality='C'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $hcolor=mysqli_num_rows($result);
 $sql = "SELECT users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.location = 'mumbai' AND users.personality='E'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $hcolor2=mysqli_num_rows($result);

   $sql = "SELECT users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.location = 'mumbai' AND users.personality='A'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $blackcolor=mysqli_num_rows($result);
    $sql = "SELECT users.userid FROM users join activity on users.userid=activity.userid WHERE activity.sold=1 AND users.location = 'mumbai' AND users.personality='N'";
    $result = mysqli_query($mysqli, $sql); while ($row = mysqli_fetch_array($result)) {  $person =  $row['userid'] ;  }
      $blackcolor2=mysqli_num_rows($result);
  
     ?>
        <div style="width:550px; height: 350px;">
            <canvas id="behh" class="chart" style=""></canvas>
            <script>
                var ctx = document.getElementById("behh").getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Behavior from top 2 locations'],

                    datasets: 
                    [{
                        label: 'Delhi: Open Minded',
                        data: [<?php echo $redcolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Delhi: Conscientious',
                        data: [<?php echo $bluecolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Delhi: Extraversion',
                        data: [<?php echo $greencolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Delhi: Agreeable',
                        data: [<?php echo $greencolor2; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Delhi: Vulnerable',
                        data: [<?php echo $yellowcolor; ?>],
                        backgroundColor: '#066',
                        borderColor:'#066',
                        borderWidth: 3
                    },
                    {
                        label: 'Mumbai: Open Minded',
                        data: [<?php echo $yellowcolor2; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    },
                    {
                        label: 'Mumbai: Conscientious',
                        data: [<?php echo $hcolor; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    },
                    {
                        label: 'Mumbai: Extraversion',
                        data: [<?php echo $hcolor2; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    },
                    {
                        label: 'Mumbai: Agreeable',
                        data: [<?php echo $blackcolor; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    },
                    {
                        label: 'Mumbai: Vulnerable',
                        data: [<?php echo $blackcolor2; ?>],
                        backgroundColor: '#006666',
                        borderColor:'#006666',
                        borderWidth: 3
                    }
                    ]
                },
                options: {
    scales: {
        yAxes: [{
            ticks: {
                min: 0
            }
        }]
    }
}           
            });
            </script>
     </div> 






    </td>

</table>
</td>
</table>
   
        
    </body>
