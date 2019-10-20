<?php

	$myfile = fopen('file.txt', 'w');
	fwrite($file,$_POST["name"]);
	fclose($file);
	echo "done";

?>