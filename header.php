<!DOCTYPE html>
<html>
<head>
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	  <link rel="shortcut icon" href="css/img/nac3.jpg" type="image/x-icon" />
	  <link rel="stylesheet" type="text/css" href="css/main.css">
	  <link rel="stylesheet" href="css/all.min.css"
      integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
      crossorigin="anonymous"
    />
      
     <meta http-equiv="refresh" content="10"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title> :: Welcome to NACOSS OGITECH </title>

</head>
<body id="home">
    <div class="nav black hide-on-med-and-down">
    <div class="container white-text" style="width: 80%; height:25px;">
      <a href="#!" class=" white-text" ><i class="fa fa-phone"></i> +234-7035743427 </a> &nbsp &nbsp &nbsp
      <a href="#!" class=" white-text hide-on-small-only" ><i class="fas fa-envelope"></i> contact@nacossogitech.com</a>&nbsp &nbsp &nbsp <a href="#!" class="white-text" ><i class="fa fa-clock" aria-hidden="true"></i> Today: 
      	<span id="datetime"></span> </a>
      
    </div>

    </div>

<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">New Student</a></li>
  <li><a href="#!">Continue regiatration</a></li>
  <li class="divider"></li>
  <li><a href="#!">Back to login</a></li>
</ul>	
<div class="navbar-fixed">
  <nav class="grey lighten-4">
    <div class="container">
    	<div class="nav-wrapper">
	       <a href="#" class="brand-logo green-text darken-2">NACOSS Ogitech</a>
	       <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
	       <ul class="right hide-on-med-and-down ">
	        <li><a href="index.php" class="grey-text darken-4 ">Home</a></li>
	        <li><a href="#student" class="grey-text darken-4 dropdown-trigger" data-target="dropdown1">Students <i class="material-icons right">arrow_drop_down</i> </a></li>
	        <li><a href="#contact" class="grey-text darken-4">Contact</a></li>
	        <li><a href="#gallery" class="grey-text darken-4">Gallery</a></li>
	        <li><a href="#login" class="btn green accent-4 modal-trigger">Login</a></li>
	       </ul>		
	    	</div>
    </div>
  </nav>
</div>
	       <ul class="sidenav" id="mobile-demo">
	        <li><a href="index.php">Home</a></li>
	        <li><a href="#student">Students</a></li>
	        <li><a href="#contact">Contact</a></li>
	        <li><a href="#gallery">Gallery</a></li>
	        <li><a href="#login" class="modal-trigger">Login</a></li>
	       </ul> 

	  <div id="login" class="modal">
	      	<div class="modal-footer">
     		 <a href="#!" class="modal-close waves-effect waves-green btn-flat"><i class="fas fa-times"></i></a>
    		</div>
    	<div class="modal-content">
      		<div class="">
      			<h3 class="center green-text accent-4">Login</h3>
			      	<div class="form-field col s12" style="margin-top: 15px">
			             <label for="fname" class="left">Username</label>
			             <input type="text" id="fname" name="fname"><br>
					</div>
					
					<div class="form-field col s12" style="margin-top: 15px">
			            <label for="fname" class="left">Password</label>
			            <input type="password" id="fname" name="fname"><br>
			        </div>
					<div class="form-field col s12" style="margin-top: 15px">  
					    <p>
					      <label>
					        <input type="checkbox" checked="checked" />
					        <span>Rememer me</span>
					      </label>
					    </p>
			        </div>
			        <div class="form-field col s12" style="margin-top: 25px">
						<a href="payment2.php" class="btn green">Login</a>
			        </div>
     		</div>
   		 </div>
    
  </div>


	 <script type="text/javascript">
      <?php include ('script.php');?>
    </script>

<script type="text/javascript" src="js/all.min.js"> </script>
<script type="text/javascript" src="js/materialize.min.js"> </script>

<script>
var dt = new Date();
document.getElementById("datetime").innerHTML = dt.toLocaleString();
</script>