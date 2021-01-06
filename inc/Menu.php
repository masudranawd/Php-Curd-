<?php 
  /*$satus= $_SESSION['status'];*/
?>

<!----------------------------------------------->		
<nav class="navbar navbar-default menu">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="<?php if($pg=='Home'){ echo 'active'; } ?>"><a href="index.php?page=Home">Home</a></li>
<?php /*
  if($satus==1){*/
?>
        <li class="<?php if($pg=='Mobile'){ echo 'active'; } ?>"><a href="index.php?page=Mobile">Mobile</a></li>
        <li class="<?php if($pg=='Laptop'){ echo 'active'; } ?>"><a href="index.php?page=Laptop">Laptop</a></li>
        <li class="<?php if($pg=='Car'){ echo 'active'; } ?>"><a href="index.php?page=Car">Car</a></li>
<?php /*
  }else{*/
?>


        <li class="<?php if($pg=='Book'){ echo 'active'; } ?>"><a href="index.php?page=Book">Book</a></li>
        <li class="<?php if($pg=='Cosmatics'){ echo 'active'; } ?>"><a href="index.php?page=Cosmatics">Cosmatics</a></li>
        <li class="<?php if($pg=='TV'){ echo 'active'; } ?>"><a href="index.php?page=TV">TV</a></li>
        <li class="<?php if($pg=='Electronics'){ echo 'active'; } ?>"><a href="index.php?page=Electronics">Electronics</a></li>
        <li class="<?php if($pg=='Byke'){ echo 'active'; } ?>"><a href="index.php?page=Byke">Byke</a></li>
        <li class="<?php if($pg=='Furniture'){ echo 'active'; } ?>"><a href="index.php?page=Furniture">Furniture</a></li>
        <li class="<?php if($pg=='Dress'){ echo 'active'; } ?>"><a href="index.php?page=Dress">Dress</a></li>
<?php 
 /* }*/
?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User Option <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="Profile.html">Profile</a></li>
            <li><a href="Password.html">Change Password!</a></li>            
            <li role="separator" class="divider"></li>
            <li><a href="Userlist.html">User List</a></li>            
            <li><a href="adduser.html">Add User</a></li>            
            <li><a href="Blockeduser.html">Blocked User</a></li>            
            <li role="separator" class="divider"></li>
            <li><a href="Logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<hr/>
<!----------------------------------------------->	