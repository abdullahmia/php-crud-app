<?php

require ('db.php');


if (isset($_REQUEST['submit'])) {
    $data_id = $_REQUEST['data_id'];
    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    echo $data_id;
    echo $username;
    echo $email;
    echo $password;


    $update_query = "UPDATE user_info SET username='$username', email='$email', password='$password' WHERE id=$data_id ";
    $final_update_query = mysqli_query($con, $update_query);

    if ($final_update_query) {
    	$message = "Data is updated";
    	header("Location:data.php?Message=".$message);
    }else{
    	$message = "Data is not updated";
    	header("Location:data.php?Message=".$message);
    }

}



?>