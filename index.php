<?php
session_start();

?>

<!DOCTYPE html>
<html>

<body>
<div>

   This is a PHP file.<br />

<?php

$visits = 0;
$countKey = 'pageCount';

if (isset($_SESSION[$countKey]))
{
	$visits = $_SESSION[$countKey];
}

$visits++;

$_SESSION[$countKey] = $visits;

echo "You have been here $visits times<br />";

/*
$visits = 0;

if (isset($_COOKIE["count"]))
{
	$visits = $_COOKIE["count"];
}

$visits++;

echo "You have visited the page $visits time(s).<br />";
setcookie("count", $visits, time() + (1 * 24 * 60 * 60));
*/



?>



</div>


</body>

</html>
