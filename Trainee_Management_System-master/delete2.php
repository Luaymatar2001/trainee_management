


<?php
 
 include "results.php";


if (isset($_GET["idStatus2"])) {


    $sql = "DELETE FROM  tbl_results WHERE id ='" . $_GET["idStatus2"] . "' ";
    if ($con->query($sql) === TRUE) {
    
        $msg = "Successfully Rejected";
        // header("Location:delete2.php");
    }
    
    
    }

?>