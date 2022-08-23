<?php
include 'function.php';


if (isset($_POST['delete'])) {

    $user_id = $_POST['delete'];

    $sql = "DELETE FROM `test_crud` WHERE `ID`='$user_id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>