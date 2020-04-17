<!DOCTYPE html>
<html> 
        <head> 
		<meta charset="UTF-8">
        </head> 
		<body>
		<?php
    $ip = file_get_contents('https://ip.seeip.org');
    echo "My public IP address is: " . $ip;
?>
</body>
    </html>