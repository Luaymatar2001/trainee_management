<?php include("db.php"); ?>

<?php
$txtInCode = $txtInName = $txtLocation = $msg = $msger = "";
$InstituteCode_err=$InstituteName_err=$InstituteLoc_err=$contact_err=$designation_err=$Ins_Coordinator_err="";
if (isset($_GET["idStatus"])) {
    $sql = "UPDATE tbl_apply SET flag='" . "ISSUE" . "' WHERE tblTraineeID ='" . $_GET["idStatus"] . "' ";
    // $sql1 = "UPDATE new_idcaed SET isactive='" . "active" . "' WHERE Trainee_ID ='" . $_GET["idStatus"] . "' ";
    if (($con->query($sql) === TRUE)) {
        $msg = "Successfully inactived";
        header("Location:tblapply.php");
    }
} else {
    $msger = "Some error occured. Please try again";
}
if (isset($_GET["idStatus1"])) {
    $sql = "UPDATE tbl_apply SET flag='" . "PENDING" . "' WHERE tblTraineeID ='" . $_GET["idStatus1"] . "' ";
    if ($con->query($sql) === TRUE) {
        $msg = "Successfully actived";
        header("Location:tblapply.php");
    }
} else {
    $msger = "Some error occured. Please try again";
}