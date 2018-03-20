<?php
     $location = $_POST["web"];
     if($location)
     header( "Location:http://$location" );
?>
<html>
<body>
   <p>Write any website :</p>
   <form  method="POST">
   <input type="text" name="web">
   <input type="submit" value="GO" />
   </form>
</body>
</html>