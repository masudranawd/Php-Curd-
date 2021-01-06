<?php /*
	session_start(); 
	if(!isset($_SESSION['username'])){
		header('Location:Login.php'); 
	}*/
?>
<?php 
	if(!isset($_GET['page'])){
		header('Location:index.php?page=Home');
	}else{
		$pg = $_GET['page']; 
	}
?>

<?php 
	include 'inc/Header.php';
	include 'inc/Menu.php';
	if(isset($pg)){
		include 'Files/'.$pg.'.php';
	}
	include 'inc/Footer.php';
?>