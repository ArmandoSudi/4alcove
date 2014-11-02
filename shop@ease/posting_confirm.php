<!DOCTYPE html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>

	<header class="jumbotron">
		<form class="form-horizontal" role="form" action="main_page.php" method="POST">
			<div class="form-group">
				<label class="col-sm-4 control-label " style="font-size:2em;">
					Shop@Ease <span class="glyphicon glyphicon-shopping-cart"></span>
				</label>
				<div class="col-sm-3">
					<input type="text" placeholder="User Name" class="form-control input-sm col-sm-3"id="signin_user_name" name="signin_user_name"/>
				</div>
				<div class="col-sm-3">
					<input type="password" placeholder="Password" class="form-control input-sm col-sm-3" id="signin_password" name="signin_password" />
				</div>
				<div class="col-sm-2">
					<button type="submit" class="btn btn-warning btn-xs col-sm-3 form-control"> Sign In </button>
				</div>
			</div>
		</form>
	</header>

	<body>
		<div class="container">
			<blockquote><h3> You have successfully registered.<br/> A confirmation Mail has been sent to
		<?php 
		print($_POST["email"]); ?> <br/>
		with confirmation link.</h3></blockquote>

		</div>
	</body>

</html>