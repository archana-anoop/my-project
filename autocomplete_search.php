
<!DOCTYPE html>

<html>

<head>
  
<meta charset = "utf-8">

      <title>jQuery UI Tooltip functionality</title>
      <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

      <!-- Javascript -->
      <script>
         $(function() {
            $( "#tooltip-3" ).tooltip({
               content: "<strong>Enter your Nmae</strong>",
               track:true
            });
			$( "#send" ).tooltip({
               content: "<strong>send .........</strong>",
               track:true
            });
         });
		 
      </script>
	 
   </head>
   
   <body>
      <!-- HTML --> 
      <label for = "name">Name</label>
      <input id = "tooltip-3" title = "tooltip">
	  <button id="send" value="send" title = "tooltip">send</button>
	  
      
   </body>


</body>

</html>