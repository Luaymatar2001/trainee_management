
<?php include("header.php") ?>

<?php  
	

 $connect = mysqli_connect("localhost", "root", "inoc@123", "ims_ino");  
 $query = "SELECT mark1, count(*) as number FROM feed1 GROUP BY mark1";  
 $result = mysqli_query($connect, $query);

 $query2 = "SELECT mark2, count(*) as number2 FROM feed1 GROUP BY mark2";  
 $result2 = mysqli_query($connect, $query2);

 $query3 = "SELECT mark3, count(*) as number3 FROM feed1 GROUP BY mark3";  
 $result3 = mysqli_query($connect, $query3);

 
 
 $query4 = "SELECT mark4, count(*) as number4 FROM feed1 GROUP BY mark4";  
 $result4 = mysqli_query($connect, $query4);

 $query5 = "SELECT mark5, count(*) as number5 FROM feed1 GROUP BY mark5";  
 $result5 = mysqli_query($connect, $query5);

 $query6 = "SELECT mark6, count(*) as number6 FROM feed1 GROUP BY mark6";  
 $result6 = mysqli_query($connect, $query6);

 $query7 = "SELECT mark7, count(*) as number7 FROM feed1 GROUP BY mark7";  
 $result7 = mysqli_query($connect, $query7);

 $query8 = "SELECT mark8, count(*) as number8 FROM feed1 GROUP BY mark8";  
 $result8 = mysqli_query($connect, $query8);

 $query9 = "SELECT mark9, count(*) as number9 FROM feed1 GROUP BY mark9";  
 $result9 = mysqli_query($connect, $query9);

 $query10 = "SELECT mark10, count(*) as number10 FROM feed1 GROUP BY mark10";  
 $result10 = mysqli_query($connect, $query10);

 $query11 = "SELECT mark11, count(*) as number11 FROM feed1 GROUP BY mark11";  
 $result11 = mysqli_query($connect, $query11);

 $query12 = "SELECT mark12, count(*) as number12 FROM feed1 GROUP BY mark12";  
 $result12 = mysqli_query($connect, $query12);

 $query13 = "SELECT mark13, count(*) as number13 FROM feed1 GROUP BY mark13";  
 $result13 = mysqli_query($connect, $query13);

 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head><br>  
      <br> 
      
           <title>Feedback</title>
           
          <center> <h1>Feedback Details</h1></center>
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['mark1', 'Number'], 
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["mark1"]."', ".$row["number"]."],";
															   
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of Reviews',  
                      is3D:true,  
                      //pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
		   
		   
		   
		   
		   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart2);  
           function drawChart2()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['mark2', 'Number2'], 
                          <?php  
                          while($row = mysqli_fetch_array($result2))  
                          {  
                               echo "['".$row["mark2"]."', ".$row["number2"]."],";
															   
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of Reviews',  
                      is3D:true,  
                      //pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart2'));  
                chart.draw(data, options);  
           }  
           </script>  
		   
		   
		   
		      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart3);  
           function drawChart3()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['mark3', 'Number3'], 
                          <?php  
                          while($row = mysqli_fetch_array($result3))  
                          {  
                               echo "['".$row["mark3"]."', ".$row["number3"]."],";
															   
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of Reviews',  
                      is3D:true,  
                      //pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart3'));  
                chart.draw(data, options);  
           }  
           </script> 
		   
		        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart4);  
           function drawChart4()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['mark4', 'Number4'], 
                          <?php  
                          while($row = mysqli_fetch_array($result4))  
                          {  
                               echo "['".$row["mark4"]."', ".$row["number4"]."],";
															   
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of Reviews',  
                      is3D:true,  
                      //pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart4'));  
                chart.draw(data, options);  
           }  
           </script> 
		   
		          <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart5);  
           function drawChart5()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['mark5', 'Number5'], 
                          <?php  
                          while($row = mysqli_fetch_array($result5))  
                          {  
                               echo "['".$row["mark5"]."', ".$row["number5"]."],";
															   
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of Reviews',  
                      is3D:true,  
                      //pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart5'));  
                chart.draw(data, options);  
           }  
           </script> 
		   
		   
		           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart6);  
           function drawChart6()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['mark6', 'Number6'], 
                          <?php  
                          while($row = mysqli_fetch_array($result6))  
                          {  
                               echo "['".$row["mark6"]."', ".$row["number6"]."],";
															   
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of Reviews',  
                      is3D:true,  
                      //pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart6'));  
                chart.draw(data, options);  
           }  
           </script> 
		   
		              <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart7);  
           function drawChart7()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['mark7', 'Number7'], 
                          <?php  
                          while($row = mysqli_fetch_array($result7))  
                          {  
                               echo "['".$row["mark7"]."', ".$row["number7"]."],";
															   
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of Reviews',  
                      is3D:true,  
                      //pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart7'));  
                chart.draw(data, options);  
           }  
           </script> 
		   
		   
		            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart8);  
           function drawChart8()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['mark8', 'Number8'], 
                          <?php  
                          while($row = mysqli_fetch_array($result8))  
                          {  
                               echo "['".$row["mark8"]."', ".$row["number8"]."],";
															   
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of Reviews',  
                      is3D:true,  
                      //pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart8'));  
                chart.draw(data, options);  
           }  
           </script> 
		   
		   
		          <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart9);  
           function drawChart9()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['mark9', 'Number9'], 
                          <?php  
                          while($row = mysqli_fetch_array($result9))  
                          {  
                               echo "['".$row["mark9"]."', ".$row["number9"]."],";
															   
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of Reviews',  
                      is3D:true,  
                      //pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart9'));  
                chart.draw(data, options);  
           }  
           </script> 

		   
		           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart10);  
           function drawChart10()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['mark10', 'Number10'], 
                          <?php  
                          while($row = mysqli_fetch_array($result10))  
                          {  
                               echo "['".$row["mark10"]."', ".$row["number10"]."],";
															   
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of Reviews',  
                      is3D:true,  
                      //pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart10'));  
                chart.draw(data, options);  
           }  
           </script> 

		   
		   
		          <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart11);  
           function drawChart11()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['mark11', 'Number11'], 
                          <?php  
                          while($row = mysqli_fetch_array($result11))  
                          {  
                               echo "['".$row["mark11"]."', ".$row["number11"]."],";
															   
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of Reviews',  
                      is3D:true,  
                      //pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart11'));  
                chart.draw(data, options);  
           }  
           </script>
		   
		   
		   
		   
		          <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart12);  
           function drawChart12()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['mark12', 'Number12'], 
                          <?php  
                          while($row = mysqli_fetch_array($result12))  
                          {  
                               echo "['".$row["mark12"]."', ".$row["number12"]."],";
															   
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of Reviews',  
                      is3D:true,  
                      //pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart12'));  
                chart.draw(data, options);  
           }  
           </script>
		   
		          <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart13);  
           function drawChart13()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['mark13', 'Number13'], 
                          <?php  
                          while($row = mysqli_fetch_array($result13))  
                          {  
                               echo "['".$row["mark13"]."', ".$row["number13"]."],";
															   
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of Reviews',  
                      is3D:true,  
                      //pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart13'));  
                chart.draw(data, options);  
           }  
           </script>
		   
		   
		   
		    
      </head>  
