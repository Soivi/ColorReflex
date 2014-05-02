<?php	
try {
	$db = new PDO('mysql:host=localhost;dbname=testdb;charset=utf8', 'username', 'password');
	
	// Get all highscores
	if($_GET['highscorelist'] == 'All') {		
		$stmt = $db->prepare("SELECT name, time FROM highscores ORDER BY time");
		$stmt->execute();
		$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$db = null;
		
		print $_GET['callback']. '(' . json_encode($rows) . ')';
	}
	
	// Add new highscore
	else if($_GET['highscorelist'] == 'Insert') {
		$name = $_GET['name'];
		$time = $_GET['time'];
		
		$stmt = $db->prepare("INSERT INTO highscores (name, time) VALUES (?, ?)");
		$stmt->execute(array($name, $time));
		$db = null;
	}
} catch (PDOException $e) {
    die();
}
?>