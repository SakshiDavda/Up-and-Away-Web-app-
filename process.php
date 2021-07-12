<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){
				$email     = $_POST['email'];
				$password  = $_POST['password'];

				$sql = "INSERT INTO users (email, password ) VALUES(?, ?)";
				$stmtinsert = $db->prepare($sql);
				$result = $stmtinsert->execute([$email, $password]);
				if($result){
					echo'Signed Up Successfully.';
				}else{
					echo 'error.';
				}
}else{
	echo 'No data';
}