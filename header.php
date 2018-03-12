<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>'Aggro' the News Aggregator</title>
    <style>
      @import url('https://fonts.googleapis.com/css?family=Bungee|Hanalei+Fill|Montserrat:700,800i');
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel='stylesheet' href='main.css' />
    <link rel="stylesheet" href="animate.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/a33d9f9d5e.js"></script>
		<script type='application/javascript' src='javascript.js'></script>
		<script src="viewportchecker.js"></script>

  </head>

  <body>

		<nav class="navbar navbar-default">
		  <div class="container-fluid">

		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="index.php">Aggro</a>
		    </div>


		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="#"><?php
							if (isset($_SESSION['u_id'])) {
								echo "you are logged in!";
							}
						?><span class="sr-only">(current)</span></a></li>
		        <li><a href="signup.php">SIGN UP</a></li>

		      </ul>

									<?php
										if (isset($_SESSION['u_id'])) {
											echo '
											<form action="includes/logout.inc.php" method="POST">
												<button class="logbutton" type="submit" name="submit">Logout</button>
											</form>
											';
										} else{
											echo '
											<form action="includes/login.inc.php" method="POST" id="signin" class="navbar-form navbar-right" role="form">
								                        <div class="input-group">
								                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								                            <input id="email" type="text" class="form-control" name="uid" value="" placeholder="username/email">
								                        </div>

								                        <div class="input-group">
								                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								                            <input id="password" type="password" class="form-control" name="pwd" value="" placeholder="password">
								                        </div>

								                        <button type="submit" name="submit" class="btn btn-primary">Login</button>
								                   </form>
											';
										}
									?>

		    </div>
		  </div>
		</nav>


<header>







</header>
