<?php
	session_start();
	require_once 'dbconfig.php';

	if(isset($_POST['btn-login']))
	{
		//$user_name = $_POST['user_name'];
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		
		$password = md5($password);
		
		try
		{	
		
			$stmt = $db_con->prepare("SELECT * FROM admin WHERE username=:user");
			$stmt->execute(array(":user"=>$username));
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			$count = $stmt->rowCount();
			
			if($row['password']==$password){
				
				echo "ok"; // log in
				$_SESSION['user_session'] = $row['user_id'];
			}
			else{
				
				echo "Username or Password does not exist."; // wrong details 
			}
				
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>