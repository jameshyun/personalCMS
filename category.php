<?php 
require_once 'Database.php';

$dbh = new Database();

$catID = $_GET['id'];


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
					<li><a href="about.php">About</a></li>
					<li><a href="contact.php">Contact</a></li>					
				</ul>
			</div>
		</div>
		<div id="MainContent">
			<div class="Entry">
				<?php
				
				
				$blog_entries_res = $dbh->select("blog_entries", "cat_id = {$catID}", 'blog_date DESC');
				
				if($blog_entries_res->num_rows > 0) {
					while($rows = $blog_entries_res->fetch_assoc()) {
						echo "<h1><a href='#'>". stripslashes($rows['blog_title']) . "</a></h1>";
						echo "<div class='EntryContent'>";				
						echo "<p>" . stripslashes($rows['blog_entry']) . "</p>";
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
				
				
				?>
							
			</div>
		</div>
		<div id="SideContent">
			<ul>
				<li class="rPosts"></li>
				<?php
				$blog_entries_res = $dbh->select("blog_entries", '', 'blog_date DESC');
				
				if($blog_entries_res->num_rows > 0) {
					while($rows = $blog_entries_res->fetch_assoc()) {
						echo "<h1><a href='#'>". stripslashes($rows['blog_title']) . "</a></h1>";											
					}
				}
				else {
					echo 'NO RESULTS';	
				}


				
				?>				
			</ul>
			<ul>
				<li class="Cats"></li>
				<?php
				$blog_entries_res = $dbh->select("categories", '', 'cat_id');
				if($blog_entries_res->num_rows > 0) {
					while($row = $blog_entries_res->fetch_assoc()) {
						
						echo "<li><a href=category.php?id=" . $row['cat_id'] . ">" . stripslashes($row['cat_name']) . "</a></li>";
						
					}
				}
				else {
					echo 'NO RESULTS';	
				}
				
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