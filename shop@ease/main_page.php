<!DOCTYPE html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script>
	function pageload(selected){
		 switch(selected)
		 {
		 	case 1 : $( "#load_tab" ).load( "Registration_form.php" );
		 			break;
		 	case 2 : $("load_tab").load("index.php");
		 			break;
		 	case 3 : $("#load_tab").load("index_left.php");
		 			break;
		 	case 4 : $("#load_tab").load("main_page.php");
		 			break;
		 	case 5: $("#load_tab").load("index_left.php");
		 			break;

		 }
	}
	</script>
	</head>
	
	<header class="jumbotron">
		<label class="col-sm-4 control-label " style="font-size:2em;">
			Shop@Ease <span class="glyphicon glyphicon-shopping-cart"></span>
		</label>
		<label class="col-sm-4 control-label col-sm-offset-4 " style="font-size:2em;">
			Shop Name <span class="glyphicon glyphicon-cutlery"></span>
		</label>
	</header>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<nav class="row">
						<ul class="nav nav-pills nav-stacked" >
							<li id="inventory" class="active" onclick="pageload(1);"><a href="#">Inventory</a></li>
							<li id="push_discount" onclick="pageload(2);"><a href="#">Push Discount</a></li>
							<li id="history" onclick="pageload(3);" ><a href="#">History</a></li>
							<li id="information" onclick="pageload(4);"><a href="#">Information</a></li>
							<li id="account" onclick="pageload(5);"><a href="#">Account</a></li>
							<li id="signout" onclick="pageload(6);"><a href="#">Signout</a></li>
						</ul>	
					</nav>
				</div>
				<div class='col-sm-9' id="load_tab">
				<?php include("inventory.php"); ?>
					
				</div>
			</div>

		</div>
	</body>
	
</html>