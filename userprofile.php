<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Profile Maker</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>User Profile</h2>
  </div>
	
  <form method="post" action="userprofile.php" enctype="multipart/form-data">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Introduction</label>
  	  <input type="text" name="intro" value="<?php echo $intro; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Skills</label>
  	  <input type="text" name="skills" value="<?php echo($skills);?>">
  	</div>
  	<div class="input-group">
  	  <label>Select an image</label>
  	  <input type="file" name="fileToUpload" id="fileToUpload">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="uploadprofile">upload</button>
  	</div>
  	<p>
  		Already have a profile? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>