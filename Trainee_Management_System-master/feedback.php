<?php include("db.php"); ?>

<?php

if (isset($_POST["btnSubmit"])) {


// Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
	/*$sql = "SELECT * FROM tbl_trainee WHERE NIC='" . $_POST['v_nic'] . "'";*/
    $sql = "SELECT * FROM tbl_trainee WHERE Trainee_ID ='0'";
    $resultSet = $con->query($sql);


    $msg_success = $error =$error1 = $error2 = $error3 =$error4 =   "";
//for error msgs
    $allerror = $T_id_err = $Title_err = $Full_Name_err = $Name_with_Initials_err = $NIC_err = $Age_err = $Gender_err = $DOB_err = $Add_Line1_err = $Add_Line2_err = $Add_Line3_err = $Temp_Add_Line1_err = $Temp_Add_Line2_err = $Temp_Add_Line3_err = $Contact_Number1_err = $Contact_Number2_err = $E_Mail_err = $tblTrainingInstituteID_err = $ProgramName_err = $tblCourseID_err = $Batch_err = $Year_err = $Contact_Person_err = $Contact_number_err = $Relationship_err = $Address_err = $tblBankID_err = $Name_as_Bank_err = $Bank_Account_number_err = $flag_err = $branch_err = "";
//data catchiing
    $T_id = $id = $mark1 = $mark2= $mark3= $mark4= $mark5= $mark6= $mark7= $mark8= $mark9= $mark10= $mark11= $mark12= $mark13 = $done = $job = $ntrain = $Title = $Topic= $project = $P1 = $P2 = $P3 = $div = $Dv3 = $Dv2 = $Dv1 = $SDAY = $EDAY = $Sup = $DIVI = $Name = $Name_with_Initials = $NIC = $Age = $Gender = $DOB = $Add_Line1 = $Add_Line2 = $Add_Line3 = $Temp_Add_Line1 = $Temp_Add_Line2 = $Temp_Add_Line3 = $Contact_Number1 = $Contact_Number2 = $E_Mail = $tblTrainingInstituteID = $ProgramName = $tblCourseID = $Batch = $Year = $Contact_Person = $Contact_number = $Relationship = $Address = $tblBankID = $Name_as_Bank = $Bank_Account_number = $flag = $branch = "";


    if (!empty($_POST["v_id"])) {

        if (!preg_match('/^[0-9\.\,\/\s]+$/', $_POST["v_id"])) {
            $Temp_Add_Line1_err = "Invalid format.";
        } else {
    $id = $_POST["v_id"];
}
}


if (empty($com = $_POST["v_com"])) {
    $Full_Name_err = "This field is required.";
} else if (!preg_match("/^\w+( \w+)*[a-zA-Z\.\s]$/", $_POST["v_com"])) {
    $Full_Name_err = "Invalid format.";
} else {
    $com = $_POST["v_com"];

}

if (empty($done = $_POST["v_done"])) {
    $Full_Name_err = "This field is required.";
} else if (!preg_match("/^\w+( \w+)*[a-zA-Z\.\s]$/", $_POST["v_done"])) {
    $Full_Name_err = "Invalid format.";
} else {
    $done = $_POST["v_done"];

}
if (empty($mark1 = $_POST["v_mark1"])) {
    $Full_Name_err = "This field is required.";
} else if (!preg_match("/^[0-9]+$/", $_POST["v_mark1"])) {
    
} else if (!preg_match("/^[0-9]{2,3}$/", $_POST["v_mark1"])) {
    
} else {
    $mark1 = $_POST["v_mark1"];

}

if (empty($mark2 = $_POST["v_mark2"])) {
    $Full_Name_err = "This field is required.";
} else if (!preg_match("/^[0-9]+$/", $_POST["v_mark2"])) {
    
} else if (!preg_match("/^[0-9]{2,3}$/", $_POST["v_mark2"])) {
    
} else {
    $mark2 = $_POST["v_mark2"];

}


if (empty($mark3 = $_POST["v_mark3"])) {
    $Full_Name_err = "This field is required.";
} else if (!preg_match("/^[0-9]+$/", $_POST["v_mark3"])) {
    
} else if (!preg_match("/^[0-9]{2,3}$/", $_POST["v_mark3"])) {
    
} else {
    $mark3 = $_POST["v_mark3"];

}
if (empty($mark4 = $_POST["v_mark4"])) {
    $Full_Name_err = "This field is required.";
} else if (!preg_match("/^[0-9]+$/", $_POST["v_mark4"])) {
    
} else if (!preg_match("/^[0-9]{2,3}$/", $_POST["v_mark4"])) {
    
} else {
    $mark4 = $_POST["v_mark4"];

}
if (empty($mark5 = $_POST["v_mark5"])) {
    $Full_Name_err = "This field is required.";
} else if (!preg_match("/^[0-9]+$/", $_POST["v_mark5"])) {
    
} else if (!preg_match("/^[0-9]{2,3}$/", $_POST["v_mark5"])) {
    
} else {
    $mark5 = $_POST["v_mark5"];

}
if (empty($mark6 = $_POST["v_mark6"])) {
    $Full_Name_err = "This field is required.";
} else if (!preg_match("/^[0-9]+$/", $_POST["v_mark6"])) {
    
} else if (!preg_match("/^[0-9]{2,3}$/", $_POST["v_mark6"])) {
    
} else {
    $mark6 = $_POST["v_mark6"];

}

if (empty($mark7 = $_POST["v_mark7"])) {
    $Full_Name_err = "This field is required.";
} else if (!preg_match("/^[0-9]+$/", $_POST["v_mark7"])) {
    
} else if (!preg_match("/^[0-9]{2,3}$/", $_POST["v_mark7"])) {
    
} else {
    $mark7 = $_POST["v_mark7"];

}
if (empty($mark8 = $_POST["v_mark8"])) {
    $Full_Name_err = "This field is required.";
} else if (!preg_match("/^[0-9]+$/", $_POST["v_mark8"])) {
    
} else if (!preg_match("/^[0-9]{2,3}$/", $_POST["v_mark8"])) {
    
} else {
    $mark8 = $_POST["v_mark8"];

}
if (empty($mark9 = $_POST["v_mark9"])) {
    $Full_Name_err = "This field is required.";
} else if (!preg_match("/^[0-9]+$/", $_POST["v_mark9"])) {
    
} else if (!preg_match("/^[0-9]{2,3}$/", $_POST["v_mark9"])) {
    
} else {
    $mark9 = $_POST["v_mark9"];

}
if (empty($mark10 = $_POST["v_mark10"])) {
    $Full_Name_err = "This field is required.";
} else if (!preg_match("/^[0-9]+$/", $_POST["v_mark10"])) {
    
} else if (!preg_match("/^[0-9]{2,3}$/", $_POST["v_mark10"])) {
    
} else {
    $mark10 = $_POST["v_mark10"];

}
if (empty($mark11 = $_POST["v_mark11"])) {
    $Full_Name_err = "This field is required.";
} else if (!preg_match("/^[0-9]+$/", $_POST["v_mark11"])) {
    
} else if (!preg_match("/^[0-9]{2,3}$/", $_POST["v_mark11"])) {
    
} else {
    $mark11 = $_POST["v_mark11"];

}
if (empty($mark12 = $_POST["v_mark12"])) {
    $Full_Name_err = "This field is required.";
} else if (!preg_match("/^[0-9]+$/", $_POST["v_mark12"])) {
    
} else if (!preg_match("/^[0-9]{2,3}$/", $_POST["v_mark12"])) {
    
} else {
    $mark12 = $_POST["v_mark12"];

}
if (empty($mark13 = $_POST["v_mark13"])) {
    $Full_Name_err = "This field is required.";
} else if (!preg_match("/^[0-9]+$/", $_POST["v_mark13"])) {
    
} else if (!preg_match("/^[0-9]{2,3}$/", $_POST["v_mark13"])) {
    
} else {
    $mark13 = $_POST["v_mark13"];

}
    //$com = $_POST["v_com"];
   // $done = $_POST["v_done"];
   // $mark1 = $_POST["v_mark1"];
    //$mark2 = $_POST["v_mark2"];
    // $mark3= $_POST["v_mark3"];
    // $mark4 = $_POST["v_mark4"];
    // $mark5 = $_POST["v_mark5"];
    // $mark6 = $_POST["v_mark6"];
    // $mark7 = $_POST["v_mark7"];
    // $mark8 = $_POST["v_mark8"];
    // $mark9 = $_POST["v_mark9"];
    // $mark10 = $_POST["v_mark10"];
    // $mark11 = $_POST["v_mark11"];
    // $mark12 = $_POST["v_mark12"];
    // $mark13 = $_POST["v_mark13"];
    $flag = "PENDING";
  
         


    if (empty($Title_err) && empty($Full_Name_err) && empty($Name_with_Initials_err) && empty($NIC_err) && empty($Age_err) && empty($Gender_err) && empty($DOB_err) && empty($Add_Line1_err) && empty($Add_Line2_err) && empty($Add_Line3_err) && empty($Temp_Add_Line1_err) && empty($Temp_Add_Line2_err) && empty($Temp_Add_Line3_err) && empty($Contact_Number1_err) && empty($Contact_Number2_err) && empty($E_Mail_err) && empty($tblTrainingInstituteID_err) && empty($ProgramName_err) && empty($tblCourseID_err) && empty($Batch_err) && empty($Year_err) && empty($Contact_Person_err) && empty($Contact_number_err) && empty($Relationship_err) && empty($Address_err) && empty($tblBankID_err) && empty($Name_as_Bank_err) && empty($Bank_Account_number_err) && empty($flag_err) && empty($Branch_err) && empty($error4) && empty($error) && empty($error) && empty($error)) {

        if ($resultSet->num_rows >= 1) {
            $error1 = "Trainee already exist";

        } else {
            //     if (empty($T_id_err) && empty($Full_Name_err) && empty($Name_with_Initials_err) && empty($NIC_err) && empty($Age_err) && empty($Gender_err) && empty($DOB_err) && empty($Add_Line1_err) && empty($Add_Line2_err) && empty($Add_Line3_err) && empty($Temp_Add_Line1_err) && empty($Temp_Add_Line2_err) && empty($Temp_Add_Line3_err) && empty($Contact_Number1_err) && empty($Contact_Number2_err) && empty($E_Mail_err) && empty($tblTrainingInstituteID_err) && empty($tblCourseID_err) && empty($Batch_err) && empty($Year_err) && empty($Contact_Person_err) && empty($Contact_number_err) && empty($Relationship_err) && empty($Address_err) && empty($tblBankID_err) && empty($Name_as_Bank_err) && empty($Bank_Account_number_err)) {


                
$sql1 = "INSERT INTO feed1 ( Trainee_ID, Done, mark1, mark2, mark3, mark4, mark5, mark6, mark7, mark8, mark9, mark10, mark11, mark12, mark13, com)
VALUES( '$id', '$done','$mark1','$mark2','$mark3','$mark4','$mark5','$mark6','$mark7','$mark8','$mark9','$mark10','$mark11','$mark12','$mark13','$com')";

            if ($con->query($sql1) === TRUE) {

               $error2 = "New Trainee added successfully";

               
            } else {
                echo "Error: " . $sql1 . "<br>" . $con->error;
            }

            $con->close();

        }

    }


}

