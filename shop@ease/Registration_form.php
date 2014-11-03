<!DOCTYPE html>

	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-wiwdth, initial-scale-1.0">
	<link rel='stylesheet' type="text/css" href="css/bootstrap.min.css"/>

	</head>

	<body>
		
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1"> 
					<h2>New To Shop At Ease? <br/><small> Sign Up.</small></h2>
				</div>
			</div>

			<form class="form-horizontal" role="form" action="posting_confirm.php" method="POST">
				<div class="form-group">
					<div class="col-xs-10 col-xs-offset-1">
						<input type="text" placeholder="UserName" class="form-control" id="user_name" name="user_name" />
					</div>
				</div>

				<div class="form-group">
					<div class="col-xs-10 col-xs-offset-1">
						<input type="password" placeholder="Password" class="form-control" id="password" name="password" />
					</div>
				</div>	

				<div class="form-group">
					<div class="col-xs-10 col-xs-offset-1">
						<input type="password" placeholder="Confirm Password" class="form-control" id="confirm_password" name="confirm_password" />
					</div>
				</div>	


				<div class="form-group">
					<div class="col-xs-10 col-xs-offset-1">
						<input type="Text" placeholder="Email" class="form-control" id="email" name="email" />
					</div>
				</div>	

				<div class="form-group">
					<label  class="checkbox-inline col-xs-3 col-xs-offset-1"> Shop
						<input type="radio" name="user_description" value="shopkeeper"/> 
					</label>

					<label class="checkbox-inline">Customer
						<input type="radio" name="user_description" value="customer"/>
					</label>
				</div>

				<div class="form-group">
					<div class="col-xs-10 col-xs-offset-1">
						<input type="text" placeholder="Phone Number" class="form-control" id="phone_number" name="phone_number" />
					</div>
				</div>

				<button type="submit" class="btn btn-warning btn-lg col-xs-offset-1"> Sign Up </button>

			</form>
		
	</body>


</html>