<?php

require ('header.php');



require_once('db.php');


	$query = "SELECT * FROM user_info ";
	$data_result = mysqli_query($con, $query);
	
	$count_data = mysqli_num_rows($data_result);
	
	
?>

<?php
    if(isset($_GET['Message'])){
		
		?>
		
		<div id="message" class="alert alert-primary text-center" role="alert">
			<?php echo $_GET['Message'];?>
		</div>
		
		<?php
	}
?>

<div style="margin-top: 50px !important;" class="container">
	<table class="table">
	  <thead>
		<tr>
		  <th scope="col">ID</th>
		  <th scope="col">Username</th>
		  <th scope="col">Email</th>
		  <th scope="col">Password</th>
		  <th scope="col">Edit</th>
		  <th scope="col">Delete</th>
		</tr>
	  </thead>
				  
<?php
				  
	if ($count_data > 0){
		while($row = mysqli_fetch_assoc($data_result)){
			?>
			
				  <tbody>
					<tr>
					  <th scope="row"><?php echo "$row[id]"; ?></th>
					  <th scope="row"><?php echo "$row[username]"; ?></th>
					  <th scope="row"><?php echo "$row[email]"; ?></th>
					  <th scope="row"><?php echo "$row[password]"; ?></th>
					  <th scope="row"><a class="btn btn-success" href="update_form.php?id=<?php echo "$row[id]"?>">Edit </a></th>
					  <th scope="row"><a class="btn btn-danger" href="delete.php?id=<?php echo "$row[id]"?>">Delete </a></th>

					</tr>

		
			
			
			<?php
		}
	}else{
		echo "No Data Avialable here";
	}

?>

		  </tbody>
				</table>
		</div>




<?php

require ('footer.php');
?>