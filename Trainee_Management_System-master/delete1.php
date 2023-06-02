


<?php
 
 include "feedbackreport.php";


if (isset($_GET["idStatus1"])) {


    $sql = "DELETE FROM  feed1 WHERE id ='" . $_GET["idStatus1"] . "' ";
    if ($con->query($sql) === TRUE) {
    
        $msg = "Successfully Rejected";
        // header("Location:shedule.php");
    }
    
    
    }

?>