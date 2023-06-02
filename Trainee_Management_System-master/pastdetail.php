<?php include("db.php"); ?>

<!DOCTYPE>
<html>
<head>
  <title>Requester Maintaining</title>
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
color:#272e2b; border:chocolate; border:20px">Requester Maintaining</h1>
  </center>
<form action="RegisterAction">
    <div class="container col-md-10 col-md-offset-1">

        <br><br>
        <input id="myInput" type="text" placeholder="Search.." style="width:250px; height:40px" class="form-control">
<br><br>

        <table class="table table-hover table-bordered ">
            <tr>
                <th>No</th>
                <th>TraineeID</th>
                <th>Division Name</th>
                <th>Division Head</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Sequence</th>
                <th>Remark</th>
                


            </tr>
            <tbody id="myTable">

            <?php
            $rowcount=1;
            $sql = "SELECT *  FROM tbl_schedule1  WHERE flag='INACTIVE' ";
            $division_data = $con->query($sql);

            if ($division_data->num_rows >= 1) {
                while ($row = mysqli_fetch_assoc($division_data)) :
                
                    $id= $row['sub_item'];
                
                
                ?>


                    <tr>
                        <td><?php echo $rowcount++; ?></td>
                        <td><?php echo $row['Trainee_ID']; ?></td>
                        <td> <?php
                         $sql = "SELECT *  FROM tbl_division WHERE tblDivisionID = '".$id."'  ";
                         $institute_data = $con->query($sql);
                         if ($institute_data->num_rows >= 1) :

                          while ($row1 = mysqli_fetch_assoc($institute_data)) :?>
                          <?php echo $row1['Name']?>
                          <?php
                        endwhile;
                      endif;
                      ?></td>
                        <td><?php echo $row['supervisor']; ?></td>
                        <td><?php echo $row['startdate']; ?></td>
                        <td><?php echo $row['enddate']; ?></td>
                        <td><?php echo $row['sequence']; ?></td>
                        <td><?php echo $row['remark']; ?></td>
                        <td>
                            <a href='delete.php?idStatus=<?php echo $row["id"] ?>'
                               class="btn btn-danger btn-xs">Delete</a>
                        </td>
                    </tr>
                    <?php
                endwhile;
            } ?>

            </tbody>
        </table>
        <a href=''class="btn btn-success btn-xs">SHOW PAST DETAILS</a>
    </div>
</form>
</body>
</html>