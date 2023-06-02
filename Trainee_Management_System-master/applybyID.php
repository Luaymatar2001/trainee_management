<?php include("db.php"); ?>

<!DOCTYPE>
<html>
<head>
  <title>Trainee Report</title>
  <?php include("header.php") ?>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>



<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border:  solid #dddddd;
  text-align: left;
  padding: 2px;
}

th {
  border:  solid #dddddd;
  text-align: left;
  padding: 2px;
  background-color: #a89f9e;
}

tr:nth-child(even) {
  background-color: #d8eddc;
}
tr:hover {background-color: #e6c3c8;}
</style>

</head>
<body> 

  <br><br><br>   
  <center>
  <h1 style="background-color: #c3d6cd;
color:#272e2b; border:chocolate; border:20px">Trainee Certificate Apply Process</h1>
  </center>
  <div class="container col-md-11 col-md-offset-1 form-horizontal "> 
  <br><br>
    
    <input id="myInput" type="text" placeholder="Search.." style="width:250px; height:40px" class="form-control">
<br><br>
    

      <div>

        <table class="table table-bordered " id="tblTrainee" style="font-size:13px;">


    
          
                <th>ID</th>
                <th>Title</th>
                <th>Full Name</th>
                <th>Programme Start Date</th>
                <th>Programme End Date</th>
                <th>Apply</th>



                <tbody id="myTable">

<?php
  $rowcount=1;
$sql = "SELECT *  FROM tbl_trainee  ";
$feed_data = $con->query($sql);


if ($feed_data->num_rows >= 1) {
  while ($row = mysqli_fetch_assoc($feed_data)) :?>


<?php
 $time3 = $row['jdate'];
 $array3 = explode(' ', $time3);
?>


<?php
 $time2 = $row['edate'];
 $array2 = explode(' ', $time2);
?>

  <tr>

      <td><?php echo  $row['Trainee_ID']; ?></td>
      <td><?php echo  $row['Title']; ?></td>
      <td><?php echo  $row['Full_Name']; ?></td>
      <td><?php echo $array3[0]; ?></td>
      <td><?php echo $array2[0]; ?></td>
  
                            

      <td>
                    <a href='new1.php?id=<?php 
                    echo $row["tblTraineeID"] ?>'
                    class="btn btn-primary btn-xs">Click Here</a>
                  </td>
       </tr>
   
   <?php
    
endwhile;

} ?>




</tbody>
</table>
    </div>

<div>


     <div class="label"><?php echo "Total count: ".--$rowcount; ?></div>


     <script src="JQuery/jquery-3.2.1.min.js"></script>
     

  
  </div>


</body>
</html>