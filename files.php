<!DOCTYPE html>
<html>
	<head>
		<title>Testing files</title>
	</head>

	<body>
		<div>

<?php

echo "This is from PHP...<br />";

$file = fopen("myFile.txt", "r");

if ($file)
{
	echo "The file is open<br />";

	while ($line = fgets($file))
	{
		echo "This is from the file: $line<br />\n";
	}

}

// let's create the file
$file = fopen("myFile.txt", "a");

if ($file)
{	
	fwrite($file, "Hello World\n");
	fclose($file);
}
else
{
	die("File did not exist and could not be created.");
}



echo "Doing the rest of the things on the page...";

?>


		</div>

	</body>

</html>