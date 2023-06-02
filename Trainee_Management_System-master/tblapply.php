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
color:#272e2b; border:chocolate; border:20px">Trainee Certificate Apply Details</h1>
  </center>
  <div class="container col-md-11 col-md-offset-1 form-horizontal "> 
  <br><br>
    
    <input id="myInput" type="text" placeholder="Search.." style="width:250px; height:40px" class="form-control">
<br><br>
    

      <div>

        <table class="table table-bordered " id="tblTrainee" style="font-size:13px;">


    
          
                <th>ID</th>
                <th>Full Name</th>
                <th>Name For Certificate</th>
                <!-- <th>NIC</th> -->
                <th>Programme Start Date</th>
                <th>Programme End Date</th>
               
                <!-- <th>Training Division1</th>
                
                
                <th>Training Division2</th>
               
                
                <th>Training Division3</th>
                
                
                
               

                <th>Job Type</th>
                <th>No Of Training Programs Attended</th>

               
                <th>No Of Project Completed</th>
                <th>Project Name1</th>
                <th>Project Name2</th>
                
                <th>Supervisor </th>
                <th>Division</th> -->
                <th>Status</th>
                <th>View</th>



                <tbody id="myTable">

<?php
  $rowcount=1;
$sql = "SELECT *  FROM tbl_apply  ";
$feed_data = $con->query($sql);


if ($feed_data->num_rows >= 1) {
  while ($row = mysqli_fetch_assoc($feed_data)) :?>
  <tr>
  
   <?php
 $time3 = $row['Sday'];
 $array3 = explode(' ', $time3);
?>
    
      <td><?php echo  $row['Trainee_ID']; ?></td>
      <td><?php echo  $row['tname']; ?></td>
      <td><?php echo  $row['cname']; ?></td>
      <td><?php echo $array3[0]; ?></td>
      <td><?php echo  $row['Eday']; ?></td>
      <td><?php echo  $row['flag']; ?></td>
     
      <td>
                    <a href='applyview.php?id=<?php 
                    echo $row["tblTraineeID"] ?>'
                    class="btn btn-primary btn-xs">Click Here</a>
                  </td>

                  <td>
                            <a href='applyMaintenance.php?idStatus=<?php echo $row["tblTraineeID"] ?>'
                               class="btn btn-danger btn-xs">Done</a>
                        </td>
                        <td>
                            <a href='applyMaintenance.php?idStatus1=<?php echo $row["tblTraineeID"] ?>'
                               class="btn btn-success btn-xs">Not Done</a>
                        </td>
       </tr>
   
   <?php
    
endwhile;

} ?>




</tbody>
</table>
    </div>

<div>


     <td><input type="submit" name="btnExcel" id="btnExcel" class="btn btn-danger" value="Export Excel"></td><div class="label"></div>


     <script src="JQuery/jquery-3.2.1.min.js"></script>
     <script type="text/javascript" src="JQuery/jquery.table2excel.js"></script>

     <script type="text/javascript">
      $('#btnExcel').click(function(){
        $('.table').table2excel({
          name: "trainee",
          filename: "CertifiacteApplyData",
        });

      });

    </script>
  </div>

<script type="text/javascript">
  $(function() {
    $('a[data-toggle="tab"]').on('click', function(e) {
      window.localStorage.setItem('activeTab', $(e.target).attr('href'));
    });
    var activeTab = window.localStorage.getItem('activeTab');
    if (activeTab) {
      $('#myTab a[href="' + activeTab + '"]').tab('show');
      window.localStorage.removeItem("activeTab");
    }
  });

</script>

</body>
</html>