<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
 
  <title>Download files</title>

  <style>

table {
  font-family: arial, sans-serif;
  /*border-collapse: collapse;*/
  width: 80%;
  
}


td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 20px;
  height: 25px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

      </style>
<?php include("header.php") ?>
</head>
<body>
<br>
<br>
<br>
<br>
<br>

<center>
<table >

    <th>ID</th>
    <th>Filename</th>
    
    <th>Downloads</th>
    <th>Action</th>

<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['name']; ?></td>
     
      <td><?php echo $file['downloads']; ?></td>
      <td><a href="downloads.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>
</center>
</body>
</html>