<?php include("db.php"); ?>

<?php

if (isset($_POST["btnSubmit"])) {


// Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
	/*$sql = "SELECT * FROM tbl_trainee WHERE NIC='" . $_POST['v_nic'] . "'";*/
    $sql = "SELECT * FROM tbl_trainee WHERE NIC='0'";
    $resultSet = $con->query($sql);

// prepare and bind
    /*    $stmt = $con->prepare(" INSERT INTO tbl_trainee(Trainee_ID, Title, Full_Name, Name_with_Initials, NIC, Age, Gender, Date_of_Birth,Add_Line1, Add_Line2, Add_Line3,
      Temp_Add_Line1, Temp_Add_Line2, Temp_Add_Line3, Contact_Number1, Contact_Number2, E_Mail, tblTrainingInstituteID,tblCourseID, Batch, tYear, Contact_Person, Contact_number,
      Relationship, Address, tblBankID, Name_as_Bank, Bank_Account_number,flag)
     VALUES ( ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");

        $stmt->bind_param("sssssissssssssissiisissssiss", $T_id, $Title, $Full_Name, $Name_with_Initials, $NIC, $Age, $Gender, $DOB, $Add_Line1, $Add_Line2, $Add_Line3,
            $Temp_Add_Line1, $Temp_Add_Line2, $Temp_Add_Line3, $Contact_Number1, $Contact_Number2, $E_Mail, $tblTrainingInstituteID, $tblCourseID
            , $Batch, $Year, $Contact_Person, $Contact_number, $Relationship, $Address, $tblBankID, $Name_as_Bank, $Bank_Account_number, $flag);*/

    // set parameters and execute

    $msg_success = $error =$error1 = $error2 = $error3 =$error4 =   "";
//for error msgs
    $allerror = $std_err =  $superr = $diverr = $T_id_err = $Title_err = $Full_Name_err = $Name_with_Initials_err = $NIC_err = $Age_err = $Gender_err = $DOB_err = $Add_Line1_err = $Add_Line2_err = $Add_Line3_err = $Temp_Add_Line1_err = $Temp_Add_Line2_err = $Temp_Add_Line3_err = $Contact_Number1_err = $Contact_Number2_err = $E_Mail_err = $tblTrainingInstituteID_err = $ProgramName_err = $tblCourseID_err = $Batch_err = $Year_err = $Contact_Person_err = $Contact_number_err = $Relationship_err = $Address_err = $tblBankID_err = $Name_as_Bank_err = $Bank_Account_number_err = $flag_err = $branch_err = "";
//data catchiing
    $T_id = $id = $Div1s = $Div1e = $Div2s = $Div2e = $Div3s = $Div3e = $Div4s = $Div4e = $Div5s = $Div5e = $Div6s = $Div6e = $job = $ntrain = $Title = $Topic= $project = $P1 = $P2 = $P3 = $div = $Dv3 = $Dv2 = $Dv1 = $Dv4 = $Dv5 = $Dv6 = $SDAY = $EDAY = $Sup = $DIVI = $Name = $Name_with_Initials = $NIC = $Age = $Gender = $DOB = $Add_Line1 = $Add_Line2 = $Add_Line3 = $Temp_Add_Line1 = $Temp_Add_Line2 = $Temp_Add_Line3 = $Contact_Number1 = $Contact_Number2 = $E_Mail = $tblTrainingInstituteID = $ProgramName = $tblCourseID = $Batch = $Year = $Contact_Person = $Contact_number = $Relationship = $Address = $tblBankID = $Name_as_Bank = $Bank_Account_number = $flag = $branch ="";

  
        

        if (empty($_POST["v_id"])) {
            $Bank_Account_number_err = "ID number is required.";
        // } else if (!preg_match('/^[A-z0-9\/\-\s]+$/', $_POST["v_id"])) {
        //     $Bank_Account_number_err = "Invalid ID number.";
        } else {
            $id = $_POST["v_id"];
    
        }
    

  
        
        if (empty($_POST["v_tname"])) {
            $Full_Name_err = "Name is required.";
        // } else if (!preg_match('/^[A-z0-9\/\-\s]+$/', $_POST["v_id"])) {
        //     $Bank_Account_number_err = "Invalid ID number.";
        } else {
            $Name = $_POST["v_tname"];
    
        }

  
       

   

    if (empty($_POST["v_NIC"])) {
        $Title_err = "NIC number is required.";
    } else if (!preg_match("/^[0-9]{9}[x|X|v|V]||[0-9]{12}$/", $_POST["v_NIC"])) {
        $Title_err = "Please Enter valid NIC.";
    } else {
        $NIC = $_POST["v_NIC"];

    }

    if (empty($_POST["v_Sday"])) {
        $std_err = "Start is required.";
    } else {
        $SDAY = $_POST["v_Sday"];
    }

    if (empty($_POST["v_Eday"])) {
        $DOB_err = "End is required.";
    } else {
        $EDAY = $_POST["v_Eday"];
    }

    
     $Dv1 = $_POST["v_Div1"];
     $Div1s = $_POST["v_Div1s"];
     $Div1e = $_POST["v_Div1e"];

     $Div2s = $_POST["v_Div2s"];
     $Div2e = $_POST["v_Div2e"];

     $Div3s = $_POST["v_Div3s"];
     $Div3e = $_POST["v_Div3e"];

     $Div4s = $_POST["v_Div4s"];
     $Div4e = $_POST["v_Div4e"];

     $Div5s = $_POST["v_Div5s"];
     $Div5e = $_POST["v_Div5e"];

     $Div6s = $_POST["v_Div6s"];
     $Div6e = $_POST["v_Div6e"];


            $Dv2 = $_POST["v_Div2"];


  
            $Dv3 = $_POST["v_Div3"];

       

  
            $Dv4 = $_POST["v_Div4"];

        

   
            $Dv5 = $_POST["v_Div5"];

 
            $Dv6 = $_POST["v_Div6"];

     

    $job = $_POST["v_job"];
   

  
            $ntrain = $_POST["v_train"];

     
            $Topic = $_POST["v_topic"];

            $project = $_POST["v_project"];

     

            $P1 = $_POST["v_p1"];

   
            $P2 = $_POST["v_p2"];

     

            $P3 = $_POST["v_p3"];


      

    

        if (empty($_POST["v_sup"])) {
            $superr = "supervisor is required.";
        // } else if (!preg_match('/^[A-z0-9\/\-\s]+$/', $_POST["v_id"])) {
        //     $Bank_Account_number_err = "Invalid ID number.";
        } else {
            $Sup = $_POST["v_sup"];
    
        }
        if (empty($_POST["v_divi"])) {
            $diverr = "Division is required.";
        // } else if (!preg_match('/^[A-z0-9\/\-\s]+$/', $_POST["v_id"])) {
        //     $Bank_Account_number_err = "Invalid ID number.";
        } else {
           
        $DIVI = $_POST["v_divi"];
    
        }
    

    

 



   
    $flag = "PENDING";
  
         


    if (empty($Title_err) && empty($Full_Name_err) && empty($superr) && empty($diverr) && empty($std_err) && empty($Name_with_Initials_err) && empty($NIC_err) && empty($Age_err) && empty($Gender_err) && empty($DOB_err) && empty($Add_Line1_err) && empty($Add_Line2_err) && empty($Add_Line3_err) && empty($Temp_Add_Line1_err) && empty($Temp_Add_Line2_err) && empty($Temp_Add_Line3_err) && empty($Contact_Number1_err) && empty($Contact_Number2_err) && empty($E_Mail_err) && empty($tblTrainingInstituteID_err) && empty($ProgramName_err) && empty($tblCourseID_err) && empty($Batch_err) && empty($Year_err) && empty($Contact_Person_err) && empty($Contact_number_err) && empty($Relationship_err) && empty($Address_err) && empty($tblBankID_err) && empty($Name_as_Bank_err) && empty($Bank_Account_number_err) && empty($flag_err) && empty($Branch_err) && empty($error4) && empty($error) && empty($error) && empty($error)) {

        if ($resultSet->num_rows >= 1) {
            $error1 = "Record already exist";

        } else {
            //     if (empty($T_id_err) && empty($Full_Name_err) && empty($Name_with_Initials_err) && empty($NIC_err) && empty($Age_err) && empty($Gender_err) && empty($DOB_err) && empty($Add_Line1_err) && empty($Add_Line2_err) && empty($Add_Line3_err) && empty($Temp_Add_Line1_err) && empty($Temp_Add_Line2_err) && empty($Temp_Add_Line3_err) && empty($Contact_Number1_err) && empty($Contact_Number2_err) && empty($E_Mail_err) && empty($tblTrainingInstituteID_err) && empty($tblCourseID_err) && empty($Batch_err) && empty($Year_err) && empty($Contact_Person_err) && empty($Contact_number_err) && empty($Relationship_err) && empty($Address_err) && empty($tblBankID_err) && empty($Name_as_Bank_err) && empty($Bank_Account_number_err)) {



$sql1 = "INSERT INTO `tbl_apply`(`Trainee_ID`, `tname`, `NIC`, `Sday`, `Eday`, `Div1`, `Div2`, `Div3`, `Div4`, `Div5`, `Div6`, `job`, `Notrain`, `Topic`, `Project`, `P1`, `P2`, `P3`, `Supervisor`, `Division`, `Div1s`, `Div1e`, `Div2s`, `Div2e`, `Div3s`, `Div3e`, `Div4s`, `Div4e`, `Div5s`, `Div5e`, `Div6s`, `Div6e`) VALUES ('$id','$Name','$NIC','$SDAY','$EDAY','$Dv1','$Dv2','$Dv3','$Dv4','$Dv5','$Dv6','$job','$ntrain','$Topic','$project', '$P1', '$P2', '$P3', '$Sup', '$DIVI', '$Div1s', '$Div1e', '$Div2s', '$Div2e', '$Div3s', '$Div3e', '$Div4s', '$Div4e', '$Div5s', '$Div5e', '$Div6s', '$Div6e')";
//INSERT INTO `tbl_apply`(`Trainee_ID`, `tname`, `NIC`, `Sday`, `Eday`, `Div1`, `Div2`, `Div3`, `Div4`, `Div5`, `Div6`, `job`, `Notrain`, `Topic`, `Project`, `P1`, `P2`, `P3`, `Supervisor`, `Division`, `Div1s`, `Div1e`, `Div2s`, `Div2e`, `Div3s`, `Div3e`, `Div4s`, `Div4e`, `Div5s`, `Div5e`, `Div6s`, `Div6e`) VALUES ('$id','$Name','$NIC','$SDAY','$EDAY','$Dv1','$Dv2','$Dv3','$Dv4','$Dv5','$Dv6','$job','$ntrain','$Topic','$project', '$P1', '$P2', '$P3', '$Sup', '$DIVI', '$Div1s', '$Div1e', '$Div2s', '$Div2e', '$Div3s', '$Div3e', '$Div4s', '$Div4e', '$Div5s', '$Div5e', '$Div6s', '$Div6e')
echo $sql1;
            if ($con->query($sql1) === TRUE) {

               $error2 = "New Record added successfully";

               
            } else {
             //   echo "Error: " . $sql1 . "<br>" . $con->error;
			 echo 'fuck';
            }

            $con->close();


        }

    }


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Trainee Certificate Application</title>

    <?php include_once("header.php") ?>

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" class="hero-image">
<br><br><br>
<div>
    <center>
        <h2>Trainee Certificate Application</h2>
    </center>
</div>
<?php if (isset($_POST["btnSubmit"])) { ?>
    <?php if (!empty($error)) { ?>
        <div class="col-sm-8 col-sm-offset-2 text-center alert alert-success" role="alert"> <?php echo $error; ?> </div>
    <?php } elseif (!empty($error1)) { ?>
        <div class="col-sm-8 col-sm-offset-2 text-center alert alert-danger" role="alert"> <?php echo $error1; ?> </div>
    <?php } elseif (!empty($error2)) { ?>
        <div class="col-sm-8 col-sm-offset-2 text-center alert alert-success"
             role="alert"> <?php echo $error2; ?> </div>
    <?php }
} ?>

<center>
    <form class="form-horizontal" method="post" action="#" enctype="multipart/form-data">
        <!-- personal details -->

        <div class="container col-md-6 col-md-offset-3 ">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title ">Personal Details
                        </h4>
                    </div>
                    <div>
                        <div class="panel-body">
                        <div class="form-group">
                                <label for="inputText1" class="col-sm-4 control-label">ID *</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="v_id" id="v_id"
                                           placeholder="Trainee ID" onblur="this.value=this.value.toUpperCase()" value="<?php if (isset($_POST['btnSubmit'])) {
                                        echo $_POST['v_id'];
                                    } ?>">
                                </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                    <span class="text-danger"><?php echo $Bank_Account_number_err; ?></span>

                                <?php } ?>
                            </div>
                       

                            <div class="form-group">
                                <label for="inputText1" class="col-sm-4 control-label">Full Name *</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="v_tname" id="v_tname"
                                           placeholder="Full Name" onblur="this.value=this.value.toUpperCase()" value="<?php if (isset($_POST['btnSubmit'])) {
                                        echo $_POST['v_tname'];
                                    } ?>">
                                </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                    <span class="text-danger"><?php echo $Full_Name_err; ?></span>

                                <?php } ?>
                            </div>

                            <div class="form-group">
                                <label for="inputText1" class="col-sm-4 control-label">NIC Number *</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="v_NIC" id="v_NIC"
                                           placeholder="NIC Number" onblur="this.value=this.value.toUpperCase()" value="<?php if (isset($_POST['btnSubmit'])) {
                                        echo $_POST['v_NIC'];
                                    } ?>">
                                </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                    <span class="text-danger"><?php echo $Title_err; ?></span>

                                <?php } ?>
                            </div>
                            <div class="form-group">
                                <label for="inputText2" class="col-sm-4 control-label">Date of Start *</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" name="v_Sday" id="v_Sday"
                                           placeholder="Date of Start" value="<?php if (isset($_POST['btnSubmit'])) {
                                        echo $_POST['v_Sday'];
                                    } ?>">
                                </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                    <span class="text-danger"><?php echo $std_err; ?></span>

                                <?php } ?>
                            </div>

                            <div class="form-group">
                                <label for="inputText2" class="col-sm-4 control-label">Date Of End *</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" name="v_Eday" id="v_Eday"
                                           placeholder="Date Of End" value="<?php if (isset($_POST['btnSubmit'])) {
                                        echo $_POST['v_Eday'];
                                    } ?>">
                                </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                    <span class="text-danger"><?php echo $DOB_err; ?></span>

                                <?php } ?>
                            </div>

                            <div class="form-group">
                                <label for="inputText2" class="col-sm-4 control-label">Training Division 1 </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="v_Div1" id="v_Div1"
                                           placeholder="Training Division 1" onblur="this.value=this.value.toUpperCase()"
                                           value="<?php if (isset($_POST['btnSubmit'])) {
                                               echo $_POST['v_Div1'];
                                           } ?>">
                                </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                    

                                <?php } ?>
                            </div>
                            <div class="form-group">
                                <label for="inputText2" class="col-sm-4 control-label">Duration(to-from)</label>
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" name="v_Div1s" id="v_Div1s"
                                           placeholder=" Start" value="<?php if (isset($_POST['btnSubmit'])) {
                                        echo $_POST['v_Div1s'];
                                    } ?>">
                                </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>


                                <?php } ?>
                                

                                <!-- start -->
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" name="v_Div1e" id="v_Div1e"
                                           placeholder=" Start" value="<?php if (isset($_POST['btnSubmit'])) {
                                        echo $_POST['v_Div1e'];
                                    } ?>">
                                </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                    

                                <?php } ?>
                                <!-- end -->
                            </div>
                   

                            <div class="form-group">
                                <label for="inputText2" class="col-sm-4 control-label">Training Division 2 </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="v_Div2" id="v_Div2"
                                           placeholder="Training Division 2" onblur="this.value=this.value.toUpperCase()"
                                           value="<?php if (isset($_POST['btnSubmit'])) {
                                               echo $_POST['v_Div2'];
                                           } ?>">
                                </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                    

                                <?php } ?>
                            </div>

                            <div class="form-group">
                                <label for="inputText2" class="col-sm-4 control-label">Duration(to-from)</label>
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" name="v_Div2s" id="v_Div2s"
                                           placeholder=" Start" value="<?php if (isset($_POST['btnSubmit'])) {
                                        echo $_POST['v_Div2s'];
                                    } ?>">
                                </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                 

                                <?php } ?>

                                <!-- start -->
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" name="v_Div2e" id="v_Div2e"
                                           placeholder=" Start" value="<?php if (isset($_POST['btnSubmit'])) {
                                        echo $_POST['v_Div2e'];
                                    } ?>">
                                </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                    

                                <?php } ?>
                                <!-- end -->
                            </div>
                   

                            <div class="form-group">
                                <label for="inputText2" class="col-sm-4 control-label">Training Division 3 </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="v_Div3" id="v_Div3"
                                           placeholder="Training Division 3" onblur="this.value=this.value.toUpperCase()"
                                           value="<?php if (isset($_POST['btnSubmit'])) {
                                               echo $_POST['v_Div3'];
                                           } ?>">
                                </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                   

                                <?php } ?></div>
                                <div class="form-group">
                                <label for="inputText2" class="col-sm-4 control-label">Duration(to-from)</label>
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" name="v_Div3s" id="v_Div3s"
                                           placeholder=" Start" value="<?php if (isset($_POST['btnSubmit'])) {
                                        echo $_POST['v_Div3s'];
                                    } ?>">
                                </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                   

                                <?php } ?>

                                <!-- start -->
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" name="v_Div3e" id="v_Div3e"
                                           placeholder=" Start" value="<?php if (isset($_POST['btnSubmit'])) {
                                        echo $_POST['v_Div3e'];
                                    } ?>">
                                </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                    

                                <?php } ?>
                                <!-- end -->
                            
                            </div>
                            <div class="form-group">
                                <label for="inputText2" class="col-sm-4 control-label">Training Division 4 </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="v_Div4" id="v_Div4"
                                           placeholder="Training Division 4" onblur="this.value=this.value.toUpperCase()"
                                           value="<?php if (isset($_POST['btnSubmit'])) {
                                               echo $_POST['v_Div4'];
                                           } ?>">
                                </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                    

                                <?php } ?>
                                </div>
                                <div class="form-group">
                                <label for="inputText2" class="col-sm-4 control-label">Duration(to-from)</label>
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" name="v_Div4s" id="v_Div4s"
                                           placeholder=" Start" value="<?php if (isset($_POST['btnSubmit'])) {
                                        echo $_POST['v_Div4s'];
                                    } ?>">
                                </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                      

                                <?php } ?>

                                <!-- start -->
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" name="v_Div4e" id="v_Div4e"
                                           placeholder=" Start" value="<?php if (isset($_POST['btnSubmit'])) {
                                        echo $_POST['v_Div4e'];
                                    } ?>">
                                </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                   

                                <?php } ?>
                                <!-- end -->
                            
                            </div>  
                            <div class="form-group">
                                <label for="inputText2" class="col-sm-4 control-label">Training Division 5 </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="v_Div5" id="v_Div5"
                                           placeholder="Training Division 5" onblur="this.value=this.value.toUpperCase()"
                                           value="<?php if (isset($_POST['btnSubmit'])) {
                                               echo $_POST['v_Div5'];
                                           } ?>">
                                </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                    

                                <?php } ?>
                            </div>  
                            
                            <div class="form-group">
                                <label for="inputText2" class="col-sm-4 control-label">Duration(to-from)</label>
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" name="v_Div5s" id="v_Div5s"
                                           placeholder=" Start" value="<?php if (isset($_POST['btnSubmit'])) {
                                        echo $_POST['v_Div5s'];
                                    } ?>">
                                </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                               

                                <?php } ?>

                                <!-- start -->
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" name="v_Div5e" id="v_Div5e"
                                           placeholder=" Start" value="<?php if (isset($_POST['btnSubmit'])) {
                                        echo $_POST['v_Div5e'];
                                    } ?>">
                                </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                 

                                <?php } ?>
                                <!-- end -->
                            </div><div class="form-group">
                                <label for="inputText2" class="col-sm-4 control-label">Training Division 6 </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="v_Div6" id="v_Div6"
                                           placeholder="Training Division 6" onblur="this.value=this.value.toUpperCase()"
                                           value="<?php if (isset($_POST['btnSubmit'])) {
                                               echo $_POST['v_Div6'];
                                           } ?>">
                                </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>


                                <?php } ?>
                            </div><div class="form-group">
                                <label for="inputText2" class="col-sm-4 control-label">Duration(to-from)</label>
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" name="v_Div6s" id="v_Div6s"
                                           placeholder=" Start" value="<?php if (isset($_POST['btnSubmit'])) {
                                        echo $_POST['v_Div6s'];
                                    } ?>">
                                </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                   

                                <?php } ?>

                                <!-- start -->
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" name="v_Div6e" id="v_Div6e"
                                           placeholder=" Start" value="<?php if (isset($_POST['btnSubmit'])) {
                                        echo $_POST['v_Div6e'];
                                    } ?>">
                                </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                   

                                <?php } ?>
                                <!-- end -->
                            </div>

                            <div class="form-group">
                                <label for="inputText2" class="col-sm-4 control-label">Job Type * </label>
                                <div class="col-sm-3">
                                    <label>Genaral </label><input type="radio" name="v_job" value="Genaral" checked="checked">
                                    
                                    <label>On Job Period </label> <input type="radio" name="v_job" value="On Job Period"<?php if(isset($_POST['btnSubmit']) && $_POST['v_job'] == 'On Job Period')  echo ' checked="checked"';?>>




                                </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                   

                                <?php } ?>
                            </div>

                            <div class="form-group">
                                <label for="inputText2" class="col-sm-4 control-label">No Of Training Programs Attended </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="v_train" id="v_train"
                                           placeholder="Ex: 3" onblur="this.value=this.value.toUpperCase()"
                                           value="<?php if (isset($_POST['btnSubmit'])) {
                                               echo $_POST['v_train'];
                                           } ?>">
                                </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                   

                                <?php } ?>
                            </div>

                            <div class="form-group">
                                <label for="inputText2" class="col-sm-4 control-label">Individual Topic Covered </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="v_topic" id="v_topic"
                                           placeholder="Ex:(Topic Name)" onblur="this.value=this.value.toUpperCase()"
                                           value="<?php if (isset($_POST['btnSubmit'])) {
                                               echo $_POST['v_topic'];
                                           } ?>">
                                </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                    <span class="text-danger"><?php echo $Temp_Add_Line1_err; ?></span>

                                <?php } ?>
                            </div>

                            <div class="form-group">
                                <label for="inputText2" class="col-sm-4 control-label">No Of Project Completed </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="v_project" id="v_project"
                                           placeholder="Ex: 3" onblur="this.value=this.value.toUpperCase()"
                                           value="<?php if (isset($_POST['btnSubmit'])) {
                                               echo $_POST['v_project'];
                                           } ?>">
                                </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                    

                                <?php } ?>
                            </div>

                            <div class="form-group">
                                <label for="inputText2" class="col-sm-4 control-label">Project Name1</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="v_p1" id="v_p1"
                                           placeholder="Project Name1" onblur="this.value=this.value.toUpperCase()"
                                           value="<?php if (isset($_POST['btnSubmit'])) {
                                               echo $_POST['v_p1'];
                                           } ?>">
                                </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                   

                                <?php } ?>
                            </div>

                            <div class="form-group">
                                <label for="inputText2" class="col-sm-4 control-label">Project Name2 </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="v_p2" id="v_p2"
                                           placeholder="Project Name2" onblur="this.value=this.value.toUpperCase()"
                                           value="<?php if (isset($_POST['btnSubmit'])) {
                                               echo $_POST['v_p2'];
                                           } ?>">
                                </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                   

                                <?php } ?>
                            </div>

                            <div class="form-group">
                                <label for="inputText2" class="col-sm-4 control-label">Project Name3 </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="v_p3" id="v_p3"
                                           placeholder="Project Name3" onblur="this.value=this.value.toUpperCase()"
                                           value="<?php if (isset($_POST['btnSubmit'])) {
                                               echo $_POST['v_p3'];
                                           } ?>">
                                </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                    

                                <?php } ?>
                            </div>
                            <div class="form-group">
                                <label for="inputText1" class="col-sm-4 control-label">Supervisor *</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="v_sup" id="v_sup"
                                           placeholder="Supervisor Name" onblur="this.value=this.value.toUpperCase()" value="<?php if (isset($_POST['btnSubmit'])) {
                                        echo $_POST['v_sup'];
                                    } ?>">
                                </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                    <span class="text-danger"><?php echo $superr; ?></span>

                                <?php } ?>
                            </div>
                            <div class="form-group">
                                <label for="inputText1" class="col-sm-4 control-label">Division *</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="v_divi" id="v_divi"
                                           placeholder="Division" onblur="this.value=this.value.toUpperCase()" value="<?php if (isset($_POST['btnSubmit'])) {
                                        echo $_POST['v_divi'];
                                    } ?>">
                                </div>
                                <?php if (isset($_POST["btnSubmit"])) { ?>

                                    <span class="text-danger"><?php echo $diverr; ?></span>

                                <?php } ?>
                            </div>


                            

                            
                           

                       
                       


                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>


       

                        </div>
                    </div>
                </div>

            </div>
            <div>
            </div>

            <input type="submit" class="btn btn-primary btn-lg btn-block" name="btnSubmit">
</br></br>
    </form>
</center>

</body>
</html>