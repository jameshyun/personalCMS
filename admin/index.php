<?php
session_start();

require_once '../Database.php';

$dbh = new Database();


// send user to admin page if the seesion is already existing
if ( (isset($_SESSION['username']) && isset($_SESSION['password'])) && ($_SESSION['username'] == 'admin' && $_SESSION['password'] == 'worldskills') ) {
	header("Location: admin.php");	
	exit;
} else {	// or display login form
	
	
	echo "<form action='" . htmlspecialchars($_SERVER['PHP_SELF']) . "' method='POST' >"; // htmlspecialcharacters to prevent attackers from injecting HTML or JavaScript
	echo "<label for='username'>Username: </label>";
	echo "<input id='username' type='text' name='username' ><br>";
		
	echo "<label for='password'>Password: </label>";
	echo "<input id='password' type='password' name='password'><br>";
		
	echo "<input id='submit' name='submit' type='submit' value='Submit'>";
	echo "<input id='reset' type='reset' value='Reset'>";
	echo "</form>";
	
	
}

// check username and password when user click login button
if ( isset($_POST['submit']) ) {
	$sql = "SELECT username, password FROM users WHERE username='admin'";
	$auth = $dbh->myquery($sql);
	if($auth->num_rows > 0) {
		while($row = $auth->fetch_assoc()) {
			if ( $row['username'] == $_POST['username'] && $row['password'] == $_POST['password'] ) {				
				$_SESSION['username'] = $_POST['username'];
				$_SESSION['password']  = $_POST['password'];
				header("Location:admin.php");
				
			} 
			
		}
	}
	
	
}

		
	


?>
