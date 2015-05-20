<!DOCTYPE html>
<html>

<body>

	<div>
		<h2>Here are the movies in the database</h2><br />

<?php

$actor = $_GET['actor'];
echo "Searching the database for: $actor...<br />";

$dbUser = 'moviePerson';
$dbPass = 'its a trap';
$dbHost = '127.0.0.1';
$dbName = 'movies';

try
{
	$db = new PDO("mysql:host=[$dbHost];dbname=$dbName", $dbUser, $dbPass);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$query = "SELECT * FROM movie m JOIN movieActor ma ON m.id = ma.movieId "
	 . "JOIN actor a ON a.id = ma.actorId WHERE name = :name";

	$statement = $db->prepare($query);
	$statement->bindValue(':name', $actor);

	$statement->execute();

	foreach ($statement->fetchAll() as $row)
	{
		echo $row['title'] . '<br />';
	}
}
catch (PDOEXCEPTION $ex)
{
	echo "Something bad happened. The details are: " . $ex;
}


?>

	</div>

</body>

</html>