<!DOCTYPE html>
<html>
<body>

<?php
date_default_timezone_set('Asia/Calcutta');
//$t=date_default_timezone_get();
$date = date('m/d/Y h:i:s a', time());
echo($date . "<br>");
//echo(date("Y-m-d H:i:s",$t));
?>

</body>
</html>