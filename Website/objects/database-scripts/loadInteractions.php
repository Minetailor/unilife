<?php 

$sql = "SELECT * FROM interactions";

$pdo = new pdo("mysql:host=dbhost.cs.man.ac.uk;dbname=2021_comp10120_y12","v80015aa","12345678");

$pdo->setAttribute(PDO::ATTR_ERRMODE,
				   PDO::ERRMODE_WARNING);

$stmt = $pdo->prepare($sql);
$stmt->execute();

$stmt->setFetchMode(PDO::FETCH_ASSOC);

$rows = $stmt->fetchAll();

foreach ($rows as $row) {
	echo (implode ("|", $row) . "\n");
}

?>