?>
<!DOCTYPE html>
<head>




    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <title>Training Programms</title>

    <?php include("header.php") ?>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50" class="hero-image">

<style type="text/css">
  .column {
  float: left;
  width: 50%;
  padding: .5%;

  

}
.abc {
  left:30%;
  width: 40%;
  position :absolute;
  top:470%;
}
.abc1 {
  left:30%;
  width: 40%;
  position :absolute;
  
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}


td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
    <br><br><br>
    <div>
        <center>
            <h2>EVEALUTION OF TRAINING EFFECTIVENESS</h2></center>
            <br>

            
            <div class="row">
  <div class="column">
            
            <form class="form-horizontal" method="post" action="#" enctype="multipart/form-data">
            <div class="panel-body" method="post">
                                    <div class="form-group">
                                        <label for="inputText1" >TRAINING PROGRAM ID </label>
                                        <div class="input-group">
                                            <div class="input-group-addon">MOB/TR/</div>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="v_id" id="v_id"
                                            placeholder="Trainee ID" autofocus="autofocus" value="<?php if (isset($_POST['btnSubmit'])) {
                                        echo $_POST['v_id'];    } ?>" >
</div>
</div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                    <span class="text-danger"><?php echo $Full_Name_err; ?></span>

                                <?php } ?>


                                            

                                        </div>
                                        </div>
                                        </div>
                                        <div class="column">
   
 
                                    
    <div class="panel-body" method="post">
                                    <div class="form-group">
                                        <label for="inputText1" >TRAINING PROGRAM DONE BY </label>
                                        <div class="input-group">
                                            
                                            <input type="text" class="form-control" name="v_done" id="v_done"
                                            
                                            placeholder="Done" autofocus="autofocus" value="<?php if (isset($_POST['btnSubmit'])) {
                                        echo $_POST['v_done'];    } ?>">

