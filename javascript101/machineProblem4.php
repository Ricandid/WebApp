<!DOCTYPE html>
<html>
<head><title>Activity 8</title>
<script language="javascript" type="text/javascript">
<!--
	function getGrade(){
		var retVal=prompt("Please enter your grade: ","your grade")

		if (retVal>=50 && retVal<=100) {
			document.write("PASSED.")
		}
		else if (retVal<=49 && retVal>=0){
			document.write("FAILED.")
		}
		else if (retVal>=101){
			document.write("INVALID INPUT.")
		}
		setTimeout(function(){
			window.location.reload(1);
		}, 1000);
	}
		
-->
</script>
</head>
<body>
<form>
	<input type="button" value="Click Me" onclick="getGrade()"/>
</form>
</body>
</html>