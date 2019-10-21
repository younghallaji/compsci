<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	  <link rel="shortcut icon" href="css/img/nac3.jpg" type="image/x-icon" />
	  <link rel="stylesheet" type="text/css" href="css/style.css">
	  <link rel="stylesheet" href="css/all.min.css"
      integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
      crossorigin="anonymous"
    />
      
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title> :: Welcome to NACOSS OGITECH </title>
	<script src="http://code.jquery.com/jquery-2.1.1.js"></script>
	<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
	
</head>
<body>
    <div class="nav black">
    <div class="container white-text" style="width: 80%; height:25px;">
      <a href="#!" class=" white-text" ><i class="fa fa-phone"></i> +234-7035743427 </a> &nbsp &nbsp &nbsp
      <a href="#!" class=" white-text hide-on-small-only" ><i class="fa fas-envolope"></i> contact@nacossogitech.com</a>&nbsp &nbsp &nbsp
      
    </div>

    </div>

	
<div class="nav-fixed">
  <nav class="grey lighten-4">
    <div class="container">
    	<div class="nav-wrapper">
	       <a href="#" class="brand-logo green-text darken-2">NACOSS Ogitech</a>
	       <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
	       <ul class="right hide-on-med-and-down ">
	        <li><a href="#home" class="grey-text darken-4 ">Home</a></li>
	        <li><a href="#student" class="grey-text darken-4">Students</a></li>
	        <li><a href="#department" class="grey-text darken-4">Department</a></li>
	        <li><a href="#gallery" class="grey-text darken-4">Gallery</a></li>
	        <li><a href="#login" class="btn green accent-4 modal-trigger">Login</a></li>
	       </ul>		
	    	</div>
    </div>
  </nav>
</div>
	       <ul class="sidenav" id="mobile-demo">
	        <li><a href="#home">Home</a></li>
	        <li><a href="#student">Students</a></li>
	        <li><a href="#department">Department</a></li>
	        <li><a href="#gallery">Gallery</a></li>
	        <li><a href="#login" class="modal-trigger">Login</a></li>
	       </ul> 

	  <div id="login" class="modal">
	      	<div class="modal-footer">
     		 <a href="#!" class="modal-close waves-effect waves-green btn-flat"><i class="fas fa-times"></i></a>
    		</div>
    	<div class="modal-content">
      		<div id="box">
      			<form method="POST" action="script/login.php">
      			<h3 class="center modal-title">Login</h3>
			      	<div class="form-field col s12">
			             <label for="user" class="left">Username</label>
			             <input type="text" id="user" name="user" class="text"><br>
					</div>
					
					<div class="form-field col s12">
			            <label for="pass" class="left">Password</label>
			            <input type="password" id="pass" name="pass"><br>
			        </div>

			        <div class="form-field col s12 center">
						<input type="submit" name="login" id="submit" value="Login" class="btn green accent-4">
			        </div>
			        <div id="error"></div>
			     </form>
     		</div>
   		 </div>
    
  </div>

	 <script type="text/javascript">
      <?php include ('script.php');?>
    </script>

<script type="text/javascript" src="js/script.js"> </script>
<script type="text/javascript" src="js/all.min.js"> </script>
<script type="text/javascript" src="js/materialize.min.js"> </script>