</div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                    <span class="text-danger"><?php echo $Full_Name_err; ?></span>

                                <?php } ?>


                                            

                                        </div>    </div>
                                        </div>
   
                                        </div>
            <center>
            <h4>This questionnaire is given to you with the purpose of giving your training engineer a chance for assessing the effectiveness of training and to use for the improvement of the quality of the training .</h4>
            </center>
            <br>
            <center>
            <p>Rank each item using following scale:- 5 = strongly agree 4 = agree  3= don’t know (Neutral)    2 = disagree   1= strong disagree                    
                                                                                                         
</p>
</center>
    </div>
                                        </div>
   
    <div class="container col-md-10 col-md-offset-1" method="post">
        <table  >
            <tr>
                <th>Item No</th>
                <th>Item Description</th>
                <th>Mark</th>
                
                
            </tr>

            <tbody>
<!-- start-->
             <tr>
                <td>1. </td>
                    <td>The training program possesses good knowledge in the subject </td>
                    <td>  <div class="panel-body" method="post">
                                    <div class="form-group">
                                        
                                        <div class="input-group">
                                            
                                    <select class="form-control" name="v_mark1" id="v_mark1" autofocus="autofocus">

                                            <option value="--SELECT--">--SELECT--</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>

                                            </select>



                                        <script type="text/javascript">
                                        document.getElementById('v_mark1').value = "<?php echo $_POST['v_mark1'];?>";
                                        </script>

                                         </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                    <span class="text-danger"><?php echo $Full_Name_err; ?></span>

                                <?php } ?> </div> </td></td></tr>
                              <!-- end  -->
                 
                 <!-- start-->
             <tr>
                <td>2. </td>
                    <td>The trainining program is well prepared </td>
                    <td>  <div class="panel-body" method="post">
                                    <div class="form-group">
                                        
                                        <div class="input-group">
                                            
                                        <select class="form-control" name="v_mark2" id="v_mark2" autofocus="autofocus">

                                            <option value="--SELECT--">--SELECT--</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>

                                            </select>



                                        <script type="text/javascript">
                                        document.getElementById('v_mark2').value = "<?php echo $_POST['v_mark2'];?>";
                                        </script>
                                        </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                    <span class="text-danger"><?php echo $Full_Name_err; ?></span>

                                <?php } ?> </div> </td></td></tr>
                              <!-- end  -->
                              <!-- start-->
             <tr>
                <td>3. </td>
                    <td>Training program are well structured and organized </td>
                    <td>  <div class="panel-body" method="post">
                                    <div class="form-group">
                                        
                                        <div class="input-group">
                                            
                                        <select class="form-control" name="v_mark3" id="v_mark3" autofocus="autofocus">

                                                            <option value="--SELECT--">--SELECT--</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>

                                                            </select>



                                                            <script type="text/javascript">
                                                            document.getElementById('v_mark3').value = "<?php echo $_POST['v_mark3'];?>";
                                                            </script>

                                         </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                    <span class="text-danger"><?php echo $Full_Name_err; ?></span>

                                <?php } ?> </div> </td></td></tr>
                              <!-- end  -->
                              <!-- start-->
             <tr>
                <td>4. </td>
                    <td>Visual aids (Slides and Documents) were used effectively </td>
                    <td>  <div class="panel-body" method="post">
                                    <div class="form-group">
                                        
                                        <div class="input-group">
                                            
                                        <select class="form-control" name="v_mark4" id="v_mark4" autofocus="autofocus">

                                            <option value="--SELECT--">--SELECT--</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>

                                            </select>



                                            <script type="text/javascript">
                                            document.getElementById('v_mark4').value = "<?php echo $_POST['v_mark4'];?>";
                                            </script>

                                         </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                    <span class="text-danger"><?php echo $Full_Name_err; ?></span>

                                <?php } ?> </div> </td></td></tr>
                              <!-- end  -->
                              <!-- start-->
             <tr>
                <td>5. </td>
                    <td>The trainer relates the subject matter to practical situations </td>
                    <td>  <div class="panel-body" method="post">
                                    <div class="form-group">
                                        
                                        <div class="input-group">
                                            
                                        <select class="form-control" name="v_mark5" id="v_mark5" autofocus="autofocus">

