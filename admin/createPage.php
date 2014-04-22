<?php 
	session_start();	
	if ( !(isset($_SESSION['username']) && isset($_SESSION['password'])) && !($_SESSION['username'] == 'admin' && $_SESSION['password'] == 'worldskills') ) {
		header("Location: ../index.php");	
		exit;
	} else {
		/*
		 *	Database Connection to MySQL using PDO
		 *
		 */
		try { // handling connection errors
			$dbh = new PDO('mysql:host=localhost;dbname=js_blog', 'admin', 'worldskills', array(PDO::ATTR_PERSISTENT => TRUE)); // persistent connection is on
		} catch ( PDOException $e ) {	
			die("Unable to connect: " . $e->getMessage() . "<br/>");
		}


		try {  
			$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			// start transaction to allow rollback if anything goes wrong
			//$dbh->beginTransaction();
			//$dbh->exec("insert into users (username, password) values ('notentered', 'jung')");	
			//$dbh->commit();
		  
		} catch (Exception $e) {
			$dbh->rollBack();
			echo "Failed: " . $e->getMessage();
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Create new page</title>
</head>
<body>

	<table>
		<tr>
			<td>Title: </td>
			<td><input id="title" name="title"></td>
		</tr>
	</table>

</body>
</html>