<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Change Password</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Change Password</h2>
  </div>
	
  <form method="post" action="changepassword.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo ($_SESSION['username']); ?>">
  	</div>
  	
  	<div class="input-group">
  	  <label>New Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm New password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="changepassword">Update</button>
  	</div>
  	
  </form>
</body>
</html>