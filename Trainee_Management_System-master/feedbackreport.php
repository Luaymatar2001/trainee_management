<?php include("db.php"); ?>

<!DOCTYPE>
<html>
<head>
  <title>Trainee Feedback Report</title>
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
color:#272e2b; border:chocolate; border:20px">Trainee Feedback Report</h1>
  </center>
  <div class="container col-md-11 col-md-offset-1 form-horizontal "> 
  <br><br>
    
    <input id="myInput" type="text" placeholder="Search.." style="width:250px; height:40px" class="form-control">
<br><br>
    

      <div>

        <table class="table table-bordered " id="tblTrainee" style="font-size:16px;">


    
          <th>No</th>
          <th>Trainee ID</th>
          <th>Done By</th>
          <th>Comments</th>
          <th>Delete</th>
          



          <tbody id="myTable">

              <?php
                $rowcount=1;
              $sql = "SELECT *  FROM feed1  ";
              $feed_data = $con->query($sql);

           
              if ($feed_data->num_rows >= 1) {
                while ($row = mysqli_fetch_assoc($feed_data)) :?>
                <tr>


            
                    <td><?php echo $rowcount++; ?></td>
                    <td><?php echo  $row['Trainee_ID']; ?></td>
                    <td><?php echo  $row['Done']; ?></td>
                    <td><?php echo  $row['com']; ?></td>
                    <td>
                            <a href='delete1.php?idStatus1=<?php echo $row["id"] ?>'
                               class="btn btn-danger btn-xs">Delete</a>
                        </td>
                
                     </tr>
                 
                 <?php
                  
             endwhile;

            } ?>
        



     </tbody>
 </table>
    </div>

<div>


     <td><input type="submit" name="btnExcel" id="btnExcel" class="btn btn-danger" value="Export Excel"></td><div class="label"><?php echo "Total count: ".--$rowcount; ?></div>


     <script src="JQuery/jquery-3.2.1.min.js"></script>
     <script type="text/javascript" src="JQuery/jquery.table2excel.js"></script>

     <script type="text/javascript">
      $('#btnExcel').click(function(){
        $('.table').table2excel({
          name: "trainee",
          filename: "traineefeedback",
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