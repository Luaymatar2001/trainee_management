<?php include("db.php"); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Trainee Allowance Report</title>
  <?php include("header.php") ?>
</head>
<body > 

<style type="text/css">
  .column {
  float: left;
  width: 50%;
  padding: .5%;
  color: black;
}
</style>
  <br><br><br>   
  <center>
    <h2>MOBITEL (PVT) LIMITED</h2>
  </center>

  <?php 
  $title = $name = $division ="";
  $rowcount2 = "1";
  ?>
  <div class="container col-md-11 col-md-offset-1 form-horizontal ">
    <h2>Trainee Allowance Sheet</h2>
    <div class="container col-md-12">
      <table style="color :black"  >
        <form action="" method="post" class="form-horizontal">
          <tr>
            <th><label>From Date</label>
             <td style="width: 200px; padding-right: 30px;padding-left: 10px;"><input type="Date" name="fDate" class="form-control"> </td></th>
             <th><label>To Date</label>
               <td  style="width: 200px; padding-right: 30px;padding-left: 10px;"><input type="Date" name="tDate" class="form-control"></td></th>
               


              <th>

                                <label>Trainee ID</label>
                                <td>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="v_Trainee_ID" id="v_Trainee_ID"
                                           placeholder="Trainee ID" value="<?php if (isset($_POST['btnTrainee1'])) {



                                       // echo $_POST['v_Trainee_ID'];
                                    } ?>">
                                </div></td>
                                <?php if (isset($_POST["btnTrainee1"])) { ?>

                                    <span class="text-danger"></span>

                                <?php } ?>
                            


              </th>






            

             <td style="padding-top: 30px; padding-bottom: 30px;"><input type="submit" name="btnTrainee1" class="btn btn-success" value="View Data"></td>


          </table>

        </form>

      </div>

          

                    <?php 
                    if(isset($_POST["btnTrainee1"])){
                    	$count=1;
                    $rowcount2=1;
                    $today=date('Y-m-d');
                    $TID= 'MOB/TR/' . $_POST['v_Trainee_ID'];
					 $TIDn= $_POST['v_Trainee_ID'];
                    $from = $_POST["fDate"]." "."00:00:00";
              $to = $_POST["tDate"]." "."23:59:59";



            $sql1 = "SELECT *  FROM tbl_attendence WHERE  (CurrentDate BETWEEN '".$from."' AND '".$to."' ) AND tblTraineeID LIKE'%".$TIDn."' ";
             // $sql = "SELECT *  FROM tbl_attendence WHERE  MONTH(CurrentDate)='09' AND Trainee_ID='".$TID."  "
                   

                    ?>
                            <?php 
                            $tblTraineeID=$TID;
                            $sql = "SELECT * FROM `tbl_trainee` WHERE `Trainee_ID`='$tblTraineeID' ";

                            $resultSet = $con->query($sql);

                            if ($resultSet->num_rows == 1) {

                                $rows = mysqli_fetch_assoc($resultSet);
                                $title=$rows['Title'];
                                $name = $rows['Full_Name'];
                                $tblDivisionID = $rows['tblDivisionID'];
                            
                                $sql2 = "SELECT * FROM `tbl_division` WHERE `tblDivisionID`='$tblDivisionID' ";

                                $resultSet2 = $con->query($sql2);
    
                                if ($resultSet2->num_rows == 1) {
    
                                    $rows2 = mysqli_fetch_assoc($resultSet2);
                                    $division = $rows2['Name'];
    
                                }
                              }
?>

                              <table>
  <tr>
    <th>Duration  :- </th> <td>    <?php echo $_POST["fDate"].' to '.$_POST["tDate"] ?></td>
                          </tr>
                          </table>
<br>
                              <table>
  <tr>
    <th>Name  :- </th> <td>    <?php echo $title.'.'.$name ?></td>
                          </tr>
                          </table>
<br>
                          <table><tr>
       <th>TraineeID  :-  </th>   <td>    <?php echo $TID; ?></td>

  </tr>


</table><br>
                          <table><tr>
       <th>Division  :-  </th>   <td>    <?php echo $division; ?></td>
       
  </tr>


</table>
 
  
    <div class="row">
  <div class="column">

  <table class="table table-hover table-bordered ">


          

    <tr>
                    <th>#</th>
                    <th> Date   </th>
                    <th> In time </th>
                    <th> Out time </th>
                    	<th> Work Hours </th>

                </tr> </th>
                <tbody>

<?Php


 $institute_data1 = $con->query($sql1);
                    if ($institute_data1->num_rows > 0) {
                        while ($row = mysqli_fetch_assoc($institute_data1)) :?>

                          <?php  

                          IF ($count == 16) {

                            ?>
                             </tbody>
        </table>
                            </div>
                            
                            <div class="column">

                              <table class="table table-hover table-bordered ">


          

    <tr>
                    <th>#</th>
                    <th> Date   </th>
                    <th> In time </th>
                    <th> Out time </th>
                   	<th> Work Hours </th>

                </tr> </th>
                <tbody>
                              <?php
                          }
                          ?>


                        <tr>

                            
                            

                            <?php $rowcount= $rowcount2++; 




   
   //                           $today2=$row['CurrentDate'];
   //                           //$today1=date_format($row['CurrentDate'],"d");

   // $iparr = explode ("\-", $today2); 
   
   // print "$iparr[0] <br />";
   // print "$iparr[1] <br />" ;
   // print "$iparr[2] <br />"  ;
   // //print "$iparr[3] <br />"  ;



$str = $row['CurrentDate'];

// zero limit
//$str1[4]  = (explode('-',$str,3));

// positive limit
//print_r(explode('-',$str,2));

// negative limit
//print_r(explode('-',$str,-1));




                            ?>





                           <!--  <td><?php echo $str1[1];   ?></td>
 -->
                            
 <?php
 $time3 = $row['CurrentDate'];
 $array3 = explode(' ', $time3);
 
 $time4 = $array3[0];
 $array4 = explode('-', $time4);
 
 While($array4[2]!= $count){  ?>
 
  <?php  

                          IF ($count == 16) {

                            ?>
                             </tbody>
        </table>
                            </div>
                            
                            <div class="column">

                              <table class="table table-hover table-bordered ">


          

    <tr>
                    <th>#</th>
                    <th> Date   </th>
                    <th> In time </th>
                    <th> Out time </th>
                   	<th> Work Hours </th>

                </tr> </th>
                <tbody>
                              <?php
                          }
                          ?>


                        <tr>
 
 
 
 <td><?php echo $count++; ?></td>
  <td></td>
                            <td></td>
                            <td></td> 
							<td></td> 
 
  </tr>
 <?php
 }
 
 


?>							<td><?php echo $count++; ?></td>
                            <td><?php echo $array3[0]; ?></td>
                            <td><?php echo $row['In_Time']; ?></td>
                            <td><?php echo $row['Out_Time']; ?></td> 

                   <?php
				   
    $time2 = $row['In_Time'];
    $time1 = $row['Out_Time'];
    $array1 = explode(':', $time1);
    $array2 = explode(':', $time2);
if($time1 != 'N/A'){
    $minutes1 = ($array1[0] * 60.0 + $array1[1]);
    $minutes2 = ($array2[0] * 60.0 + $array2[1]);

     $diff = ($minutes1 - $minutes2)/60;
     $diff1 = round($diff);
}

else { $diff1 = '';}
?>
<td><?php echo $diff1 ?></td> 
                
                   

                        </tr>






                        <?php
                    endwhile;


While(32 > $count){  ?>

 <?php  

                          IF ($count == 16) {

                            ?>
                             </tbody>
        </table>
                            </div>
                            
                            <div class="column">

                              <table class="table table-hover table-bordered ">


          

    <tr>
                    <th>#</th>
                    <th> Date   </th>
                    <th> In time </th>
                    <th> Out time </th>
                   	<th> Work Hours </th>

                </tr> </th>
                <tbody>
                              <?php
                          }
                          ?>


                        <tr>
 
 <td><?php echo $count++; ?></td>
  <td></td>
                            <td></td>
                            <td></td> 
							<td></td> 
 
  </tr>
 <?php
 }



                    }
                } ?>
                 </tbody>
        </table>
</div>
         </div>  




No of Days Worked <?php echo --$rowcount2; ?> 
<div class="container col-md-10 col-md-offset-1" >
        <table class="table table-hover table-bordered ">
<tbody>

<tr><th>Approvals</th>
<th>Name</th>
<th>Signature</th>
</tr>
<td>HR Verification</td><td></td><td></td></tr>
<tr><td>HR Approval</td><td>Rikaza Faiz</td><td></td></tr>

</tbody>
        </table>
              </div>




    </form>













  </tr>
</form>
</table>
</div>
</div>
<button onclick="myFunction()">PDF</button>
<script>
function myFunction() {
  window.print();
}
</script>
</body>
</html>