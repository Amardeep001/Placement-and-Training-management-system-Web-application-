<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Profile Maker</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>User ProfilePic</h2>
  </div>
	
  <form method="post" action="changeprofilepic.php" enctype="multipart/form-data">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo ($_SESSION['username']); ?>">
  	</div>
  	
  	<div class="input-group">
  	  <label>Select an image</label>
  	  <input type="file" name="fileToUpload" id="fileToUpload">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="changeprofilepic">Update ProfilePIC</button>
  	</div>
  	
  </form>
</body>
</html>