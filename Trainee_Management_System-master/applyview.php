<?php include("db.php"); ?>
<?php


//for error msgs
$allerror=$T_id_err = $Title_err = $Full_Name_err = $Name_with_Initials_err = $NIC_err = $Age_err = $Gender_err = $DOB_err = $Add_Line1_err = $Add_Line2_err = $Add_Line3_err = $Temp_Add_Line1_err = $Temp_Add_Line2_err = $Temp_Add_Line3_err = $Contact_Number1_err = $Contact_Number2_err = $E_Mail_err = $tblTrainingInstituteID_err = $ProgramName_err = $tblCourseID_err = $Batch_err = $Year_err = $Contact_Person_err = $Contact_number_err = $Relationship_err = $Address_err = $tblBankID_err = $Name_as_Bank_err = $Bank_Account_number_err = $flag_err =$Branch_err=$joinDate_err=$endDate_err=$salary_err="";


$T_id = $Title = $cname = $cname1 = $Full_Name = $Name_with_Initials = $NIC = $Age = $Gender = $DOB = $Add_Line1 = $Add_Line2 = $Add_Line3 = $Temp_Add_Line1 = $Temp_Add_Line2 = $Temp_Add_Line3 = $Contact_Number1 = $Contact_Number2 = $E_Mail = $tblTrainingInstituteID = $tblCourseID = $Batch = $Year = $Contact_Person = $Contact_number = $Relationship = $Address = $tblBankID = $Name_as_Bank = $Bank_Account_number = $flag =$jdate=$edate=$salary= "";



// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}



$sql = "SELECT * FROM tbl_apply";
$result = mysqli_query($con, $sql);
$count1 = mysqli_num_rows($result);
$nextID = ++$count1;
$T_id_app = $nextID;


$sql = "SELECT *  FROM tbl_apply WHERE tblTraineeID='" . $_GET['id'] . "' ";
$traineeTemp_data = $con->query($sql);

if ($traineeTemp_data->num_rows == 1) {
  $row = mysqli_fetch_assoc($traineeTemp_data);

  $T_id = $row['tblTraineeID'];
  $T_id2 = $row['Trainee_ID'];
  $Title = $row['tname'];
  $cname = $row['cname'];
  $cname1 = $row['title'];
  $Full_Name = $row['NIC'];
  $Name_with_Initials = $row['Sday'];
  $NIC = $row['Eday'];
  $Gender = $row['job'];

  $Age = $row['Div1'];
  $DOB = $row['Div1s'];
  $Add_Line1 = $row['Div1e'];

  $Add_Line2 = $row['Div2'];
  $Add_Line3 = $row['Div2s'];
  $Temp_Add_Line1 = $row['Div2e'];

  $Temp_Add_Line2 = $row['Div3'];
  $Temp_Add_Line3 = $row['Div3s'];
  $Contact_Number1 = $row['Div3e'];

  $Contact_Number2 = $row['Div4'];
  $E_Mail = $row['Div4s'];
  $tblTrainingInstituteID = $row['Div4e'];


  $tblCourseID = $row['Div5'];
  $Batch = $row['Div5s'];
  $Year = $row['Div5e'];

  $Contact_Person = $row['Div6'];
  $Contact_number = $row['Div6s'];
  $Relationship = $row['Div6e'];

  $Address = $row['Notrain'];
  $tblBankID = $row['Topic'];
  $Name_as_Bank = $row['Project'];
  $Bank_Account_number = $row['P1'];
 
  $branch = $row['P2'];
  $programName=$row['P3'];
  



}

if (isset($_POST["btnSubmit"])) {


  header("Location:tblapply.php");


}

