<?php

require ("header.php");
require ("db.php");

$update_item_id = $_REQUEST['id'];
$get_update_data_query  = "SELECT * FROM user_info WHERE id=$update_item_id ";
$run_get_update_data_query = mysqli_query($con, $get_update_data_query);
$count_of_item = mysqli_num_rows($run_get_update_data_query);

while($data = mysqli_fetch_assoc($run_get_update_data_query)){
	$data_id = $data['id'];
	$username = $data['username'];
	$email = $data['email'];
	$password = $data['password'];
}



?>

	<div class="mt-5 form_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto">

                    <div class="sumbit_form">
                    
                        <form action="update.php" method="post">
                            <input type="hidden" name="data_id" value="<?php echo $data_id; ?>">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="text" name="username" class="form-control" value="<?php echo "$username"?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                            
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="email" name="email" value="<?php echo "$email"?>" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="text" name="password" value="<?php echo "$password"?>" class="form-control" id="exampleInputPassword1">
                            </div>
                            
                            <button type="submit" name='submit' class="btn btn-primary btn-block">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


  

<?php require('footer.php'); ?>