<?php include('server.php');?>
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
    
   
 
  <script src="http://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
  
  </head>
  <body>  
    <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
			<div class="container">
		
				<center><h1>Create Post</h1></center>
				<form method="post" action="post.php">
				    
					<div class="form-group">
						<label>Author</label>
						<input type="text" name="author" class="form-control" value="<?php echo($_SESSION['username']);?>">
					</div>
					
				    <div class="form-group">
						   <label>Category</label>
							 <select name="category" class="form-control">
								<option name="category" value="1">Technology</option>
								<option name="category" value="2">Pscycology</option>
								<option name="category" value="3">Medical</option>
								<option name="category" value="4">Social Issue</option>
								<option name="category" value="5">cricket</option>
							</select>
					 </div>
					 
					<div class="form-group">
						<label>Title</label>
						<input type="text" name="title" class="form-control">
					</div>
					
					<div class="form-group">
						<label>Body</label>
						<textarea  id="editor1" name="body" class="form-control"></textarea>
					</div>
					<input type="submit" name="createpost" value="Submit" class="btn btn-primary">
				</form>        
			</div>  
      </div>
		
    

	 
	 
     <!-- JS -->
	 <script>
          CKEDITOR.replace( 'editor1' );
        </script>

     <script src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
     <script src="js/jquery-migrate-1.2.1.min.js"></script> <!--  jQuery Migrate Plugin -->
     <script src="https://www.google.com/jsapi"></script> <!-- Google Chart -->

     <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->

  </body>
</html>	 