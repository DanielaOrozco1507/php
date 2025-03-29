<?php
//start the session
session_start();

?>
<!DOCTYPE html>
<html>
 <body>

<?php
//set sessin variables
$_SESSION["favcolor"]= "green";
$_SESSION["favanimal"]= "cat";
echo "ssesion variables are set.";
?>
</body>   
</html>