<option value="--SELECT--">--SELECT--</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>

</select>



<script type="text/javascript">
document.getElementById('v_mark5').value = "<?php echo $_POST['v_mark5'];?>";
</script>

                                         </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                    <span class="text-danger"><?php echo $Full_Name_err; ?></span>

                                <?php } ?> </div> </td></td></tr>
                              <!-- end  -->
                              <!-- start-->
             <tr>
                <td>6. </td>
                    <td>Readings materials provided are relevant and useful </td>
                    <td>  <div class="panel-body" method="post">
                                    <div class="form-group">
                                        
                                        <div class="input-group">
                                            
                                        <select class="form-control" name="v_mark6" id="v_mark6" autofocus="autofocus">

<option value="--SELECT--">--SELECT--</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>

</select>



<script type="text/javascript">
document.getElementById('v_mark6').value = "<?php echo $_POST['v_mark6'];?>";
</script>

                                         </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                    <span class="text-danger"><?php echo $Full_Name_err; ?></span>

                                <?php } ?> </div> </td></td></tr>
                              <!-- end  -->
                              <!-- start-->
             <tr>
                <td>7. </td>
                    <td>Training program encourages additional readings </td>
                    <td>  <div class="panel-body" method="post">
                                    <div class="form-group">
                                        
                                        <div class="input-group">
                                            
                                        <select class="form-control" name="v_mark7" id="v_mark7" autofocus="autofocus">

