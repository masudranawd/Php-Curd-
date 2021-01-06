<?php 
	session_start(); 

	if(isset($_SESSION['username'])){
		header('Location:index.php'); 
	}
?>


<?php 
  include 'mvc-FRAMEWORK/Configuration/config.php';
  include 'mvc-FRAMEWORK/Library/Database.php';

  $DB = new Database(); 
?>

<?php 
	if(isset($_POST['login'])){
		$email = $_POST['email']; 
		$password = $_POST['password']; 

		if(empty($email) OR empty($password)){
			$msg = '<span style="color:red;">Invalid Email Or Password</span>';
		}else{
      $password = md5($password); 
      
			$login_query = "SELECT * FROM tb_user WHERE email='$email' AND password='$password'";

			$result = $DB->select($login_query); 
			if($result){
				$dataLogin = $result->fetch_assoc(); 
				
				$_SESSION['email'] = $dataLogin['email']; 
				$_SESSION['username'] = $dataLogin['username']; 

				header('Location:Login.php'); 

			}else{
				$msg = '<span style="color:red;">Invalid Email Or Password</span>';	
			}
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  	<div class="col-md-4"></div>
  	<div class="col-md-4">

<form style="margin-top:150px;" action="Login.php" method="post">
  <div class="form-group">
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  <button name="login" type="submit" class="btn btn-primary">Login</button>
  <br/>
  <?php  if(isset($msg)){ echo $msg; } ?>
</form>

  	</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>