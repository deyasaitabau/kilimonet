<?php
include "./lib/connect.php";

$query_emali1 = mysqli_query($conn,"SELECT * FROM questionnaire where  market='emali' && species='cattle'");
$query_emali2 = mysqli_query($conn,"SELECT * FROM questionnaire where  market='emali' && species='sheep/Goat'");
$query_kimana1 = mysqli_query($conn,"SELECT * FROM questionnaire where  market='kimana' && species='cattle'" );
$query_kimana2 = mysqli_query($conn,"SELECT * FROM questionnaire where  market='kimana' && species='sheep/Goat'" );
$query_sulatan1 = mysqli_query($conn,"SELECT * FROM questionnaire where  market='Sultan_hamud' && species='cattle'");
$query_sulatan2 = mysqli_query($conn,"SELECT * FROM questionnaire where  market='Sultan_hamud' && species='sheep/Goat'");
$query_kedong1 = mysqli_query($conn,"SELECT * FROM questionnaire where  market='Ewuaso_Kedong' && species='cattle'");
$query_kedong2 = mysqli_query($conn,"SELECT * FROM questionnaire where  market='Ewuaso_Kedong' && species='sheep/Goat'");
$query_illibilis1 = mysqli_query($conn,"SELECT * FROM questionnaire where  market='illibilis' && species='cattle'");
$query_illibilis2 = mysqli_query($conn,"SELECT * FROM questionnaire where  market='illibilis' && species='sheep/Goat'");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kilimonet</title>
        <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./css/main.css">
<link rel="stylesheet" href="./css/tablecss.css">
<link rel="stylesheet" href="./css/main.css">
<script  type="text/javascript" src="./js/table.js"></script>
<script type="text/javascript" src="./js/tab.js"></script>
<script src="./js/script.js" defer></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Year', 'cattle', 'sheep/goat'],
      ['mon nov,7/2022',  8000,      3200],
      ['fri nov,11/2022',  9200,      3000],
      ['mon nov,14/2022',  8700,       3375],
      ['fri nov,18/2022',  10000,      3200],
      ['mon nov,21/2022',  10700,      3500]
    ]);

    var options = {
      title: 'Illbisil market Performance',
      curveType: 'function',
      legend: { position: 'bottom' }
    };

    var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

    chart.draw(data, options);

    var data2 = google.visualization.arrayToDataTable([
    ['Year', 'cattle', 'sheep/goat'],
      ['fri nov,5/2022',  8750,      3330],
      ['fri nov,12/2022',  9000,      3400],
      ['fri nov,19/2022',  10500,       3600]
    ]);

    var options2 = {
      title: 'Emali market performance',
      curveType: 'function',
      legend: { position: 'bottom' }
    };

    var chart2 = new google.visualization.LineChart(document.getElementById('curve_chart2'));

    chart2.draw(data2, options2); 

    var data3 = google.visualization.arrayToDataTable([
    ['Year', 'cattle', 'sheep/goat'],
    ['thu nov,3/2022',  8000,      3400],
    ['thu nov,10/2022',  9500,      3600],
    ['thu nov,17/2022',  9000,       4300]
    ]);

    var options3 = {
    title: 'Sultan Hamud market performance',
    curveType: 'function',
    legend: { position: 'bottom' }
    };

    var chart3 = new google.visualization.LineChart(document.getElementById('curve_chart3'));

    chart3.draw(data3, options3); 

    var data4 = google.visualization.arrayToDataTable([
    ['Year', 'cattle', 'sheep/goat'],
    ['thu nov,3/2022',  1900,      3900],
    ['thu nov,10/2022',  1170,      4335],
    ['thu nov,17/2022',  660,       4000]
    ]);

    var options4 = {
    title: 'Ewuaso Kedong market performance',
    curveType: 'function',
    legend: { position: 'bottom' }
    };

    var chart4 = new google.visualization.LineChart(document.getElementById('curve_chart4'));

    chart4.draw(data4, options4);
    
    var data5 = google.visualization.arrayToDataTable([
    ['Year', 'cattle', 'sheep/goat'],
    ['tue nov,8/2022',  8000,      2850],
    ['tue nov,15/2022',  8500,      2700],
    ['tue nov,22/2022',  9900,       3400]
    ]);

    var options5 = {
    title: 'kimana market performance',
    curveType: 'function',
    legend: { position: 'bottom' }
    };

    var chart5 = new google.visualization.LineChart(document.getElementById('curve_chart5'));

    chart5.draw(data5, options5);
  }
