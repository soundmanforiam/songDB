<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$title = $_POST['title'];
$key = $_POST['key'];
$meter = $_POST['meter'];
$author = $_POST['author'];
$copyright = $_POST['copyright'];
$lyrics = $_POST['lyrics'];

$servername = "mysql.morethanredemptionmusic.com";
$username = "worshipminister";
$password = "MTRMu51c";
$db = "mtrsongdb";

//$conn = new mysqli($servername, $username, $password, $db);
$conn = mysqli_connect($servername, $username, $password, $db);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO tblSong (songTitle, songKey, songMeter, songAuthor, songCopyrightInformation, songLyrics) VALUES($title, $key, $meter, $author, $copyright, $lyrics)";

if ($conn->query($sql) === TRUE) {
	echo "New Record created Successfully!";
	echo "ADDED: ";
	echo $title;
	echo "<br>";
	echo "ADDED: ";
	echo $author;
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>