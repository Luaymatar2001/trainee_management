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
    $T_id = $com =$id = $mark = $done = $job = $ntrain = $Title = $Topic= $project = $P1 = $P2 = $P3 = $div = $Dv3 = $Dv2 = $Dv1 = $SDAY = $EDAY = $Sup = $DIVI = $Name = $Name_with_Initials = $NIC = $Age = $Gender = $DOB = $Add_Line1 = $Add_Line2 = $Add_Line3 = $Temp_Add_Line1 = $Temp_Add_Line2 = $Temp_Add_Line3 = $Contact_Number1 = $Contact_Number2 = $E_Mail = $tblTrainingInstituteID = $ProgramName = $tblCourseID = $Batch = $Year = $Contact_Person = $Contact_number = $Relationship = $Address = $tblBankID = $Name_as_Bank = $Bank_Account_number = $flag = $branch = "";



    $id = $_POST["v_id"];
    $done = $_POST["v_done"];
    $mark = $_POST["v_mark1"];
    $flag = "PENDING";
  
         


    // if (empty($Title_err) && empty($Full_Name_err) && empty($Name_with_Initials_err) && empty($NIC_err) && empty($Age_err) && empty($Gender_err) && empty($DOB_err) && empty($Add_Line1_err) && empty($Add_Line2_err) && empty($Add_Line3_err) && empty($Temp_Add_Line1_err) && empty($Temp_Add_Line2_err) && empty($Temp_Add_Line3_err) && empty($Contact_Number1_err) && empty($Contact_Number2_err) && empty($E_Mail_err) && empty($tblTrainingInstituteID_err) && empty($ProgramName_err) && empty($tblCourseID_err) && empty($Batch_err) && empty($Year_err) && empty($Contact_Person_err) && empty($Contact_number_err) && empty($Relationship_err) && empty($Address_err) && empty($tblBankID_err) && empty($Name_as_Bank_err) && empty($Bank_Account_number_err) && empty($flag_err) && empty($Branch_err) && empty($error4) && empty($error) && empty($error) && empty($error)) {

    //     if ($resultSet->num_rows >= 1) {
    //         $error1 = "Trainee already exist";

//         } else {
//             //     if (empty($T_id_err) && empty($Full_Name_err) && empty($Name_with_Initials_err) && empty($NIC_err) && empty($Age_err) && empty($Gender_err) && empty($DOB_err) && empty($Add_Line1_err) && empty($Add_Line2_err) && empty($Add_Line3_err) && empty($Temp_Add_Line1_err) && empty($Temp_Add_Line2_err) && empty($Temp_Add_Line3_err) && empty($Contact_Number1_err) && empty($Contact_Number2_err) && empty($E_Mail_err) && empty($tblTrainingInstituteID_err) && empty($tblCourseID_err) && empty($Batch_err) && empty($Year_err) && empty($Contact_Person_err) && empty($Contact_number_err) && empty($Relationship_err) && empty($Address_err) && empty($tblBankID_err) && empty($Name_as_Bank_err) && empty($Bank_Account_number_err)) {


                
// // $sql1 = "INSERT INTO feed1 ( Trainee_ID, Done, )
// // VALUES( '$id', '$done','$mark')";

//             if ($con->query($sql1) === TRUE) {

//                $error2 = "New Trainee added successfully";

               
//             } else {
//                 echo "Error: " . $sql1 . "<br>" . $con->error;
//             }

//             $con->close();

//         }

//     }
// else

}

?>
    
	<!DOCTYPE html>
<html>
<head>
















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
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  background-color: #a89f9e;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
tr:hover {background-color: #e8c7c3;}
</style>
</head>
<body>
<br>
<br>
<br>
<br>
<center> <h2>A/L AND UNIVERSITY RESULTS</h2> </center>
<p>Type something in the input field to search the table :</p>  
<input id="myInput" type="text" placeholder="Search.." style="width:200px; height:30px">
<br><br>
<div>
<table style="overflow-x:auto;">
  <thead>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Stream</th>
    <th>Subject 1</th>
    <th>Result</th>
    <th>Subject 2</th>
    <th>Result</th>
    <th>Subject 3</th>
    <th>Result</th>
    <th>Gen: Test Mark</th>
    <th>Gen: Eng: Mark</th>
    <th>District</th>
    <th>Z-Score</th>
    <th>GPA</th>
    <th>Delete</th>
  </tr>
  </thead>
  <tbody id="myTable">
  

<?php
  $rowcount=1;
$sql = "SELECT *  FROM tbl_results  ";
$feed_data = $con->query($sql);






if ($feed_data->num_rows >= 1) {
  while ($row = mysqli_fetch_assoc($feed_data)) :?>
  <tr>
     <td><?php echo  $row['id']; ?></td>
     <td><?php echo  $row['Name_with_Initials']; ?></td>
      <td><?php echo  $row['stream']; ?></td>
      <td><?php echo  $row['sub1']; ?></td>
      <td><?php echo  $row['res1']; ?></td>
      <td><?php echo  $row['sub2']; ?></td>
      <td><?php echo  $row['res2']; ?></td>
      <td><?php echo  $row['sub3']; ?></td>
      <td><?php echo  $row['res3']; ?></td>
   
      <td><?php echo  $row['gentest']; ?></td>
      <td><?php echo  $row['geneng']; ?></td>
      <td><?php echo  $row['district']; ?></td>
      <td><?php echo  $row['zscore']; ?></td>
      <td><?php echo  $row['gpa']; ?></td>
	  <td>
                            <a href='delete2.php?idStatus2=<?php echo $row["id"] ?>'
                               class="btn btn-danger btn-xs">Delete</a>
                        </td>
      
   
       </tr>
   
   <?php
    
endwhile;

} ?>
</tbody>
</table>
<br>
	<br>
<p>RESULTS ARE PROVIDED BY INTERNSHIP HOLDERS</p>


</div>

</body>
</html>