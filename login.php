<?php
session_start();
$_SESSION['logged-in'] = false;

ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);
$host = 'localhost';
$dbusername = 'project_user';
$dbpassword = 'password123';
$dbname = 'TAJ';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $dbusername, $dbpassword);
$regex_password = "/(?=^.{8,}$)(?=.*[a-z])(?=.*[A-Z])(?=.*\d).*$/";
echo "hello 1<br>";

echo "{$_POST['login_password']}<br>";
echo "{$_POST['login_email']}<br>";
if(isset($_POST["login_email"])) {
	$password = filter_var($_POST['login_password'], FILTER_SANITIZE_STRING);
	$email = filter_var($_POST['login_email'], FILTER_SANITIZE_EMAIL);
	$query = "SELECT * FROM Users WHERE Users.email = '{$email}'";
	$stmt = $conn->query($query);
	$results = $stmt->fetchALL(PDO::FETCH_ASSOC);
	
	if (sizeof($results) == 1) {
		if ($results[0]["password"] ==  $password) {
			$_SESSION['logged-in'] = true;
			$_SESSION['userid'] = $results[0]['id'];
			$_SESSION['useremail'] = $email;
			//print_r($_SESSION);
			if ($results[0]["role"] == "Admin") {
				echo "admin log in<br>";
			}
			else {
				echo "user log in<br>";
			}
		}
	}
}

$conn = null;

?>