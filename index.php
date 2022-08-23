<?php

include 'function.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    
<?php

if(isset($_POST['fm_name'])){

    $fm_name = $_POST['fm_name'];
    $fm_class = $_POST['fm_class'];
    $fm_group = $_POST['fm_group'];
}

$sql ="INSERT INTO `test_crud`(Names,Class,Group_name)VALUES('$fm_name','$fm_class','$fm_group')";

$result = $conn->query($sql);

if($conn->query($sql) == TRUE){
    echo 'new record create successfully';
}else{

    echo "error:" . $sql . "<br>" .$conn->error;
}

$conn->close();
?>




<form action="" method='post'>
    Name: <input type="text" name = "fm_name"><br><br>
    Class: <input type="number" name="fm_class"><br><br>
    Group: <input type="text" name="fm_group"><br><br>
    <input type="submit" value="add data" name="sub">

</form>


</body>
</html>