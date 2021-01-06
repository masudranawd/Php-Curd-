<?php
		if(isset($_POST['car'])){
			$company = $_POST['company'];
			$model = $_POST['model'];
			$details = $_POST['details'];
			$price = $_POST['price'];
			if(empty($company) OR empty($model) OR empty($details) OR empty($price)){
				$msg = "Filed Must Not Empty !";
			header('Location:?page=Car&msg='.$msg); 
			}else{
				$qury_car = "INSERT INTO tb_car (company,model,details,price) VALUES ('$company','$model','$details','$price')";
				$result = $DB->insert($qury_car);
				if($result){
					$msg = "save successfully";
					header ('Location:?page=Car&msg='.$msg);
				}
		}
	}
	
?>
<!----------------------------------------------->	
<div class="" style="min-height:400px;">	
	<div class="col-md-4">
<!------------------------------------>
<form action="index.php?page=Car" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Company Name</label>
    <input name="company" type="text" class="form-control" id="exampleInputEmail1" placeholder="Company Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Model</label>
    <input name="model" type="text" class="form-control" id="exampleInputEmail1" placeholder="Model Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <textarea name="details" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input name="price" type="text" class="form-control" id="exampleInputEmail1" placeholder="Price">
  </div>
  <button name="car" type="submit" class="btn btn-primary">Save</button>
  <?php if(isset($_GET['msg'])){
  	echo $_GET['msg'];
  }?>
</form>
<!------------------------------------>
	</div>	
	<div class="col-md-8">
<!-------------------------------->
<table class="table table-bordered table-striped">
	<tr>
		<th>SL</th>
		<th>Company</th>
		<th>details</th>
		<th>Model</th>
		<th>Price</th>
		<th style="width:28%;">Action</th>
	</tr>
	<?php 
	$book_list_qry = "SELECT * FROM tb_car";
	$result = $DB->select($book_list_qry); 
	if($result){
		$i = 0; 
		while($car_data = $result->fetch_array()){
			$i++;
?>
	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $car_data['company'];?></td>
		<td><?php echo $car_data['details'];?></td>
		<td><?php echo $car_data['model'];?></td>
		<td><?php echo $car_data['price'];?></td>
		<td>
			<a href="" class="btn btn-info btn-sm">View</a>
			<a href="" class="btn btn-warning btn-sm">Update</a>
			<a href="" class="btn btn-danger btn-sm">Remove</a>
		</td>
	</tr>
	<?php
		}
	}
	?>
</table>
<!-------------------------------->
	</div>
	
</div>
<!----------------------------------------------->
