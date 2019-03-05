
<?php
 session_start(); 
 
 if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
	unset($_SESSION['image']);
	unset($_SESSION['intro']);
	unset($_SESSION['skills']);
  	header("location: login.php");
  }
  
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  
    if (!isset($_SESSION['intro'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  
    if (!isset($_SESSION['skills'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  
  
    if (!isset($_SESSION['image'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  

  
  
 if(isset($_SESSION['skills'])){
		// use of explode 
		$string = $_SESSION['skills']; 
		$array = explode (",", $string);
        $length=count($array);		
 }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--favicon-->
        <link rel="shortcut icon" href="favicon.ico" type="image/icon">
        <link rel="icon" href="favicon.ico" type="image/icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>student- Home</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
    
   

  </head>
  <body>  
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
           <?php
		  $Welcome = "Welcome";
          echo "<h1>" . $Welcome . "<br>". $_SESSION['username']. "</h1>";
		  ?>
        </header>
        <div class="profile-photo-container">
          <img src="images/<?php echo($_SESSION['image']);?>" alt="Profile Photo" class="img-responsive">  
          <div class="profile-photo-overlay"></div>
        </div>      
        <!-- intro-->
        
		
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">          
          <ul>
          
            <li><a><i class="fa fa-users fa-fw">
			  <?php if(isset($_SESSION['intro'])) :?>
					<h3>Introduction:</h3><strong><?php echo($_SESSION['intro']);?></strong>
              <?php endif ?>
            </i></a></li>
			
			<li><a>
             <?php if(isset($_SESSION['skills'])):?>
					<h3>Skills:</h3>
				   <?php for($i=0;$i<$length;$i++):?>
					 <strong><?php echo($array[$i].'<br>');?></strong> 
				  <?php endfor ?>
             <?php endif ?>
			</a></li>
			
			<li><a href="updateprofile.php">update profile</a></li>
				<li><a href="changeprofilepic">change profilePic</a></li>
               
            
          </ul>  
        </nav>
      </div>
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li>
                  <a href="index.php">Home Placement</a>
                </li>
                
				<li>
                  <a href="post.php">Create Post</a>
                </li>
                 <li>
                  <a href="changepassword.php">Change Password </a>
                  </li>
				<li>
                  <a href="home.php?logout='1'" style="color: red;">logout</a>
                 </li>
				  
              </ul>  
            </nav> 
          </div>
        </div>
       
    
    <!-- JS -->
    <script src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script src="js/jquery-migrate-1.2.1.min.js"></script> <!--  jQuery Migrate Plugin -->
    <script src="https://www.google.com/jsapi"></script> <!-- Google Chart -->

    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->

  </body>
</html>