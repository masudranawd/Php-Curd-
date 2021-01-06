<?php
	if(isset($_POST['cosmatics'])){
		$BandName= $_POST['BandName'];
		$Types = $_POST['Types'];
		$details = $_POST['details'];
		$Taka = $_POST['Taka'];

		
		if(empty($BandName) OR empty($Types) OR empty($Details) OR empty($Taka)){
			$msg = "Filed Must Not Empty !"; 
			header('Location:?page=Cosmatics&msg='.$msg); 
		}
	}
?>
<!----------------------------------------------->	
<div class="" style="min-height:400px;  ">	
	<div class="col-md-4">
<!------------------------------------>
<form action="?page=Cosmatics" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">BrandName</label>
    <input name="BrandName" type="text" class="form-control" id="exampleInputEmail1" placeholder="Brand Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Types</label>
    <input name="Types" type="text" class="form-control" id="exampleInputEmail1" placeholder="Types">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <textarea name="details" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Taka</label>
    <input name="Taka" type="text" class="form-control" id="exampleInputEmail1" placeholder="Taka">
  </div>
  <button name="cosmatics" type="submit" class="btn btn-primary">Save</button>
  <?php if(isset($_GET['msg'])){ echo $_GET['msg']; } ?>
</form>
<!------------------------------------>
	</div>	
	<div class="col-md-8">
<!-------------------------------->
<table class="table table-bordered table-striped">
	<tr>
		<th>SL</th>
		<th>Brand Name</th>
		<th>Types</th>
		<th>Taka</th>
		<th style="width:28%;">Action</th>
	</tr>
	<tr>
		<td>01</td>
		<td>NOKIA</td>
		<td>1100</td>
		<td>14830</td>
		<td>
			<a href="" class="btn btn-info btn-sm">View</a>
			<a href="" class="btn btn-warning btn-sm">Update</a>
			<a href="" class="btn btn-danger btn-sm">Remove</a>
		</td>
	</tr>
	<tr>
		<td>01</td>
		<td>NOKIA</td>
		<td>1100</td>
		<td>14830</td>
		<td>
			<a href="" class="btn btn-info btn-sm">View</a>
			<a href="" class="btn btn-warning btn-sm">Update</a>
			<a href="" class="btn btn-danger btn-sm">Remove</a>
		</td>
	</tr>
	<tr>
		<td>01</td>
		<td>NOKIA</td>
		<td>1100</td>
		<td>14830</td>
		<td>
			<a href="" class="btn btn-info btn-sm">View</a>
			<a href="" class="btn btn-warning btn-sm">Update</a>
			<a href="" class="btn btn-danger btn-sm">Remove</a>
		</td>
	</tr>
	<tr>
		<td>01</td>
		<td>NOKIA</td>
		<td>1100</td>
		<td>14830</td>
		<td>
			<a href="" class="btn btn-info btn-sm">View</a>
			<a href="" class="btn btn-warning btn-sm">Update</a>
			<a href="" class="btn btn-danger btn-sm">Remove</a>
		</td>
	</tr>
</table>
<!-------------------------------->
	</div>
	
</div>
<!----------------------------------------------->
