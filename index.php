<?php 
require_once 'Database.php';

$dbh = new Database();

/*
 *	Database Connection to MySQL using PDO
 *
 */
/*
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
*/

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Jungsik's Blog</title>
		
		<link rel="stylesheet" href="stylesheets/core.css" type="text/css">
	</head>
<body>
	<div id="MainContainer">
		<div id="Header">
			<h1 id="Title"><a href=".">Jungsik's Blog</a></h1>
			<div id="Navigation">
				<ul>
					<li><a href=".">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>
		</div>
		<div id="MainContent">
			<div class="Entry">
				<?php
				
				
				/*
				$stmt = $dbh->prepare("SELECT blog_title, cat_id, blog_date, LEFT(blog_entry, 200) FROM blog_entries ORDER BY blog_date DESC");
				if ( $stmt->execute()) {
					while ( $row = $stmt->fetch() ) {
						echo "<h1><a href='#'>". $row['blog_title'] . "</a></h1>";
						echo "<div class='EntryContent'>";
						echo "<p>" . $row['LEFT(blog_entry, 200)'] . "</p>";
						echo "</div>";
						echo "<div class='EntryDetails'>";
				    	echo "<div class='Discussion'><a href='#'>Category ". $row['cat_id'] . "</a></div>";
						echo "<div class='Meta'>". $row['blog_date'] . "</div>";
						echo "</div>";
					}

					$table = 'blog_entries';
					$where = 'cat_id=3';

					$res = $db->select($table, $where);

					if($res->num_rows > 0) {
							while($row = $res->fetch_assoc()) {
								echo stripslashes($row['blog_entry']);	
							}
						}
						else {
							echo 'NO RESULTS';	
						}
				}*/
				$blog_entries_res = $dbh->select("blog_entries", '', 'blog_date DESC');
				//$row = $dbh->select("SELECT blog_title, cat_id, blog_date, LEFT(blog_entry, 200) FROM blog_entries ORDER BY blog_date DESC");	
				if($blog_entries_res->num_rows > 0) {
					while($rows = $blog_entries_res->fetch_assoc()) {
						echo "<h1><a href='#'>". stripslashes($rows['blog_title']) . "</a></h1>";
						echo "<div class='EntryContent'>";
						//echo "<p>" . stripslashes($row['LEFT(blog_entry, 200)']) . "</p>";
						echo "<p>" . substr(stripslashes($rows['blog_entry']), 0, 199 ) . "</p>";
						echo "</div>";
						echo "<div class='EntryDetails'>";
				    	echo "<div class='Discussion'><a href='#'>Category ". stripslashes($rows['cat_id']) . "</a></div>";
						echo "<div class='Meta'>". stripslashes($rows['blog_date']) . "</div>";
						echo "</div>";
						
					}
				}
				else {
					echo 'NO RESULTS';	
				}
				
				/*
				while ( $row ) {
						echo "<h1><a href='#'>". $row['blog_title'] . "</a></h1>";
						echo "<div class='EntryContent'>";
						echo "<p>" . $row['LEFT(blog_entry, 200)'] . "</p>";
						echo "</div>";
						echo "<div class='EntryDetails'>";
				    	echo "<div class='Discussion'><a href='#'>Category ". $row['cat_id'] . "</a></div>";
						echo "<div class='Meta'>". $row['blog_date'] . "</div>";
						echo "</div>";
					}*/
				?>
							
			</div>
		</div>
		<div id="SideContent">
			<ul>
				<li class="rPosts"></li>
				<?php
				$blog_entries_res = $dbh->select("blog_entries", '', 'blog_date DESC');
				//$row = $dbh->select("SELECT blog_title, cat_id, blog_date, LEFT(blog_entry, 200) FROM blog_entries ORDER BY blog_date DESC");	
				if($blog_entries_res->num_rows > 0) {
					while($rows = $blog_entries_res->fetch_assoc()) {
						echo "<h1><a href='#'>". stripslashes($rows['blog_title']) . "</a></h1>";											
					}
				}
				else {
					echo 'NO RESULTS';	
				}


				/*
				$stmt = $dbh->prepare("SELECT blog_title FROM blog_entries ORDER BY blog_date DESC");
				if ( $stmt->execute()) {
					while ( $rows = $stmt->fetch() ) {
						echo "<li><a href='#'>{$rows['blog_title']}</a></li>";		
					}
				}*/
				?>				
			</ul>
			<ul>
				<li class="Cats"></li>
				<?php
				$blog_entries_res = $dbh->select("categories", '', 'cat_id');
				if($blog_entries_res->num_rows > 0) {
					while($row = $blog_entries_res->fetch_assoc()) {
						
						echo "<li><a href='#'>" . stripslashes($row['cat_name']) . "</a></li>";
						
					}
				}
				else {
					echo 'NO RESULTS';	
				}
				/*
				$stmt = $dbh->prepare("SELECT cat_name FROM categories ORDER BY cat_id");
				if ( $stmt->execute()) {
					while ( $rows = $stmt->fetch() ) {
						echo "<li><a href='#'>{$rows['cat_name']}</a></li>";
					}
				}*/
				?>					
			</ul>
		</div>
		<div id="Footer">
			<ul>
				<li>&copy; WorldSkills Australia - Web Design</li>
				<li><a href="admin/">Admin Login</a></li>
			</ul>
		</div>
	</div>
</body>
</html>