<!DOCTYPE html>
<html>
<head>
	<title>Act2 3-23</title>
</head>
<body>

	<script language = "javascript" >

         document.writeln("<h2>JSON array object</h2>");

         var os = { "os1" : [ 
            { "platform"  : "Mac", "version"  : "Puma", "machine" : "Desktop" }],  
				
            "os2"  : [
               { "platform"  : "Windows", "version"  : "Windows 8", "machine" : "Desktop" }],

            "os3"  : [
               { "platform"  : "Linux", "version"  : "Fedora", "machine" : "Desktop" }]     
         }

    var i = 0
         document.writeln("<table border = '2'><tr>");
			
         for(i = 0;i<os.os1.length;i++){	
            document.writeln("<td>");
            document.writeln("<table border = '1' width = 100 >");
            document.writeln("<tr><td><b>Platform</b></td><td width = 50>" + os.os1[i].platform+"</td></tr>");
            document.writeln("<tr><td><b>Version</b></td><td width = 50>" + os.os1[i].version+"</td></tr>");
            document.writeln("<tr><td><b>Machine</b></td><td width = 50>" + os.os1[i].machine +"</td></tr>");
            document.writeln("</table>");
            document.writeln("</td>");
         }

         for(i = 0;i<os.os2.length;i++){
            document.writeln("<td>");
            document.writeln("<table border = '1' width = 100 >");
            document.writeln("<tr><td><b>Platform</b></td><td width = 50>" + os.os2[i].platform+"</td></tr>");
            document.writeln("<tr><td><b>Version</b></td><td width = 50>" + os.os2[i].version+"</td></tr>");
            document.writeln("<tr><td><b>Machine</b></td><td width = 50>" + os.os2[i].machine+"</td></tr>");
            document.writeln("</table>");
            document.writeln("</td>");
         }

         for(i = 0;i<os.os3.length;i++){
            document.writeln("<td>");
            document.writeln("<table border = '1' width = 100 >");
            document.writeln("<tr><td><b>Platform</b></td><td width = 50>" + os.os3[i].platform+"</td></tr>");
            document.writeln("<tr><td><b>Version</b></td><td width = 50>" + os.os3[i].version+"</td></tr>");
            document.writeln("<tr><td><b>Machine</b></td><td width = 50>" + os.os3[i].machine+"</td></tr>");
            document.writeln("</table>");
            document.writeln("</td>");
         }
			
         document.writeln("</tr></table>");

     </script>


</body>
</html>