<!DOCTYPE html>
<html>
<head><title>Activity 8</title>
<script language="javascript" type="text/javascript">
<!--
	function countdown(){
		var retValtime=prompt("Enter a number: ", "your number in milliseconds")
		for (var i = retValtime;i >= 0; i--) {
		document.write("<br>" +i);
		}
		setTimeout("location.reload(true);", retValtime);
		function timer(){
		var retVal=prompt("Enter a number: ", "your number in milliseconds")
		}
	}
-->
</script>
</head>
<body>
<form>
	<input type="button" value="Start countdown" onclick="countdown()"/><br>
	<input type="button" value="Timer Start" onclick="timer()"/>
</form>
</body>
</html>