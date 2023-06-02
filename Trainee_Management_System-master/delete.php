


<?php
 include "schedule.php";
if (isset($_GET["idStatus"])) {


$sql = "DELETE FROM  tbl_schedule1 WHERE id ='" . $_GET["idStatus"] . "' ";
if ($con->query($sql) === TRUE) {

    $msg = "Successfully Rejected";
    // header("Location:shedule.php");
}


}

?>