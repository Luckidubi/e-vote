<!DOCTYPE html>
<html>
<head>
	<title>E-vote</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="<?php echo ROOT_URL?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo ROOT_URL?>assets/css/all.min.css">
	<link rel="stylesheet" href="<?php echo ROOT_URL?>assets/css/bootstrap.min.css">
	

</head>
<body>
	<header>
	<h1 class="display-4"><i><img src="<?php echo ROOT_URL?>assets/img/logo.png"></i> INEC 2018 &copy;</h1>
		<nav class="navbar navbar-expand-lg navbar-light p-3" style="background: green; color: rgba(255, 255, 255, 0.99)">
			<div class="container">
			  <a class="navbar-brand"  style="color: rgba(255, 255, 255, 0.99)" href="<?php echo ROOT_URL;?>"><i><img src="<?php echo ROOT_URL?>assets/img/logo2.png" style="width: 80px; height: 60px"></i> E-vote</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav  ">
			      <li class="nav-item" >
			        <a class="nav-link ml-5"  style="color: rgba(255, 255, 255, 0.99)" href="<?php echo ROOT_URL;?>">Home </a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link ml-4"  style="color: rgba(255, 255, 255, 0.99)" href="<?php echo ROOT_URL;?>candidates">Vote For Candidates</a>
			      </li>
			      
			      <li class="nav-item">
			        <a class="nav-link ml-4"  style="color: rgba(255, 255, 255, 0.99)" href="<?php echo ROOT_URL;?>votes">Votes</a>
			      </li>
			    </ul>
			    <ul class="navbar-nav ml-auto">
			    	<?php if(isset($_SESSION['logged_in'])): ?>
			    		<li class="nav-item">
			        <a class="nav-link ml-5"  style="color: rgba(255, 255, 255, 0.99)"  href="<?php echo ROOT_URL;?>votes">  <b>Welcome! <?php echo $_SESSION['voter_id']['name'];?></b>  &nbsp;<span class="fa fa-male"></span></a>
			      </li>
			      <li class="nav-item ml-5">
			        <a class="nav-link"  style="color: rgba(255, 255, 255, 0.99)" href="<?php echo ROOT_URL;?>voters/logout">Logout &nbsp;<span class = "fa fa-power-off"></span> </a>
			      </li>
			      <?php else:?>
			    	<li class="nav-item dropdown ml-5">
				        <a class="nav-link dropdown-toggle"  style="color: rgba(255, 255, 255, 0.99)" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Register
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				          <a class="dropdown-item" href="<?php echo ROOT_URL;?>candidates/register">Register as Candidate</a>
				          <a class="dropdown-item" href="<?php echo ROOT_URL;?>voters/register">Register as Voter</a>
				         
				        </div>
      				</li>
				   
					<li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle"  style="color: rgba(255, 255, 255, 0.99)" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Login
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				          <a class="dropdown-item" href="<?php echo ROOT_URL;?>candidates/login">Login as Candidate</a>
				          <a class="dropdown-item" href="<?php echo ROOT_URL;?>voters/login">Login as Voter</a>
				      
				        </div>
			      </li>
			  <?php endif;?>
			  </ul>
			    
			  </div>
			</div>
		</nav>
	
	</header>
	<div class="container-fluid" style="margin-bottom: 100px;">
		<div class="row">
			

		<div class="col-sm-12">
	<?php Messages::display() ;?>
	<?php require ($view);?>
	</div>

	
	</div>
	<script src="<?php echo ROOT_URL?>assets/jquery/jquery.min.js"></script>
	<script src="<?php echo ROOT_URL?>assets/js/popper.min.js"></script>
	<script src="<?php echo ROOT_URL?>assets/js/all.min.js"></script>
	<script src="<?php echo ROOT_URL?>assets/js/bootstrap.min.js"></script>
	
</body>
</html>