<option value="--SELECT--">--SELECT--</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>

</select>



<script type="text/javascript">
document.getElementById('v_mark7').value = "<?php echo $_POST['v_mark7'];?>";
</script>

                                         </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                    <span class="text-danger"><?php echo $Full_Name_err; ?></span>

                                <?php } ?> </div> </td></td></tr>
                              <!-- end  -->
                              <!-- start-->
             <tr>
                <td>8. </td>
                    <td>Training program maintains friendly relationship </td>
                    <td>  <div class="panel-body" method="post">
                                    <div class="form-group">
                                        
                                        <div class="input-group">
                                            
                                        <select class="form-control" name="v_mark8" id="v_mark8" autofocus="autofocus">

<option value="--SELECT--">--SELECT--</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>

</select>



<script type="text/javascript">
document.getElementById('v_mark8').value = "<?php echo $_POST['v_mark8'];?>";
</script>

                                         </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                    <span class="text-danger"><?php echo $Full_Name_err; ?></span>

                                <?php } ?> </div> </td></td></tr>
                              <!-- end  -->
                              <!-- start-->
             <tr>
                <td>9. </td>
                    <td>The trainer tries to get our involvement to the trainer and always encourages our participation </td>
                    <td>  <div class="panel-body" method="post">
                                    <div class="form-group">
                                        
                                        <div class="input-group">
                                            
                                        <select class="form-control" name="v_mark9" id="v_mark9" autofocus="autofocus">

