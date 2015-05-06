<!DOCTYPE html>
<html>
<head>
   <title>Testing Files</title>
</head>

<body>

<?php

echo "In php...<br />";

$fh = fopen('file.txt', 'a');

fwrite($fh, "appending to file\n");
fclose($fh);

echo "File written...<br />";

$fh = fopen('file.txt', 'r');

while ($line = fgets($fh))
{
   echo "file content: $line<br />\n";
}

fclose($fh);

echo "done reading file<br />\n";

?>


</body>

</html>
