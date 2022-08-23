<?php

include 'function.php';

    $sql = "SELECT * FROM test_crud";
$result = $conn->query($sql);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
    <link rel="stylesheet" href="view.css">
</head>
<body>
    

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Class</th>
        <th>Group</th>
        <th>Action</th>

    </tr>
    <tbody>
    <?php  
    

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      
    ?>

      <tr>
          <td><?php echo $row['ID']; ?></td>
          <td><?php echo $row['Names']; ?></td>
          <td><?php echo $row['Class']; ?></td>
          <td><?php echo $row['Group_name']; ?></td>
          <td><a href="update.php?ID=<?php echo $row['ID'];?>">edit</a> 
        <form action="delete.php" method="post"style="display:inline";>
            <button type="submit" name="delete" value="<?php echo $row['ID'];?>">delete</button>
        </form>
        </td>
      </tr>

      <?php   
      
      
    }
}else{
    "result 0";
}
$conn->close();
      ?>
      </tbody>
</table>




</body>
</html>