$con->close();


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>View trainee</title>
  <?php include_once("header.php") ?>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
  <br>
  <br>
  <br>
  <div>
    <center>
      <h2>View Trainee Certificate Apply Details</h2>
    </center>
  </div>
  <center>
    <form class="form-horizontal" method="post" action="">
      <!-- personal details -->

      <div class="container col-md-6 col-md-offset-3 ">
        <div class="panel-group">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title "> Personal Details </h4>
            </div>
            
            <div class="panel-body">
              
            
            <div class="form-group">
                <label for="inputText2" class="col-sm-4 control-label">Title</label>
                <div class="col-sm-8">
                 <input type="text" class="form-control" name="title" id="title"
                 value="<?php echo $cname1; ?>" disabled>
               </div>
             </div>
             <?php if (isset($_POST["btnSubmit"])) { ?>
             <span class="text-danger"><?php echo $Title_err; ?></span>
             <?php } ?>
                
            



              <div class="form-group">
                <label for="inputText1" class="col-sm-4 control-label">Trainee ID</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="v_trainee_ID" id="v_Trainee_ID"
                  placeholder="MOB/INOC/" value="<?php echo  $T_id2; ?>" disabled>
                </div>
                <?php if (isset($_POST["btnSubmit"])) { ?>
                <span class="text-danger"><?php echo $T_id_err; ?></span>
                <?php } ?>
              </div>
              <div class="form-group">
                <label for="inputText2" class="col-sm-4 control-label">Full Name </label>
                <div class="col-sm-8">
                 <input type="text" class="form-control" name="v_title" id="v_title"
                 value="<?php echo $Title; ?>" disabled>
               </div>
             </div>
             <?php if (isset($_POST["btnSubmit"])) { ?>
             <span class="text-danger"><?php echo $Title_err; ?></span>
             <?php } ?>



             <div class="form-group">
                <label for="inputText2" class="col-sm-4 control-label">Name For Certificate</label>
                <div class="col-sm-8">
                 <input type="text" class="form-control" name="v_title" id="v_title"
                 value="<?php echo $cname; ?>" disabled>
               </div>
             </div>
             <?php if (isset($_POST["btnSubmit"])) { ?>
             <span class="text-danger"><?php echo $Title_err; ?></span>
             <?php } ?>
                
             <div class="form-group">
              <label for="inputText1" class="col-sm-4 control-label">NIC</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="v_fname" id="v_Fname"
                placeholder="NIC" value="<?php echo $Full_Name; ?>" disabled>
              </div>
              <?php if (isset($_POST["btnSubmit"])) { ?>
              <span class="text-danger"><?php echo $Full_Name_err; ?></span>
              <?php } ?>
            </div>


            <div class="form-group">
              <label for="inputText2" class="col-sm-4 control-label">Start Date </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="v_initials" id="v_initials"
                placeholder="Start Date " value="<?php echo $Name_with_Initials; ?>" disabled>
              </div>
              <?php if (isset($_POST["btnSubmit"])) { ?>
              <span class="text-danger"><?php echo $Name_with_Initials_err; ?></span>
              <?php } ?>
            </div>
            <div class="form-group">
              <label for="inputText1" class="col-sm-4 control-label">End Date</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="v_nic" id="v_nic"
                placeholder="End Date" value="<?php echo $NIC; ?>" disabled>
              </div>
              <?php if (isset($_POST["btnSubmit"])) { ?>
              <span class="text-danger"><?php echo $NIC_err; ?></span>
              <?php } ?>
            </div>

            <div class="form-group">
              <label for="inputText2" class="col-sm-4 control-label">Division 1 </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="v_age" id="v_age" placeholder="Division 1  "
                value="<?php echo $Age; ?>" disabled>
              </div>
              <?php if (isset($_POST["btnSubmit"])) { ?>
              <span class="text-danger"><?php echo $Age_err; ?></span>
              <?php } ?>
            </div>
            <div class="form-group">
              <label for="inputText2" class="col-sm-4 control-label">Division 1 Start </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="v_dob" id="v_dob"
                placeholder="Division 1 Start" value="<?php echo $DOB; ?>" disabled>
              </div>
              <?php if (isset($_POST["btnSubmit"])) { ?>
              <span class="text-danger"><?php echo $DOB_err; ?></span>
              <?php } ?>
            </div>
            

            <div class="form-group">
            <label for="inputText2" class="col-sm-4 control-label">Division 1 End </label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="v_add1" id="v_add1"
              placeholder="Division 1 End" value="<?php echo $Add_Line1; ?>" disabled>
            </div>
            <?php if (isset($_POST["btnSubmit"])) { ?>
            <span class="text-danger"><?php echo $Add_Line1_err; ?></span>
            <?php } ?>
          </div>

         
           
           
          <div class="form-group">
            <label for="inputText2" class="col-sm-4 control-label">Division 2 </label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="v_add2" id="v_add2"
              placeholder="Division 2" value="<?php echo $Add_Line2; ?>" disabled>
            </div>
            <?php if (isset($_POST["btnSubmit"])) { ?>
            <span class="text-danger"><?php echo $Add_Line2_err; ?></span>
            <?php } ?>
          </div>
          <div class="form-group">
            <label for="inputText2" class="col-sm-4 control-label">Division 2 Start </label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="v_add3" id="v_add3"
              placeholder="Division 2 Start" value="<?php echo $Add_Line3; ?>" disabled>
            </div>
            <?php if (isset($_POST["btnSubmit"])) { ?>
            <span class="text-danger"><?php echo $Add_Line3_err; ?></span>
            <?php } ?>
          </div>
          <div class="form-group">
            <label for="inputText2" class="col-sm-4 control-label">Division 2 End </label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="v_tadd1" id="v_tadd1"
              placeholder="Division 2 End" value="<?php echo $Temp_Add_Line1; ?>" disabled>
            </div>
            <?php if (isset($_POST["btnSubmit"])) { ?>
            <span class="text-danger"><?php echo $Temp_Add_Line1_err; ?></span>
            <?php } ?>
          </div>
          <div class="form-group">
            <label for="inputText2" class="col-sm-4 control-label">Division 3 </label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="v_tadd2" id="v_tadd2"
              placeholder="Division 3" value="<?php echo $Temp_Add_Line2; ?>" disabled>
            </div>
            <?php if (isset($_POST["btnSubmit"])) { ?>
            <span class="text-danger"><?php echo $Temp_Add_Line2_err; ?></span>
            <?php } ?>
          </div>
          <div class="form-group">
            <label for="inputText2" class="col-sm-4 control-label">Division 3 Start </label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="v_tadd3" id="v_tadd3"
              placeholder="Division 3 Start " value="<?php echo $Temp_Add_Line3; ?>" disabled>
            </div>
            <?php if (isset($_POST["btnSubmit"])) { ?>
            <span class="text-danger"><?php echo $Temp_Add_Line3_err; ?></span>
            <?php } ?>
          </div>
          <div class="form-group">
            <label for="inputText2" class="col-sm-4 control-label">Division 3 End </label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="v_mob1" id="v_mob1"
              placeholder="Division 3 End" value="<?php echo $Contact_Number1; ?>" disabled>
            </div>
            <?php if (isset($_POST["btnSubmit"])) { ?>
            <span class="text-danger"><?php echo $Contact_Number1_err; ?></span>
            <?php } ?>
          </div>
          <div class="form-group">
            <label for="inputText2" class="col-sm-4 control-label">Division 4 </label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="v_fno" id="v_fno"
              placeholder="Division 4" value="<?php echo $Contact_Number2; ?>" disabled>
            </div>
            <?php if (isset($_POST["btnSubmit"])) { ?>
            <span class="text-danger"><?php echo $Contact_Number2_err; ?></span>
            <?php } ?>
          </div>
          <div class="form-group">
            <label for="inputText2" class="col-sm-4 control-label">Division 4 Start </label>
            <div class="col-sm-8">
              <input type="email" class="form-control" name="v_email" id="v_email"
              placeholder="Division 4 Start" value="<?php echo $E_Mail; ?>" disabled>
            </div>
            <?php if (isset($_POST["btnSubmit"])) { ?>
            <span class="text-danger"><?php echo $E_Mail_err; ?></span>
            <?php } ?>
          </div>


          <div class="form-group">
            <label for="inputText2" class="col-sm-4 control-label">Division 4 End </label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="v_div" id="v_div"
              placeholder="Division 4 End" value="<?php echo $tblTrainingInstituteID; ?>" disabled>
            </div>
            <?php if (isset($_POST["btnSubmit"])) { ?>
            <span class="text-danger"><?php echo $E_Mail_err; ?></span>
            <?php } ?>
          </div>


          <div class="form-group">
            <label for="inputText2" class="col-sm-4 control-label">Division 5 </label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="v_div" id="v_div"
              placeholder="Division 5" value="<?php echo $tblCourseID; ?>" disabled>
            </div>
            <?php if (isset($_POST["btnSubmit"])) { ?>
            <span class="text-danger"><?php echo $E_Mail_err; ?></span>
            <?php } ?>
          </div>


          <div class="form-group">
            <label for="inputText2" class="col-sm-4 control-label">Division 5 Start </label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="v_div" id="v_div"
              placeholder="Division 5 Start" value="<?php echo $Batch; ?>" disabled>
            </div>
            <?php if (isset($_POST["btnSubmit"])) { ?>
            <span class="text-danger"><?php echo $E_Mail_err; ?></span>
            <?php } ?>
          </div>


          <div class="form-group">
            <label for="inputText2" class="col-sm-4 control-label">Division 5 End </label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="v_div" id="v_div"
              placeholder="Division 5 End " value="<?php echo $Year; ?>" disabled>
            </div>
            <?php if (isset($_POST["btnSubmit"])) { ?>
            <span class="text-danger"><?php echo $E_Mail_err; ?></span>
            <?php } ?>
          </div>


          <div class="form-group">
            <label for="inputText2" class="col-sm-4 control-label">Division 6 </label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="v_div" id="v_div"
              placeholder="Division 6" value="<?php echo $Contact_Person; ?>" disabled>
            </div>
            <?php if (isset($_POST["btnSubmit"])) { ?>
            <span class="text-danger"><?php echo $E_Mail_err; ?></span>
            <?php } ?>
          </div>


          <div class="form-group">
            <label for="inputText2" class="col-sm-4 control-label">Division 6 Start </label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="v_div" id="v_div"
              placeholder="Division 6 Start " value="<?php echo  $Contact_number; ?>" disabled>
            </div>
            <?php if (isset($_POST["btnSubmit"])) { ?>
            <span class="text-danger"><?php echo $E_Mail_err; ?></span>
            <?php } ?>
          </div>


          <div class="form-group">
            <label for="inputText2" class="col-sm-4 control-label">Division 6 End </label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="v_div" id="v_div"
              placeholder="Division 6 End" value="<?php echo $Relationship; ?>" disabled>
            </div>
            <?php if (isset($_POST["btnSubmit"])) { ?>
            <span class="text-danger"><?php echo $E_Mail_err; ?></span>
            <?php } ?>
          </div>


          <div class="form-group">
            <label for="inputText2" class="col-sm-4 control-label">No Of Training Programs Attended </label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="v_div" id="v_div"
              placeholder="No Of Training Programs Attended" value="<?php echo  $Address; ?>" disabled>
            </div>
            <?php if (isset($_POST["btnSubmit"])) { ?>
            <span class="text-danger"><?php echo $E_Mail_err; ?></span>
            <?php } ?>
          </div>


          <div class="form-group">
            <label for="inputText2" class="col-sm-4 control-label">Individual Topic Covered </label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="v_div" id="v_div"
              placeholder="Individual Topic Covered" value="<?php echo $tblBankID; ?>" disabled>
            </div>
            <?php if (isset($_POST["btnSubmit"])) { ?>
            <span class="text-danger"><?php echo $E_Mail_err; ?></span>
            <?php } ?>
          </div>


          <div class="form-group">
            <label for="inputText2" class="col-sm-4 control-label">No Of Project Completed</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="v_div" id="v_div"
              placeholder="No Of Project Completed" value="<?php echo $Name_as_Bank; ?>" disabled>
            </div>
            <?php if (isset($_POST["btnSubmit"])) { ?>
            <span class="text-danger"><?php echo $E_Mail_err; ?></span>
            <?php } ?>
          </div>


          <div class="form-group">
            <label for="inputText2" class="col-sm-4 control-label">Project Name1</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="v_div" id="v_div"
              placeholder="Project Name1" value="<?php echo $Bank_Account_number; ?>" disabled>
            </div>
            <?php if (isset($_POST["btnSubmit"])) { ?>
            <span class="text-danger"><?php echo $E_Mail_err; ?></span>
            <?php } ?>
          </div>


          <div class="form-group">
            <label for="inputText2" class="col-sm-4 control-label">Project Name2 </label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="v_div" id="v_div"
              placeholder="Project Name2" value="<?php echo  $branch; ?>" disabled>
            </div>
            <?php if (isset($_POST["btnSubmit"])) { ?>
            <span class="text-danger"><?php echo $E_Mail_err; ?></span>
            <?php } ?>
          </div>


          <div class="form-group">
            <label for="inputText2" class="col-sm-4 control-label">Project Name3 </label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="v_div" id="v_div"
              placeholder="Project Name3" value="<?php echo $programName; ?>" disabled>
            </div>
            <?php if (isset($_POST["btnSubmit"])) { ?>
            <span class="text-danger"><?php echo $E_Mail_err; ?></span>
            <?php } ?>
          </div>







           



           
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>





<br/>
<input type="submit" class="btn btn-warning btn-lg btn-block" name="btnSubmit" value="Back">
</div>
</form>
</center>
</body>
</html>