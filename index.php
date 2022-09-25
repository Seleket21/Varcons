<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<!--Let browser know website is optimized for mobile-->
      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Varcons | Home</title>

      	<!--Import Google Icon Font-->
      	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">      	
		<!-- Compiled and minified CSS -->
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      	<link rel="stylesheet" href="style.css">
      	<link rel="stylesheet" href="home.css">

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
			    <li class="active"><a href="index.php">Home</a></li>
			    <li><a href="upload.php">Upload</a></li>
			    <li><a href="about.html">About us</a></li>
			    <li><a href="contact.html">Contact us</a></li>
			  </ul>
			</div>
			</nav>
		</div>		

		<ul class="sidenav" id="mobile-demo">
		  <li class="active"><a href="index.php">Home</a></li>
		  <li><a href="upload.php">Upload</a></li>
		  <li><a href="about.html">About us</a></li>
		  <li><a href="contact.html">Contact us</a></li>
		</ul>

		<div class="container" id="photos-offset">
        	<div class="row">
		      	<?php
		        $db = mysqli_connect("localhost", "root", "", "varcons");	
		        $query = " select * from photos ";
		        $result = mysqli_query($db, $query);
		 
		        while ($data = mysqli_fetch_assoc($result)) {
		        ?>
		        	<div class="photo_align col s12 m12 l4">
      		 			<img class="hoverable z-depth-1 photos" src="./photos/<?php echo $data['filename']; ?>">
      		 			<a href="./photos/<?php echo $data['filename']; ?>" download><i class="material-icons medium">download</i></a>
      		 		</div>
		        
		        <?php
		        }
		        ?>
		    	
		    	<i class="col s12 m12 l12 offset-s6 offset-m6 offset-l6 material-icons large" style="cursor: pointer;" onclick="window.print();return false;">print</i>
		    </div>
      	</div>

      	<!--JavaScript at end of body for optimized loading-->
    	<!-- Compiled and minified JavaScript -->
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      	<script src="script.js"></script>
		<noscript>Enable Javascript and refresh this page.</noscript>		
	</body>
</html>
