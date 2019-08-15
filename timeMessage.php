<?php
     
	date_default_timezone_set('America/Indiana/Indianapolis');
    $time = date("H");
	if ($time >= "6" && $time < "12") {
        echo "Good morning";
    } 
	elseif ($time >= "12" && $time < "18") {
        echo "Good afternoon";
    } else
    	echo "Good evening";
     
    ?>
