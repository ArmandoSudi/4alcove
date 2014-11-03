<!DOCTYPE html>
<head>
	<script type="text/javascript">
		function validateform1(){
			var name = document.forms["login"]["text"].value;
			if( name == "armando"){
				alert("you are not armando, sorry buddy :(");
				return false;
			}
		}
		function validateform2() {
    		var email = document.forms["login"]["text"].value;
    		var atpos = email.indexOf("@");
    		var dotpos = x.lastIndexOf(".");
    		if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        		alert("Not a valid e-mail address");
        	return false;
    	}
}
	</script>
</head>
<body>


<?php
	$name = $_POST['text'];
	echo "you entered $name";
?>

</body>