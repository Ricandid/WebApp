<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<?php 

	$arr = array(
		array ('Subject' => 'Web App', 'Subjectcode' => 'IT 341', 'CatalogueNumber' => 1200, 'Grade' => 'B' ),
		array ('Subject' => 'Trigonometry', 'Subjectcode' => 'MATH 111', 'CatalogueNumber' => 2536, 'Grade' => 'B' ),
		array ('Subject' => 'Algebra', 'Subjectcode' => 'MATH 101', 'CatalogueNumber' => 5864, 'Grade' => 'B' ),
		array ('Subject' => 'Cisco', 'Subjectcode' => 'CS 352', 'CatalogueNumber' => 1285, 'Grade' => 'B' ),
		array ('Subject' => 'Assembly', 'Subjectcode' => 'CS 311', 'CatalogueNumber' => 4596, 'Grade' => 'B' ),
		array ('Subject' => 'Art Appreciation', 'Subjectcode' => 'HUMA 111', 'CatalogueNumber' => 7592, 'Grade' => 'B' ),
		array ('Subject' => 'Philosophy', 'Subjectcode' => 'HUMA 101', 'CatalogueNumber' => 1035, 'Grade' => 'B' ),
		array ('Subject' => 'Chemistry', 'Subjectcode' => 'NCSI 101', 'CatalogueNumber' => 7594, 'Grade' => 'B' )
		);


 ?>
<script type="text/javascript">


	var arr = JSON.parse( '<?php echo json_encode($arr); ?>' );
	arr.push({'Subject' : 'Statistics', 'Subjectcode' : 'MATH 200', 'CatalogueNumber' : 4103, 'Grade' : 'B'});
	arr.push({'Subject' : 'Euthenics1', 'Subjectcode' : 'ETHNS 101', 'CatalogueNumber' : 7625, 'Grade' : 'B'});
	arr.push({'Subject' : 'Multimedia', 'Subjectcode' : 'IT 344', 'CatalogueNumber' : 0148, 'Grade' : 'B'});
	document.writeln("<table border = '2'><tr>");
		
		for(i = 0;i<arr.length;i++){	
	            document.writeln("<td>");
	            document.writeln("<table border = '1' width = 100 >");
	            document.writeln("<tr><td><b>Subject</b></td><td width = 50>" + arr[i].Subject+"</td></tr>");
	            document.writeln("<tr><td><b>Subject Code</b></td><td width = 50>" + arr[i].Subjectcode+"</td></tr>");
	            document.writeln("<tr><td><b>Catalogue Number</b></td><td width = 50>" + arr[i].CatalogueNumber +"</td></tr>");
	            document.writeln("<tr><td><b>Grade</b></td><td width = 50>" + arr[i].Grade +"</td></tr>");
	            document.writeln("</table>");
	            document.writeln("</td>");
	         }

	document.writeln("</tr>");

</script>
 <body>

</body>
</html>