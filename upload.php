<?php
error_reporting(0);
 
$msg = "";
 
// If upload button is clicked ...
if (isset($_POST['upload'])) {
 
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./photos/" . $filename;
 
    $db = mysqli_connect("localhost", "root", "", "varcons");
 
    // Get all the submitted data from the form
    $sql = "INSERT INTO photos (filename) VALUES ('$filename')";
 
    // Execute query
    mysqli_query($db, $sql);
 
    // Now let's move the uploaded image into the folder: photos
    if (move_uploaded_file($tempname, $folder)) {
        echo '<script>alert("Image uploaded successfully!")</script>';
    } else {
        echo '<script>alert("Failed to upload!")</script>';
    }
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<!--Let browser know website is optimized for mobile-->
      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Varcons | Upload</title>

      	<!--Import Google Icon Font-->
      	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">      	
		<!-- Compiled and minified CSS -->
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      	<link rel="stylesheet" href="style.css">
      	<link rel="stylesheet" href="upload.css">

      	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>

    <body>
	    <div class="navbar-fixed">
		    <nav class="blue darken-3">
			<div class="nav-wrapper">
			  <a href="index.php" class="brand-logo">Varcons</a>
			  <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
			  <ul class="right hide-on-med-and-down">
			    <li><a href="index.php">Home</a></li>
			    <li class="active"><a href="upload.php">Upload</a></li>
			    <li><a href="about.html">About us</a></li>
			    <li><a href="contact.html">Contact us</a></li>
			  </ul>
			</div>
			</nav>
		</div>		

		<ul class="sidenav" id="mobile-demo">
		  <li><a href="index.php">Home</a></li>
		  <li class="active"><a href="upload.php">Upload</a></li>
		  <li><a href="about.html">About us</a></li>
		  <li><a href="contact.html">Contact us</a></li>
		</ul>

		<div class="container">
			<div class="row">
			<div id="content">
		        <form method="POST" action="" enctype="multipart/form-data">
		        	<h3 id="browse">Browse or Drop file below</h3>
		            <div>
		                <input id="up_file" class="col s12 m12 l12" type="file" name="uploadfile"/>
		            </div>
		            <div>
		                <button id="up_button" class="col s12 m12 l12 btn btn-primary waves-effect waves-light amber darken-3" type="submit" name="upload"><i class="material-icons small right">upload</i>Upload</button>
		            </div>
		        </form>
		    </div>
		</div>
      	</div>

      	<!--JavaScript at end of body for optimized loading-->
    	<!-- Compiled and minified JavaScript -->
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      	<script src="script.js"></script>
      	<script src="upload.js"></script>
		<noscript>Enable Javascript and refresh this page.</noscript>		
	</body>
</html>
