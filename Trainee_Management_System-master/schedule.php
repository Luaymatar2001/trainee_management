<?php include("db.php"); ?>

<?php

$error = $error1 = "";
$DivName_err=$DivName_err1=$DivHead_err=$DivCon_err=$DivLoc_err=$DivMail_err=$DivLoc1=$Bank_Account_number_err=$Bank_Account_number_err2=$Bank_Account_number_err3=$Bank_Account_number_err4=$Bank_Account_number_err5="";
$DivName=$DivName1=$DivHead=$DivCon=$DivLoc=$DivLoc1=$DivMail="";
$T_id = $id = $mark1 = $mark2= $mark3= $mark4= $mark5= $mark6= $mark7= $mark8= $mark9= $mark10= $mark11= $mark12= $mark13 = $done = $job = $ntrain = $Title = $Topic= $project = $P1 = $P2 = $P3 = $div = $Dv3 = $Dv2 = $Dv1 = $SDAY = $com = $EDAY = $Sup = $DIVI = $Name = $Name_with_Initials = $NIC = $Age = $Gender = $DOB = $Add_Line1 = $Add_Line2 = $Add_Line3 = $Temp_Add_Line1 = $Temp_Add_Line2 = $Temp_Add_Line3 = $Contact_Number1 = $Contact_Number2 = $E_Mail = $tblTrainingInstituteID = $ProgramName = $tblCourseID = $Batch = $Year = $Contact_Person = $Contact_number = $Relationship = $Address = $tblBankID = $Name_as_Bank = $Bank_Account_number = $flag = $branch = "";



if (isset($_POST["btnSubmit"])) {



    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    $sql="SELECT * FROM `tbl_division` WHERE Name='".$DivName."'";
    $resultSet= $con->query($sql);


//set parameters and execute

if (empty($_POST["v_id"])) {
    $Bank_Account_number_err = "ID number is required.";
} else {
    $id = $_POST["v_id"];

}

if (empty($_POST["Name"])) {
    $Bank_Account_number_err2 = "Division Name is required.";
} else {
    $com = $_POST["Name"];

}

if (empty($_POST["Division_Head"])) {
    $Bank_Account_number_err3 = "Head Name is required.";
} else {
    $done = $_POST["Division_Head"];

}

if (empty($_POST["index1"])) {
    $Bank_Account_number_err4 = "Start Date is required.";
} else {
    $mark1 = $_POST["index1"];

}

if (empty($_POST["index4"])) {
    $Bank_Account_number_err5 = "End Date is required.";
} else {
    $mark4 = $_POST["index4"];

}

$mark2 = $_POST["index2"];
$mark3= $_POST["index3"];

$flag = "PENDING";


 // Check connection
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }

if (empty($Bank_Account_number_err2) && empty($Bank_Account_number_err3) && empty($Bank_Account_number_err4) && empty($Bank_Account_number_err) && empty($Bank_Account_number_err5) ) {
/////
if ($resultSet->num_rows >= 1) {
    $error1 = "Division already exist";

} else
 {
    //     if (empty($T_id_err) && empty($Full_Name_err) && empty($Name_with_Initials_err) && empty($NIC_err) && empty($Age_err) && empty($Gender_err) && empty($DOB_err) && empty($Add_Line1_err) && empty($Add_Line2_err) && empty($Add_Line3_err) && empty($Temp_Add_Line1_err) && empty($Temp_Add_Line2_err) && empty($Temp_Add_Line3_err) && empty($Contact_Number1_err) && empty($Contact_Number2_err) && empty($E_Mail_err) && empty($tblTrainingInstituteID_err) && empty($tblCourseID_err) && empty($Batch_err) && empty($Year_err) && empty($Contact_Person_err) && empty($Contact_number_err) && empty($Relationship_err) && empty($Address_err) && empty($tblBankID_err) && empty($Name_as_Bank_err) && empty($Bank_Account_number_err)) {


        
        $sql1 = "INSERT INTO  tbl_schedule1 ( Trainee_ID, sub_item, supervisor, startdate, enddate, sequence, remark)
        VALUES( '$id', '$com', '$done','$mark1','$mark4','$mark2','$mark3')";
        $sql71 = "UPDATE `tbl_trainee` SET `tblDivisionID`='" . $_POST["Name"] . "' WHERE 	Trainee_ID = '" . $_POST["v_id"] . "'";
        
        $sql9 = "UPDATE tbl_schedule1 SET flag='INACTIVE' WHERE enddate < CURRENT_DATE()  ";


    if ($con->query($sql1) === TRUE) {
        if ($con->query($sql71) === TRUE) {
            if ($con->query($sql9) === TRUE) {
        

       $error2 = "New Shedule added successfully";

       
    } else {
        echo "Error: " . $sql1 . "<br>" . $con->error;
    }

    $con->close();


}  
}
 }

}


}        



//$sql10 = "UPDATE tbl_trainee SET flag='ACTIVE' WHERE edate > CURRENT_DATE()";

//$con->query($sql9);



///
    
    


?>


<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <title>In-Plant Training Schedule</title>

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


<body data-spy="scroll" data-target=".navbar" data-offset="50"class="hero-image">
<br><br><br>
<div>
    <center>
        <h2>In-Plant Training Schedule</h2>
    </center>
</div>


