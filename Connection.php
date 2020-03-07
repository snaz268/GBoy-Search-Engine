<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$var1 = $_POST['text']
		$output=shell_exec('/SemesterProjectDSA/python Searching.py'.'$var1');
    	echo $output;
	}	
?>