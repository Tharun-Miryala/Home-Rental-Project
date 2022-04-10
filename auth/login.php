<?php
	require '../config/config.php';
	
	if(isset($_POST['login'])) {

		// Get data from FORM
		$username = $_POST['username'];
		$email = $_POST['username'];
		$password = $_POST['password'];

		try {
			$stmt = $connect->prepare('SELECT * FROM users WHERE username = :username OR email = :email');
			$stmt->execute(array(
				':username' => $username,
				':email' => $email
				));
			$data = $stmt->fetch(PDO::FETCH_ASSOC);

			if($data == false){
				$errMsg = "User $username not found.";
			}
			else {
				if(md5($password) == $data['password']) {
					$_SESSION['id'] = $data['id'];
					$_SESSION['username'] = $data['username'];
					$_SESSION['fullname'] = $data['fullname'];
					$_SESSION['role'] = $data['role'];
					header('Location: dashboard.php');
					exit;
				}
				else
					$errMsg = 'Password not match.';
			}
		}
		catch(PDOException $e) {
			$errMsg = $e->getMessage();
		}
	}
?>

<?php include '../include/header.php';?>

	<!-- Services --> 
	<nav class="navbar navbar-expand-sm navbar-dark py-1" style="background-color:Black;" id="mainNav">          <!--  background-color:#212529 -->
      <div class="container">

        <a class="navbar-brand js-scroll-trigger" href="../index.php">WebsiteLogo</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <!-- <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li> -->

            <li class="nav-item">
              <a class="nav-link" href="register.php">Register</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section id="services">
		<div class="container">
			<div class="row">				
			  <div class="col-md-6 mx-auto">
			  	<div class="alert alert-secondary" role="alert">

			  		<?php
						if(isset($errMsg)){
							echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
						}
					?>
			  		<h2 class="text-center">Login</h2>
				    <form action="" method="post">
					  <div class="form-group">
					    <label for="exampleInputEmail1">User Name/Email Address:</label>
					    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email" name="username" required>
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Password:</label>
					    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Pass....." name="password" required>
					  </div>
					  <button type="submit" class="btn btn-info center" name='login' value="Login">Submit</button>
					  <!-- <button type="submit" class="btn btn-info disabled">Cancel</button> -->
					</form>				 
				</div>
			 </div>
		    </div>
		</div>
	</section>
<?php include '../include/footer.php';?>