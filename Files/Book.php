<?php 
	if(isset($_POST['book'])){
		$book_name = $_POST['book_name']; 
		$author_name = $_POST['author_name']; 
		$published_date = $_POST['published_date']; 
		$price = $_POST['price']; 

		if(empty($book_name) OR empty($author_name) OR empty($published_date) OR empty($price)){
			$msg = "Filed Must Not Empty !"; 
			header('Location:?page=Book&msg='.$msg); 
		}else{
			$qry_book = "INSERT INTO tb_book (book_name,author_name,published_date,price) VALUES ('$book_name','$author_name','$published_date','$price')";

			$result = $DB->insert($qry_book); 
			if($result){
				$msg = "Save Successfully !"; 
				header('Location:?page=Book&msg='.$msg); 
			}
		}
	}
?>

<!----------------------------------------------->	
<div class="" style="min-height:400px;  ">	
	<div class="col-md-4">
<!------------------------------------>

<form action="?page=Book" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Book Name</label>
    <input name="book_name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Book Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Author Name</label>
    <input name="author_name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Author Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Published Date</label>
    <input name="published_date" type="date" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input name="price" type="text" class="form-control" id="exampleInputEmail1" placeholder="Price">
  </div>
  <button name="book" type="submit" class="btn btn-primary">Save</button>
  <?php if(isset($_GET['msg'])){ echo $_GET['msg']; } ?>
</form>

<!------------------------------------>
	</div>	
	<div class="col-md-8">
<!-------------------------------->
<table class="table table-bordered table-striped">
	<tr>
		<th>SL</th>
		<th>Book Name</th>
		<th>Author Name</th>
		<th>Published</th>
		<th>Price</th>
		<th style="width:28%;">Action</th>
	</tr>
<?php 
	$book_list_qry = "SELECT * FROM tb_book";
	$result = $DB->select($book_list_qry); 
	if($result){
		$i=0;
		while($book_data = $result->fetch_array()){
			$i++; 

?>
		
	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $book_data['book_name']; ?></td>
		<td><?php echo $book_data['author_name']; ?></td>
		<td><?php echo $book_data['published_date']; ?></td>
		<td><?php echo $book_data['price']; ?></td>
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
