<html>
<head>
	<title></title>
	<style>
		.blackbg{ 
			background-color: black;
		}
		.redbg{ 
			background-color: red;
		}
	</style>
</head>
<body id="image">
	<script type="text/javascript">
		var bgpro = prompt("Enter a color for your background");

		switch(bgpro.toLowerCase()){
			case "black":
			var db = "blackbg";
			document.getElementById("image").setAttribute("class", db);
			break;

			case "red":
			var db = "redbg";
			document.getElementById("image").setAttribute("class", db);
			break;

			default:
			alert("No background color selected.");
		}
	</script>
</body>
</html>