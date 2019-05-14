<?php require('header.php'); ?>

    <div class="container">
    	<div class="row">
    		<div class="col-md-12 text-center">
    			<h1>Add New Student</h1>
    		</div>
    	</div>
<?php 
	
	$successMessage = '';

	if ( isset($_POST['submit'])){

		$fullname = $_POST['fullname'];
		$email    = $_POST['email'];
		$phone    = $_POST['phone'];
        $password = md5($_POST['password']);

		$sql = 'INSERT INTO students (std_name,std_email,std_phone,std_pass) VALUES (:std_name,:std_email,:std_phone,:std_pass) ';

		$statement = $conection->prepare($sql);

		

		if ( $statement->execute( [':std_name'=>$fullname ,':std_email'=>$email ,':std_phone' =>$phone,':std_pass' =>$password]) )
		{
			$successMessage = '<div class ="alert alert-success">New Student Registred Successfully</div>';
		}
		else{
			$successMessage = '<div class ="alert alert-danger">Ragistration Fail</div>';

		}

	}


 ?>


    	<div class="row">
    		<div class="col-md-6 offset-md-3">
    			<form action="" method="POST">
    				<div class="form-group">
    					<label>Full Name</label>
    					<input type="text" name="fullname" class="form-control" autocomplete="off" required="required">
    				</div>

    				<div class="form-group">
    					<label>Email Address</label>
    					<input type="email" name="email" class="form-control" autocomplete="off" required="required">
    				</div>

    				<div class="form-group">
    					<label>Phone Number</label>
    					<input type="text" name="phone" class="form-control" autocomplete="off" required="required">
    				</div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" autocomplete="off" required="required">
                        
                    </div>
                    <div>
                         <input type="submit" name="submit" class="btn btn-primary" value="Register">
                    </div>

    				<?php if(!empty($successMessage )) : ?>

    					<?php echo $successMessage; ?>

    				<?php endif; ?>
    			</form>
    		</div>
    	</div>
    </div>

 <?php require('footer.php'); ?>