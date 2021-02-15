<?php

require ('db.php');
$del_item_id = $_REQUEST['id'];
$del_query = "DELETE FROM user_info WHERE user_info.id = $del_item_id";
$run_del_query = mysqli_query($con, $del_query);
if ($run_del_query){
	$message = "Data is deleted";
	header("Location:data.php?Message=".$message);
	
}else{
	echo "not deleted";
}
?>