<center>

    <form class="form-horizontal" method="post" action="#">
        <!-- Add schedule -->


        <div class="container col-md-6 col-md-offset-3 ">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title ">
                        In-Plant Training Schedule
                        </h4>
                    </div>
                    <div>
                        <div class="panel-body">
  <?php if (isset($_POST["btnSubmit"])) { ?>

                <?php if (!empty($error)) { ?>
                    <div class="col-sm-12 alert alert-danger" role="alert">
                        <?php echo $error; ?>
                    </div>
                <?php } ?>

                <?php if (!empty($error1)) { ?>
                    <div class="col-sm-12 alert alert-success" role="alert">
                        <?php echo $error1 ?>
                    </div>
                <?php } ?>

            <?php } ?>

            <div class="form-group">
                                <label for="inputText2" class="col-sm-4 control-label">Trainee ID* </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="v_id"
                                           id="v_id"
                                           placeholder="Enter Trainee ID"  value ="MOB/TR/"autofocus="autofocus"onblur="this.value=this.value.toUpperCase()"  value="<?php if(isset($_POST['btnSubmit'])){
                                        echo $_POST['v_id'];} ?>" >

                                        <?php if (isset($_POST["btnSubmit"])) { ?>

                                                <span class="text-danger"><?php echo $Bank_Account_number_err; ?></span>

                                                <?php } ?>

                                </div>
                                 
                            </div>








                            <div class="form-group">
                                <label for="inputText2" class="col-sm-4 control-label">Division Name* </label>
                                <div class="col-sm-8">
                                <select class="form-control" name="Name" id="Name"
                                            value="<?php if (isset($_POST['btnSubmit'])) {
                                                echo $_POST['Name'];
                                            } ?>">
                                        <option value="0">--SELECT--</option>
                                        <?php
                                    $sql = "SELECT *  FROM tbl_division ";
                                    $department_data = $con->query($sql);
                                    if ($department_data->num_rows >= 1) :
                                        while ($row = mysqli_fetch_assoc($department_data)) :?>
                                            <option value="<?php echo $row["tblDivisionID"] ?>" <?php if ($row["tblDivisionID"]== $com): ?> ;
                                                    <?php endif ?>>
                                                <?php echo $row["Name"] ?>
                                            </option>
                                            <?php
                                        endwhile;
                                    endif;
                                    ?>
                                    </select>

                                    <script type="text/javascript">
                                      document.getElementById('Name').value = "<?php echo $_POST['Name'];?>";
                                    </script>

                                </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                    <span class="text-danger"><?php echo $Bank_Account_number_err2; ?></span>

                                <?php } ?>
                                 
                            </div>

                            <div class="form-group">
                                <label for="inputText2" class="col-sm-4 control-label">Division Head* </label>
                                <div class="col-sm-8">
                                <select class="form-control" name="Division_Head" id="Division_Head"
                                            value="<?php if (isset($_POST['btnSubmit'])) {
                                                echo $_POST['Division_Head'];
                                            } ?>">
                                        <option value="0">--SELECT--</option>
                                        <?php
                                        $sql = "SELECT *  FROM tbl_division ";
                                        $course_data = $con->query($sql);
                                        if ($course_data->num_rows >= 1) :
                                            while ($row = mysqli_fetch_assoc($course_data)) :?>
                                                <option value="<?php echo $row["Division_Head"] ?>"><?php echo $row["Division_Head"] ?></option>
                                                <?php
                                            endwhile;
                                        endif;
                                        ?>
                                    </select>

                                    <script type="text/javascript">
                                      document.getElementById('Division_Head').value = "<?php echo $_POST['Division_Head'];?>";
                                    </script>

                                </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                    <span class="text-danger"><?php echo $Bank_Account_number_err3; ?></span>

                                <?php } ?>
                                    
                            </div>

                            <div class="form-group">
                                <label for="inputText2" class="col-sm-4 control-label">Start Date* </label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" name="index1" id="index1"
                                           placeholder="Enter Contact NUmber" onblur="this.value=this.value.toUpperCase()"  value="<?php if(isset($_POST['btnSubmit'])){
                                        echo $_POST['index1'];} ?>">

                                        <?php if (isset($_POST["btnSubmit"])) { ?>

                                            <span class="text-danger"><?php echo $Bank_Account_number_err4; ?></span>

                                                <?php } ?>

                                </div>
                                
                            </div>

                            <div class="form-group">
                                <label for="inputText2" class="col-sm-4 control-label">End Date* </label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" name="index4" id="index4"
                                           placeholder="Enter Email" value="<?php if(isset($_POST['btnSubmit'])){
                                        echo $_POST['index4'];} ?>">

                                         <?php if (isset($_POST["btnSubmit"])) { ?>

                                            <span class="text-danger"><?php echo $Bank_Account_number_err5; ?></span>

                                                <?php } ?>

                                </div>
                               
                            </div>


                            <div class="form-group">
                                <label for="inputText2" class="col-sm-4 control-label">Sequence</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="index2" id="index2"
                                           placeholder="Enter Sequence" onblur="this.value=this.value.toUpperCase()"  value="<?php if(isset($_POST['btnSubmit'])){
                                        echo $_POST['index2'];} ?>">

                                </div>
                                
                            </div>


                            <div class="form-group">
                                <label for="inputText2" class="col-sm-4 control-label">Remarks </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="index3" id="index3"
                                           placeholder="Enter Remarks" onblur="this.value=this.value.toUpperCase()" value="<?php if(isset($_POST['btnSubmit'])){
                                        echo $_POST['index3'];} ?>">

                                </div>
                               
                            </div>











                        </div>
                    </div>
                </div>

            </div>
            <div>
            </div>

         
            <input type="submit" class="btn btn-primary btn-lg btn-block" name="btnSubmit">


            </form>
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
            $sql = "SELECT *  FROM tbl_schedule1  WHERE flag='ACTIVE' ";
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
        <a href='pastdetail.php'class="btn btn-success btn-xs">SHOW PAST DETAILS</a>
    </div>
</form>

</div>
</div>


</body>
</html>
