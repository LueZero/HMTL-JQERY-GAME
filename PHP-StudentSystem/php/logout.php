<?php
session_start();
unset($_SESSION["Name"]); 
session_unset(); 
echo '<meta http-equiv=REFRESH CONTENT=0;url=http://10.11.186.21/>';
?>