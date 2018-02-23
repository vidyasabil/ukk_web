  <!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/gudang/front/login/css/login.css">
</head>
<body>
<!-- <form action="<?php echo base_url('Login/aksi_login'); ?>" method="post">

  <div class="form-group"> 
      <label for="pwd">username:</label>
      <input type="text" name="username" class="form-control" id="pwd" placeholder="Enter username">
    </div><br>
	  <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
    </div><br>
      <button type="submit" class="btn btn-default">Submit</button>
  
</form> -->

<div class="wrapper">
  <form class="login" action="<?php echo base_url('Login/aksi_login'); ?>" method="post">
    <p class="title">Log in</p>
    <input type="text" placeholder="Username" name="username" autofocus/>
    <i class="fa fa-user"></i>
    <input type="password" name="password" placeholder="Password" />
    <i class="fa fa-key"></i>
    <a href="#">Forgot your password?</a>
    <button type="submit">
      <i class="spinner"></i>
      <span class="state">Log in</span>
    </button>
  </form>
  <footer><a target="blank" href="http://boudra.me/">boudra.me</a></footer>
  </p>
</div>

<script src="<?php echo base_url();?>/gudang/front/login/js/login.js"></script>
</body>
</html>