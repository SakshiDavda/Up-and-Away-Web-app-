<?php

require_once('config.php');

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = ? AND password = ? LIMIT 1";
$stmtselect  = $db->prepare($sql);
$result = $stmtselect->execute([$email, $password]);

if($result){
	$user = $stmtselect->fetch(PDO::FETCH_ASSOC);
	if($stmtselect->rowCount() > 0){
		echo '1';
	}else{
		echo 'There is no user.';		
	}
}else{
	echo 'There were errors while connecting to database.';
}