<?php
	session_start();
	/*
	//$err = null;
	$username = '';
	$password = '';
	//$_POST['username'] = null;
	//$_POST['password'] = null;
	*/
/*
 *	Database Connection to MySQL using PDO
 *
 */


if ( (isset($_SESSION['username']) && isset($_SESSION['password'])) && ($_SESSION['username'] == 'admin' && $_SESSION['password'] == 'worldskills') ) {
	header("Location: admin.php");	
	exit;
} else {	
	try { // handling connection errors
		$dbh = new PDO('mysql:host=localhost;dbname=js_blog', 'root', '', array(PDO::ATTR_PERSISTENT => TRUE)); // persistent connection is on
		
	} catch ( PDOException $e ) {	
		die("Unable to connect: " . $e->getMessage() . "<br/>");
	}
	
	echo "<form action='" . htmlspecialchars($_SERVER['PHP_SELF']) . "' method='POST' >"; // htmlspecialcharacters to prevent attackers from injecting HTML or JavaScript
	echo "<label for='username'>Username: </label>";
	echo "<input id='username' type='text' name='username' ><br>";
		
	echo "<label for='password'>Password: </label>";
	echo "<input id='password' type='password' name='password'><br>";
		
	echo "<input id='submit' name='submit' type='submit' value='Submit'>";
	echo "<input id='reset' type='reset' value='Reset'>";
	echo "</form>";
	
	
}
if ( isset($_POST['submit']) ) {
	$stmt = $dbh->prepare("SELECT username, password FROM users WHERE username='admin' ");		
		if ( $stmt->execute()) {
			$row = $stmt->fetch();
			if ( $row['username'] == $_POST['username'] && $row['password'] == $_POST['password'] ) {				
				$_SESSION['username'] = $_POST['username'];
				$_SESSION['password']  = $_POST['password'];
				header("Location:admin.php");
				
			} 
		}
}

		
	


?>