<option value="--SELECT--">--SELECT--</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>

</select>



<script type="text/javascript">
document.getElementById('v_mark9').value = "<?php echo $_POST['v_mark9'];?>";
</script>

                                         </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                    <span class="text-danger"><?php echo $Full_Name_err; ?></span>

                                <?php } ?> </div> </td></td></tr>
                              <!-- end  -->
                              <!-- start-->
             <tr>
                <td>10. </td>
                    <td>The training Supervisors courages questions and comments </td>
                    <td>  <div class="panel-body" method="post">
                                    <div class="form-group">
                                        
                                        <div class="input-group">
                                            
                                        <select class="form-control" name="v_mark10" id="v_mark10" autofocus="autofocus">

<option value="--SELECT--">--SELECT--</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>

</select>



<script type="text/javascript">
document.getElementById('v_mark10').value = "<?php echo $_POST['v_mark10'];?>";
</script>

                                         </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                    <span class="text-danger"><?php echo $Full_Name_err; ?></span>

                                <?php } ?> </div> </td></td></tr>
                              <!-- end  -->
                              <!-- start-->
             <tr>
                <td>11. </td>
                    <td>Training program held my attention most of time </td>
                    <td>  <div class="panel-body" method="post">
                                    <div class="form-group">
                                        
                                        <div class="input-group">
                                            
                                        <select class="form-control" name="v_mark11" id="v_mark11" autofocus="autofocus">

<option value="--SELECT--">--SELECT--</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>

</select>



<script type="text/javascript">
document.getElementById('v_mark11').value = "<?php echo $_POST['v_mark11'];?>";
</script>

                                         </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                    <span class="text-danger"><?php echo $Full_Name_err; ?></span>

                                <?php } ?> </div> </td></td></tr>
                              <!-- end  -->
                              <!-- start-->
             <tr>
                <td>12. </td>
                    <td>Training program stimulated my interest in subject area </td>
                    <td>  <div class="panel-body" method="post">
                                    <div class="form-group">
                                        
                                        <div class="input-group">
                                            
                                        <select class="form-control" name="v_mark12" id="v_mark12" autofocus="autofocus">

<option value="--SELECT--">--SELECT--</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>

</select>



<script type="text/javascript">
document.getElementById('v_mark12').value = "<?php echo $_POST['v_mark12'];?>";
</script>

                                         </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                    <span class="text-danger"><?php echo $Full_Name_err; ?></span>

                                <?php } ?> </div> </td></td></tr>
                              <!-- end  -->
                                              <!-- start-->
             <tr>
                <td>13. </td>
                    <td>Overall performance of the training program is satisfactory </td>
                    <td>  <div class="panel-body" method="post">
                                    <div class="form-group">
                                        
                                        <div class="input-group">
                                            
                                        <select class="form-control" name="v_mark13" id="v_mark13" autofocus="autofocus">

<option value="--SELECT--">--SELECT--</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>

</select>



<script type="text/javascript">
document.getElementById('v_mark13').value = "<?php echo $_POST['v_mark13'];?>";
</script>

                                         </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                    <span class="text-danger"><?php echo $Full_Name_err; ?></span>

                                <?php } ?> </div> </td></td></tr>
                              <!-- end  -->
                                             
            



     </tbody>
 </table>

 <br>
 <br>
 <div class="form-group">
 <div class="abc1">
                                <label for="inputText1" class="col-sm-4 control-label">Comment *</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="v_com" id="v_com"
                                           placeholder="Comment Here...." onblur="this.value=this.value.toUpperCase()" value="<?php if (isset($_POST['btnSubmit'])) {
                                        echo $_POST['v_com'];
                                    } ?>">
                                </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                    <span class="text-danger"><?php echo $Full_Name_err; ?></span>

                                <?php } ?>
                            </div>

 </div>
 <div>
                    </div>
                </div>

            </div>
            <div>
            </div>
 
</div>


<div class="abc">
 <input type="submit" class="btn btn-warning btn-lg btn-block"  name="btnSubmit" value="SUBMIT" >
                                </div>
 <br><br>
            <br>
           
</form>

</body>
</html>