<center>
      <div>
      <body>  
           <br /><br />  
           <div style="width:950px; border: 1px solid red;">  
                <h3 align="center">1. The training program possesses good knowledge in the subject</h3>  
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
           </div>  
		   
		   
		      <br /><br />  
           <div style="width:950px; border: 1px solid red;">  
                <h3 align="center">2. The trainining program is well prepared</h3>  
                <br />  
                <div id="piechart2" style="width: 900px; height: 500px;"></div>  
           </div> 
		   
		     <br /><br />  
           <div style="width:950px; border: 1px solid red;">  
                <h3 align="center">3. Training program are well structured and organized</h3>  
                <br />  
                <div id="piechart3" style="width: 900px; height: 500px;"></div>  
           </div> 
		   
		     <br /><br />  
           <div style="width:950px; border: 1px solid red;">  
                <h3 align="center">4. Visual aids (Slides and Documents) were used effectively</h3>  
                <br />  
                <div id="piechart4" style="width: 900px; height: 500px;"></div>  
           </div> 
		   
		     <br /><br />  
           <div style="width:950px; border: 1px solid red;">  
                <h3 align="center">5. The trainer relates the subject matter to practical situations</h3>  
                <br />  
                <div id="piechart5" style="width: 900px; height: 500px;"></div>  
           </div> 
		   
		     <br /><br />  
           <div style="width:950px; border: 1px solid red;">  
                <h3 align="center">6. Readings materials provided are relevant and useful</h3>  
                <br />  
                <div id="piechart6" style="width: 900px; height: 500px;"></div>  
           </div> 
		   
		     <br /><br />  
           <div style="width:950px; border: 1px solid red;">  
                <h3 align="center">7. Training program encourages additional readings</h3>  
                <br />  
                <div id="piechart7" style="width: 900px; height: 500px;"></div>  
           </div> 
		   
		     <br /><br />  
           <div style="width:950px; border: 1px solid red;">  
                <h3 align="center">8. Training program maintains friendly relationship</h3>  
                <br />  
                <div id="piechart8" style="width: 900px; height: 500px;"></div>  
           </div> 
		   
		     <br /><br />  
           <div style="width:950px; border: 1px solid red;">  
                <h3 align="center">9. The trainer tries to get our involvement to the trainer and always encourages our participation</h3>  
                <br />  
                <div id="piechart9" style="width: 900px; height: 500px;"></div>  
           </div> 
		   
		     <br /><br />  
           <div style="width:950px; border: 1px solid red;">  
                <h3 align="center">10. The training Supervisors courages questions and comments</h3>  
                <br />  
                <div id="piechart10" style="width: 900px; height: 500px;"></div>  
           </div> 
		   
		     <br /><br />  
           <div style="width:950px; border: 1px solid red;">  
                <h3 align="center">11. Training program held my attention most of time</h3>  
                <br />  
                <div id="piechart11" style="width: 900px; height: 500px;"></div>  
           </div> 
		   
		     <br /><br />  
           <div style="width:950px; border: 1px solid red;">  
                <h3 align="center">12. Training program stimulated my interest in subject area</h3>  
                <br />  
                <div id="piechart12" style="width: 900px; height: 500px;"></div>  
           </div> 
		   
		     <br /><br />  
           <div style="width:950px; border: 1px solid red;"> 
           
           
                <h3 align="center">13. Overall performance of the training program is satisfactory</h3>  
                <br />  
                <div id="piechart13" style="width: 900px; height: 500px;"></div>  


              
           </div> 
          
		   
        </div>
        </center>  
        
        

        <script>
function myFunction() {
  window.print();
}
</script>
      </body>  
 </html> 