</script>
</head>
<body>
<article class="topnav" id="myTopnav">
    <article class="logo">
        <img class="Mylogo" src="./images/jpg.webp">
  <a href="#" class="active">Home</a> 
  <a href="./home/resource.php">Resource</a>
  <a href="./home/blog.php">Blog</a>
  <a href="./users/survey.php">Survey</a>
  <a href="javascript:void(0);"  onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</article>
</article>
<article class="container">
    <article class="section"> 
            <!-- <h1>Welcome<span></span></h1>
                <h1 style="padding-left:30%;">To</h1>
            <a href="./users/survey.php"><h1>Kilimonet</h1></a> -->
        </article>
    </article>
    <!--livestock prices at various livestock yards displaced in tabular format-->
              <!--Illbisil market-->
              <div>
             <h2> Welcome To Kilimonet <hr></h2>
            
              <p>?Kilimonet is a program I am working on to provide a tangible solution to many challenges faced by livestock keepers and livestock dealers in Kenya today, 
                particularly in Kajiado County, potent to them by climate change. Today, livestock keepers and dealers face the 
                challenge of unreliable rainfall, leading to drought. Consequently, farmers have had to sell their livestock at low prices. This is not because their animals’ health and fitness are very poor but because no local livestock dealer is willing to buy because there are no feeds to feed livestock in the future. Kilimonet wants to solve the challenge in the following way:Availing the most responsive livestock prices from all accredited livestock markets in Kajiado County to all livestock dealers in Kenya. By doing this, large numbers of livestock dealers from regions with sufficient animal feeds will be attracted to trade in such markets due to low prices. 
                This spiral effect leads to an increase in demand, which leads to a rise in prices.</p>
                 </div>
          <div class="textimage">
            <div class="founderimage">
            <img src="./images/laban.jpg" alt="" class="founder" style="width: 250px;
  height: 100%;">
            </div>
                 <div class="toptext">
                   <p>
                Laban deya is the founder of Kilimonet. he is passionate agripreneur. he is a resident of Kajiado county 
                  </p>
                    </div>
              </div>
                  
            <h1 class="title">Illbisil Market</h1>
            <hr>
             
            <div class="textimage1">
         <div class="toptext1" id="toptext">
             <p>Illbisil market is  One of the biggest livestock markets in East Africa, which takes place 
                every Monday and Friday.
                This market is accredited by county government of kajiado 
                 People come from far and wide to sell and buy animals here, an incredible sight above
                
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim fugit cumque veniam in, 
                officiis unde, rerum odit deleniti recusandae 
                laudantium libero beatae praesentium corrupti quod doloribus sapiente numquam neque? Maiores.
                </p>
                 </div>
                 <div class="founderimage1">
            <img src="./images/cows.jpg" alt="" class="founder1" style="width: 250px; height: 100%;">
            </div>
              </div>
            <div>
              <div id="tableID_wrapper" class="dataTables_wrapper no-footer">
                
                    <div class="dataTables_length" id="tableID_length">        
                 </div>                    
                    <H1 style="text-align:center">CATTLE</H1>              
                    <table id="tableID" class="display dataTable no-footer" style="grid-auto-columns: auto;" role="grid" aria-describedby="tableID_info">
                
                      <thead>
                        <tr role="row">
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Profile  : activate to sort column descending" style="width: 40.7188px; ">Live Weight</th>
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-label="Id No : activate to sort column ascending" style="width: 48.8906px;">Price (ksh)</th>
                        </tr>
                      </thead>
                      <tbody>                                      
                      <?php
                        if(mysqli_num_rows($query_illibilis1) > 0){
                        ?>
                        <?php
                          while($data = mysqli_fetch_assoc($query_illibilis1)){    
                        ?>
                          <tr class="row">
                        
                              <td> <?php  echo($data['weight']); ?> </td>
                              <td><?php  echo($data['price']); ?></td>
                          </tr>
                          <?php
                          }

                        }
                        else  if(mysqli_num_rows($query_illibilis1) <= 0){
                          ?>
                          <tr class="tableRow">                       
                          <td> 'empty set'</td>
                          <td>'empty set'</td>
                        </tr>
                        <?php

                        }
                        ?>
                      </tbody>
                    </table>
                  
                    <H1 style="text-align:center">SHEEP AND GOAT</H1>              
                    <table id="tableID" class="display dataTable no-footer" style="grid-auto-columns: auto;" role="grid" aria-describedby="tableID_info">
                
                      <thead>
                        <tr role="row">
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Profile  : activate to sort column descending" style="width: 40.7188px; ">Live Weight</th>
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-label="Id No : activate to sort column ascending" style="width: 48.8906px;">Price (ksh)</th>
                        </tr>
                      </thead>
                      <tbody>                                      
                      <?php
                        if(mysqli_num_rows($query_illibilis2) > 0){
                        ?>
                        <?php
                          while($data = mysqli_fetch_assoc($query_illibilis2)){    
                        ?>
                          <tr class="row">
                        
                              <td> <?php  echo($data['weight']); ?> </td>

                              <?php
                                
                              ?>

                              <td><?php  echo($data['price']); ?></td>
                          </tr>
                          <?php
                          }

                        }
                        else  if(mysqli_num_rows($query_illibilis2) <= 0){
                          ?>
                          
                          <tr>
                        
                          <td> 'empty set'</td>
                          <td>'empty set'</td>
                        </tr>
                        <?php

                        }
                        ?>
                      </tbody>
                    </table>

            <div id="curve_chart" style="width: 900px; height: 500px"></div>
            <!--Emali market-->
                <h1 class="title">Emali Market</h1>
                <hr>
                <div class="textimage">
                  <div class="founderimage">
                <img src="./images/FB_IMG_1663505990336.jpg" class="founder" style="width: 350px; height: 100%;">
                </div>
                <div class="toptext">
                <p>Emali market is accredited livestock saleyard by county government of Kajiado.
                    It is situated along mombasa-nairobi highway,4kms from emali town.It can hold up two thousand heads of cattles.
                    it attract traders from kajiado ,makueni county Tanzania and other regions.It is usually 
                    held every Friday. </p>
                    </div>
                    </div>

                    <div id="tableID_wrapper" class="dataTables_wrapper no-footer">
                    <div class="dataTables_length" id="tableID_length">        
                 </div>                    
                    <H1 style="text-align:center">CATTLE</H1>              
                    <table id="tableID" class="display dataTable no-footer" style="grid-auto-columns: auto;" role="grid" aria-describedby="tableID_info">
                
                      <thead>
                        <tr role="row">
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Profile  : activate to sort column descending" style="width: 40.7188px; ">Live Weight</th>
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-label="Id No : activate to sort column ascending" style="width: 48.8906px;">Price (ksh)</th>
                        </tr>
                      </thead>
                      <tbody>                                      
                      <?php
                        if(mysqli_num_rows($query_emali1) > 0){
                        ?>
                        <?php
                          while($data = mysqli_fetch_assoc($query_emali1)){    
                        ?>
                          <tr class="row">
                        
                              <td> <?php  echo($data['weight']); ?> </td>
                              <td><?php  echo($data['price']); ?></td>
                          </tr>
                          <?php
                          }

                        }
                        else  if(mysqli_num_rows($query_emali1) <= 0){
                          ?>
                          <tr>                       
                          <td> 'empty set'</td>
                          <td>'empty set'</td>
                        </tr>
                        <?php

                        }
                        ?>
                      </tbody>
                    </table>
                  
                    <H1 style="text-align:center">SHEEP AND GOAT</H1>              
                    <table id="tableID" class="display dataTable no-footer" style="grid-auto-columns: auto;" role="grid" aria-describedby="tableID_info">
                
                      <thead>
                        <tr role="row">
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Profile  : activate to sort column descending" style="width: 40.7188px; ">Live Weight</th>
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-label="Id No : activate to sort column ascending" style="width: 48.8906px;">Price (ksh)</th>
                        </tr>
                      </thead>
                      <tbody>                                      
                      <?php
                        if(mysqli_num_rows($query_emali2) > 0){
                        ?>
                        <?php
                          while($data = mysqli_fetch_assoc($query_emali2)){    
                        ?>
                          <tr class="row">
                        
                              <td> <?php  echo($data['weight']); ?> </td>
                              <td><?php  echo($data['price']); ?></td>
                          </tr>
                          <?php
                          }

                        }
                        else  if(mysqli_num_rows($query_emali2) <= 0){
                          ?>
                          
                          <tr>
                        
                          <td> 'empty set'</td>
                          <td>'empty set'</td>
                        </tr>
                        <?php

                        }
                        ?>
                      </tbody>
                    </table>
                    <div id="curve_chart2" style="width: 900px; height: 500px"></div>
                    <!--sultan hamud market-->
                    <h1 class="title">Sultan Hamud Market</h1>
                    <hr>
                    <div class="textimage1">
                      <div class="toptext1">
                    <p>Sultan hamud livestock market is accredited salesyard by county government of Kajiado.
                        It is situated at the heart of sultan hamud town near standard gauge railway line.
                        It can hold up to two thousand sheep and goats.
                        It servers mainly residents of kajiado east, south,central and makueni.
                        It is usually held every Thursday.</p>
                        </div>
                        <div class="founderimage1">
                        <img src="./images/FB_IMG_1663089655445.jpg" class="founder1" style="width: 350px; height: 100%;">
                        </div>
                        </div>
                        <br>
                        <div class="textimage">
                          <div class="founderimage">
                          <img src="./images/FB_IMG_1663089696248.jpg" class="founder" style="width: 350px; height: 100%;">
                          </div>
                          <div class="toptext">
                        <p>
                          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo sunt magnam 
                          consectetur ea fugiat beatae harum eius reprehenderit aliquam, 
                          corrupti itaque, expedita quisquam at quibusdam minima numquam nemo doloribus voluptatibus.
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium unde similique tenetur 
                        dolor recusandae enim quasi
                         autem quibusdam eum. Culpa voluptas nemo deserunt dolorum vitae natus nisi, fugiat eius non.
                        </p>
                          </div>
                         </div>
                        
                        
                         <div id="tableID_wrapper" class="dataTables_wrapper no-footer">
                    <div class="dataTables_length" id="tableID_length">        
                 </div>                    
                    <H1 style="text-align:center">CATTLE</H1>              
                    <table id="tableID" class="display dataTable no-footer" style="grid-auto-columns: auto;" role="grid" aria-describedby="tableID_info">
                
                      <thead>
                        <tr role="row">
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Profile  : activate to sort column descending" style="width: 40.7188px; ">Live Weight</th>
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-label="Id No : activate to sort column ascending" style="width: 48.8906px;">Price (ksh)</th>
                        </tr>
                      </thead>
                      <tbody>                                      
                      <?php
                        if(mysqli_num_rows($query_sulatan1) > 0){
                        ?>
                        <?php
                          while($data = mysqli_fetch_assoc($query_sulatan1)){    
                        ?>
                          <tr class="row">
                        
                              <td> <?php  echo($data['weight']); ?> </td>
                              <td><?php  echo($data['price']); ?></td>
                          </tr>
                          <?php
                          }

                        }
                        else  if(mysqli_num_rows($query_sulatan1) <= 0){
                          ?>
                          <tr>                       
                          <td> 'empty set'</td>
                          <td>'empty set'</td>
                        </tr>
                        <?php

                        }
                        ?>
                      </tbody>
                    </table>
                  
                    <H1 style="text-align:center">SHEEP AND GOAT</H1>              
                    <table id="tableID" class="display dataTable no-footer" style="grid-auto-columns: auto;" role="grid" aria-describedby="tableID_info">
                
                      <thead>
                        <tr role="row">
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Profile  : activate to sort column descending" style="width: 40.7188px; ">Live Weight</th>
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-label="Id No : activate to sort column ascending" style="width: 48.8906px;">Price (ksh)</th>
                        </tr>
                      </thead>
                      <tbody>                                      
                      <?php
                        if(mysqli_num_rows($query_sulatan2) > 0){
                        ?>
                        <?php
                          while($data = mysqli_fetch_assoc($query_sulatan2)){    
                        ?>
                          <tr class="row">
                        
                              <td> <?php  echo($data['weight']); ?> </td>
                              <td><?php  echo($data['price']); ?></td>
                          </tr>
                          <?php
                          }

                        }
                        else  if(mysqli_num_rows($query_sulatan2) <= 0){
                          ?>
                          
                          <tr>
                        
                          <td> 'empty set'</td>
                          <td>'empty set'</td>
                        </tr>
                        <?php

                        }
                        ?>
                      </tbody>
                    </table>

                        <div id="curve_chart3" style="width: 900px; height: 500px"></div>
                        <!--Ewuaso Kedong Livestock Market-->
                            <h1 class="title">Ewuaso Kedong Livestock Market</h1>
                            <hr>

                            <div class="textimage1">
                            <div class="toptext1">
                        <p>
                          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo sunt magnam 
                          consectetur ea fugiat beatae harum eius reprehenderit aliquam, 
                          corrupti itaque, expedita quisquam at quibusdam minima numquam nemo doloribus voluptatibus.
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium unde similique tenetur 
                        dolor recusandae enim quasi
                         autem quibusdam eum. Culpa voluptas nemo deserunt dolorum vitae natus nisi, fugiat eius non.
                        </p>
                          </div>
                          <div class="founderimage1">
                            <img src="./images/FB_IMG_1663505907187.jpg" class="founder1" style="width: 350px; height: 100%;">
                            </div>
                            </div>
                            
                            <div class="textimage">
                            <div class="founderimage">
                            <img src=" ./images/FB_IMG_1663161101546.jpg" class="founder" style="width: 350px; height: 100%;">
                            </div>
                            <div class="toptext">
                        <p>
                          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo sunt magnam 
                          consectetur ea fugiat beatae harum eius reprehenderit aliquam, 
                          corrupti itaque, expedita quisquam at quibusdam minima numquam nemo doloribus voluptatibus.
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium unde similique tenetur 
                        dolor recusandae enim quasi
                         autem quibusdam eum. Culpa voluptas nemo deserunt dolorum vitae natus nisi, fugiat eius non.
                        </p>
                          </div>
                          
                            </div>

                            <!-- <img src="./images/image.jpg">
                            <img src="./images/FB_IMG_1663161101546.jpg">
                            <p>This market is located near Ewuaso Kedong shopping center. </p> -->
                            <div id="tableID_wrapper" class="dataTables_wrapper no-footer">
                    <div class="dataTables_length" id="tableID_length">        
                 </div>                    
                    <H1 style="text-align:center">CATTLE</H1>              
                    <table id="tableID" class="display dataTable no-footer" style="grid-auto-columns: auto;" role="grid" aria-describedby="tableID_info">
                
                      <thead>
                        <tr role="row">
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Profile  : activate to sort column descending" style="width: 40.7188px; ">Live Weight</th>
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-label="Id No : activate to sort column ascending" style="width: 48.8906px;">Price (ksh)</th>
                        </tr>
                      </thead>
                      <tbody>                                      
                      <?php
                        if(mysqli_num_rows($query_kedong1) > 0){
                        ?>
                        <?php
                          while($data = mysqli_fetch_assoc($query_kedong1)){    
                        ?>
                          <tr class="row">
                        
                              <td> <?php  echo($data['weight']); ?> </td>
                              <td><?php  echo($data['price']); ?></td>
                          </tr>
                          <?php
                          }

                        }
                        else  if(mysqli_num_rows($query_kedong1) <= 0){
                          ?>
                          <tr>                       
                          <td> 'empty set'</td>
                          <td>'empty set'</td>
                        </tr>
                        <?php

                        }
                        ?>
                      </tbody>
                    </table>
                  
                    <H1 style="text-align:center">SHEEP AND GOAT</H1>              
                    <table id="tableID" class="display dataTable no-footer" style="grid-auto-columns: auto;" role="grid" aria-describedby="tableID_info">
                
                      <thead>
                        <tr role="row">
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Profile  : activate to sort column descending" style="width: 40.7188px; ">Live Weight</th>
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-label="Id No : activate to sort column ascending" style="width: 48.8906px;">Price (ksh)</th>
                        </tr>
                      </thead>
                      <tbody>                                      
                      <?php
                        if(mysqli_num_rows($query_kedong2) > 0){
                        ?>
                        <?php
                          while($data = mysqli_fetch_assoc($query_kedong2)){    
                        ?>
                          <tr class="row">
                        
                              <td> <?php  echo($data['weight']); ?> </td>
                              <td><?php  echo($data['price']); ?></td>
                          </tr>
                          <?php
                          }

                        }
                        else  if(mysqli_num_rows($query_kedong2) <= 0){
                          ?>
                          
                          <tr>
                        
                          <td> 'empty set'</td>
                          <td>'empty set'</td>
                        </tr>
                        <?php

                        }
                        ?>
                      </tbody>
                    </table>

                            <div id="curve_chart4" style="width: 900px; height: 500px"></div>
                    <!--kimana market-->
                    <h1 class="title" >Kimana Market</h1>
                    <hr>
                    <div class="textimage1">
                    <div class="toptext1">
                        <p>
                        traders selling their livestock in Kimana livestock market,kajiado county.Hundreds of Maasai people gather 
                        at Kimana town every Tuesday,forming one of the largest Maasai livestock markets in Kenya. Maasai people mainly live in
                         southern Kenya and northern Tanzania. As a nomadic ethnic group in eastern Africa,
                         Maasai people rely on livestock breeding as their main source of livelihood
                        </p>
                          </div>
                          <div class="founderimage1">
                            <img src="./images/img6.jpg" class="founder1" style="width: 350px; height: 100%;">
                            </div>
                            </div>

                            <div class="textimage">
                            <div class="founderimage">
                            <img src=" ./images/img4.jpg" class="founder1" style="width: 350px; height: 100%;">
                            </div>
                    <div class="toptext">
                        <p>
                          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo sunt magnam 
                          consectetur ea fugiat beatae harum eius reprehenderit aliquam, 
                          corrupti itaque, expedita quisquam at quibusdam minima numquam nemo doloribus voluptatibus.
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium unde similique tenetur 
                        dolor recusandae enim quasi
                         autem quibusdam eum. Culpa voluptas nemo deserunt dolorum vitae natus nisi, fugiat eius non.
                        </p>
                          </div>
                            </div>
                    <!-- <img src="./images/img5.jpg"> -->
                    <!-- <p>traders selling their livestock in Kimana livestock market,kajiado county.Hundreds of Maasai people gather at Kimana town every Tuesday,forming one of the largest Maasai livestock markets in Kenya. Maasai people mainly live in southern Kenya and northern Tanzania. As a nomadic ethnic group in eastern Africa,
                        Maasai people rely on livestock breeding as their main source of livelihood.</p> -->
              <div id="tableID_wrapper" class="dataTables_wrapper no-footer">
                    <div class="dataTables_length" id="tableID_length">        
                 </div>                    
                    <H1 style="text-align:center">CATTLE</H1>              
                    <table id="tableID" class="display dataTable no-footer" style="grid-auto-columns: auto;" role="grid" aria-describedby="tableID_info">
                
                      <thead>
                        <tr role="row">
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Profile  : activate to sort column descending" style="width: 40.7188px; ">Live Weight</th>
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-label="Id No : activate to sort column ascending" style="width: 48.8906px;">Price (ksh)</th>
                        </tr>
                      </thead>
                      <tbody>                                      
                      <?php
                        if(mysqli_num_rows($query_kimana1) > 0){
                        ?>
                        <?php
                          while($data = mysqli_fetch_assoc($query_kimana1)){    
                        ?>
                          <tr class="row">
                        
                              <td> <?php  echo($data['weight']); ?> </td>
                              <td><?php  echo($data['price']); ?></td>
                          </tr>
                          <?php
                          }

                        }
                        else  if(mysqli_num_rows($query_kimana1) <= 0){
                          ?>
                          <tr>                       
                          <td> 'empty set'</td>
                          <td>'empty set'</td>
                        </tr>
                        <?php

                        }
                        ?>
                      </tbody>
                    </table>
                  
                    <H1 style="text-align:center">SHEEP AND GOAT</H1>              
                    <table id="tableID" class="display dataTable no-footer" style="grid-auto-columns: auto;" role="grid" aria-describedby="tableID_info">
                
                      <thead>
                        <tr role="row">
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Profile  : activate to sort column descending" style="width: 40.7188px; ">Live Weight</th>
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-label="Id No : activate to sort column ascending" style="width: 48.8906px;">Price (ksh)</th>
                        </tr>
                      </thead>
                      <tbody>                                      
                      <?php
                        if(mysqli_num_rows($query_kimana2) > 0){
                        ?>
                        <?php
                          while($data = mysqli_fetch_assoc($query_kimana2)){    
                        ?>
                          <tr class="row">
                        
                              <td> <?php  echo($data['weight']); ?> </td>
                              <td><?php  echo($data['price']); ?></td>
                          </tr>
                          <?php
                          }

                        }
                        else  if(mysqli_num_rows($query_kimana2) <= 0){
                          ?>
                          
                          <tr>
                        
                          <td> 'empty set'</td>
                          <td>'empty set'</td>
                        </tr>
                        <?php

                        }
                        ?>
                      </tbody>
                    </table>

                        <div id="curve_chart5" style="width: 900px; height: 500px"></div>
                    <h2 class="furtherresearch">Further Research <hr> </h2>
                        <div class="research">
                        <p> <h3>Drough/climate change</h3>
                        climate change has signifivantly affected global agriculture in the 21st century.A2007 assessment report by intergovernmental panel on climate change (IPCC)
                        indicate that most countries will experience an increase in average temperature, more frequent heat waves,more stressed water 
                        resources , desertification ,and periods of heavy precipitation.Farmers in Kenya face a variety of challenges from pests to drought
                         The changing climate has led to erratic weather that offten catches farmers unaware, and has become a major concern as the situation
                         is likely to worsen in the future. Kenya has,in the recent past, experienced severe drought that has left kenyans vulnerable because 
                         of the countrys high dependency on natural resource and its low capacity to adapt and cope with climate-related impacts.
                         <h4>Factors affecting yield</h4>
                         Due to the factors noted above ,it is not surprising that this study found climate change and drought are among the biggest factors 
                         affecting yield Fifty percent of the farmers we surveyed said that climate change had affected their yield in the past season ,and 17% said that 
                         drought had affected yield .Climate was also listed as one of the key challenges farmers face overall, with 27% identifying the as a challenge they face 
                         <br><h4>source: shamba shape up<h4> 
                          <br>
                        <a href="https://www.kalro.org/">Kenya Agricultural and Livestock Research Organization</a>
                        <br>
                         <a href="https://meteo.go.ke/">Kenya Meteorological Department</a>
                                          </p>
                        </div>

                   
                        <!-- <article class="last-container">
                            <div> -->
                                <!-- <p class="footertext">Contact Us: Email:deyasaitabau@gmail.com</p> -->
                                <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
                                <!-- <a href="#" class="fa fa-facebook"></a> -->
                                <!-- <a href="https://web.facebook.com/profile.php?id=100072257630546" class="fa fa-facebook" style="color:white;"></a> -->
                                <!-- <p class="footertext"> Direct-helpline:+254729533373</p>
                                </div>
                                
                        </article>   -->
                        <article class="last-container">
                        <div class="footer">
                        <div class="social-buttons">
  <a href="https://www.facebook.com/profile.php?id=100072257630546&mibextid=ZbWKwL" class="social-button social-button--facebook" aria-label="Facebook" >
    <i id="icon"id="icon" class="fab fa-facebook-f" ></i>
  </a>
  <a href="#" class="social-button social-button--linkedin" aria-label="LinkedIn" >
    <i id="icon"id="icon" class="fab fa-linkedin-in"></i>
  </a>
  <a href="#" class="social-button social-button--snapchat" aria-label="Snapchat" >
    <i id="icon"id="icon" class="fab fa-snapchat-ghost"></i>
  </a>
  <a href="#" class="social-button social-button--github" aria-label="GitHub"     >
    <i id="icon"id="icon" class="fab fa-github"></i>
  </a>
  <a href="#" class="social-button social-button--codepen" aria-label="CodePen" >
    <i id="icon"id="icon" class="fab fa-codepen"></i>
  </a>
</div>
</div>
<div>
<p class="footertext">Contact Us: Email:deyasaitabau@gmail.com</p>
<p class="footertext"> Direct-helpline:+254729533373</p>

</div>
</article>
</body>
</html>