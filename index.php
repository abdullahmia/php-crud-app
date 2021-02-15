<?php require 'header.php'; ?>



<?php 
    require_once('db.php');

    if (isset($_POST["submit"])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // INSERT INTO `user_info` (`username`, `email`, `password`) VALUES ('raib', 'rahib@gmail.com', 'rahib');
        $query = "INSERT INTO user_info (username, email, password) VALUES ('$username', '$email', '$password') ";
        $result = mysqli_query($con, $query);

        if($result){
            ?>
			<div id="message" class="alert alert-primary text-center" role="alert">
			<?php echo "Data Inserted"; ?>
			</div>
			
			<?php
        }else{
            ?>
			<div id="message" class="alert alert-primary text-center" role="alert">
			<?php echo "Data is not Inserted";?>
		</div>
			<?php
        }
    }


?>

    <div class="mt-5 form_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto">

                    <div class="sumbit_form">
                    
                        <form action="index.php" method="post">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="email" name="email" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="text" name="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            
                            <button type="submit" name='submit' class="btn btn-primary btn-block">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require 'footer.php'; ?>