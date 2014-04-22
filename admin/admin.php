<?php 
	session_start();	
	if ( !(isset($_SESSION['username']) && isset($_SESSION['password'])) && !($_SESSION['username'] == 'admin' && $_SESSION['password'] == 'worldskills') ) {
	header("Location: ../index.php");	
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Page</title>
	<style>	
		body {
			font: 100%/1.4 sans-serif, georgia, aral;
			//width: 80%;
			margin: 0 auto;
			padding: 0; margin: 0;
		}
		li { list-style: none; }
		a { 
			//text-decoration: none; 
			color: #000;
			line-height: 2em;
		}
		header { position: relative; }
		header h1 {
			color: red;
			text-align: center;
		}
		header span { 
			position: absolute;
			top: 0.5em;
			right: 0.5em;
		}
		
	</style>
</head>
<body>
	<div id='wrapper'>
		<header>
			<h1>Administrator Page</h1>
			<span>You are logged in as <?php echo $_SESSION['username']; ?>&nbsp; <a href='logoff.php'>Log off</a></span>
		</header>
		<nav>
			<ul>
				<li><a href="createPage.php">Create new page</a></li>
				<li><a href="">Edit existing page</a></li>
				<li><a href="">Delete existing page</a></li>
				<li><a href="">Create a blog entry</a></li>
				<li><a href="">Display existing pages</a></li>
				<li><a href="">Display existing blog entries</a></li>
			</ul>
		</nav>
		<main>
			<div id='displying'>
				<?php 
					
				?>
			</div>
		</main>
		
		
	</div>
	
</body>

</html>


