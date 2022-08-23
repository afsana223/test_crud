<?php

include 'function.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>
    
<?php


//update data
if(isset($_POST['fm_name'])){

    $name = $_POST['fm_name'];
    $class = $_POST['fm_class'];
    $group = $_POST['fm_group'];
    $user_id = $_POST['id'];

    $sql = "UPDATE test_crud SET Names='$name',Class='$class',Group_name='$group' WHERE `ID`='$user_id'";

    $result = $conn->query($sql);
    if($result == TRUE){
        echo "Record update successfully";
    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}






//code show the input fild to select name;
if(isset($_GET['ID'])){
    $std = $_GET['ID'];
    $sql = "SELECT * FROM test_crud WHERE ID='$std'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){

            ?>

           



<form action="" method='post'>
      <input  type="hidden" name="id" value="<?php echo $row['ID']; ?>"><br><br>

    Name: <input type="text" name = "fm_name" value="<?php echo $row['Names']; ?>"><br><br>
    Class: <input type="number" name="fm_class" value="<?php echo $row['Class']; ?>"><br><br>
    Group: <input type="text" name="fm_group" value="<?php echo $row['Group_name']; ?>"><br><br>
    <input type="submit" value="update data" name="sub">

</form>

</body>
</html>



<?php
          
        }
    }else{
        echo "no id found";
    }
}


?>
