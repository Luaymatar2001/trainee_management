<?php include("db.php"); ?>

<?php

$error = $error1 = "";
$DivName_err=$DivHead_err=$DivCon_err=$DivLoc_err=$DivMail_err="";
$DivName=$DivHead=$DivCon=$DivLoc=$DivMail="";

if (isset($_POST["btnSubmit"])) {

// set parameters and execute
     $DivName = $_POST["v_name"];
     

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    $sql="SELECT * FROM ` tbl_subject` WHERE Name='".$DivName."'";
    $resultSet= $con->query($sql);

   

     if (empty($DivName)) {
                $DivName_err = "Name is required.";
    } else if (!preg_match("/^[a-zA-Z0-9\(\)\.\_\s\-]+$/", $DivName)) {

        $DivName_err ='Invalid Division Name (eg." '. "'".'|;:<>!^+={}?@#$&*()%~`[])'.' can'."'".'t use';

    }else {
         $DivName = $_POST["v_name"];
    } 



 // Check connection
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }

if (empty($DivName_err) && empty($DivHead_err) && empty($DivCon_err) && empty($DivMail_err) && empty($DivLoc_err)  ) {
/////
if ($resultSet->num_rows >= 1) {
    $error1 = "Subject already exist";

} else {
    //     if (empty($T_id_err) && empty($Full_Name_err) && empty($Name_with_Initials_err) && empty($NIC_err) && empty($Age_err) && empty($Gender_err) && empty($DOB_err) && empty($Add_Line1_err) && empty($Add_Line2_err) && empty($Add_Line3_err) && empty($Temp_Add_Line1_err) && empty($Temp_Add_Line2_err) && empty($Temp_Add_Line3_err) && empty($Contact_Number1_err) && empty($Contact_Number2_err) && empty($E_Mail_err) && empty($tblTrainingInstituteID_err) && empty($tblCourseID_err) && empty($Batch_err) && empty($Year_err) && empty($Contact_Person_err) && empty($Contact_number_err) && empty($Relationship_err) && empty($Address_err) && empty($tblBankID_err) && empty($Name_as_Bank_err) && empty($Bank_Account_number_err)) {


        
$sql1 = "INSERT INTO tbl_subject( Name)
VALUES( '$DivName')";

    if ($con->query($sql1) === TRUE) {

       $error2 = "New Subject added successfully";

       
    } else {
        echo "Error: " . $sql1 . "<br>" . $con->error;
    }

    $con->close();

}

}


}        





///
    
    


?>


<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <title>Subject Maintenance</title>

    <?php include("header.php") ?>



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
        <h2>Subject Maintenance</h2>
    </center>
</div>


<center>

    <form class="form-horizontal" method="post" action="#">
        <!-- Add Institute -->


        <div class="container col-md-6 col-md-offset-3 ">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title ">
                            Subject Details
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
                                <label for="inputText2" class="col-sm-4 control-label">Subject Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="v_name"
                                           id="v_name"
                                           placeholder="Enter Subject Name" autofocus="autofocus"onblur="this.value=this.value.toUpperCase()"  value="<?php if(isset($_POST['btnSubmit'])){
                                        echo $_POST['v_name'];} ?>" >

                                        <?php if (isset($_POST["btnSubmit"])) { ?>

                                                <span class="text-danger"><?php echo $DivName_err; ?></span>

                                                <?php } ?>

                                </div>
                                 
                            </div>

                            <div class="form-group">
                            

                            <div class="form-group">
                              
                                <div class="col-sm-8">
                                  

                                        <?php if (isset($_POST["btnSubmit"])) { ?>

                                              

                                                <?php } ?>

                                </div>
                                
                            </div>

                            <div class="form-group">
                                
                                <div class="col-sm-8">
                                    

                                         <?php if (isset($_POST["btnSubmit"])) { ?>

                                                

                                                <?php } ?>

                                </div>
                               
                            </div>


                            <div class="form-group">
                                
                                <div class="col-sm-8">
                                   

                                         <?php if (isset($_POST["btnSubmit"])) { ?>

                                                <span class="text-danger"></span>

                                                <?php } ?>

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

        <br>
        

        <table class="table table-bordered " id="tblTrainee" style="font-size:16px;">
            <tr>
                
                <th>Subject Name</th>
                <th>Update</th>
                <th>Inactive</th>
                <th>Active</th>
                


            </tr>
            <tbody>

            <?php
            $sql = "SELECT *  FROM tbl_subject";
            $division_data = $con->query($sql);

            if ($division_data->num_rows >= 1) {
                while ($row = mysqli_fetch_assoc($division_data)) :?>
                    <tr>
                        
                        <td><?php echo $row['name']; ?></td>
                        <td><?= $row['flag']; ?></td>

                        
<td>
    <a href='subjectupdate.php?idStatus=<?php echo $row["id"] ?>'
       class="btn btn-danger btn-xs">Inactive</a>
</td>
<td>
    <a href='subjectupdate.php?idStatus1=<?php echo $row["id"] ?>'
       class="btn btn-success btn-xs">Active</a>
</td>
                        
                    </tr>
                    <?php
                endwhile;
            } ?>

            </tbody>
        </table>

    </div>
</form>

</div>
</div>


</body>
</html>