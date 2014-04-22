<?php 
require_once 'Database.php';

$dbh = new Database();
$blog_entries_res = $dbh->select("blog_entries", '', 'blog_date DESC');
$pageInfo = $dbh->select("pages", "page_title='Contact'");


if($pageInfo->num_rows > 0) {
	while($row = $pageInfo->fetch_assoc()) {
		$title = stripslashes($row['page_title']);
		$content = stripslashes($row['page_content']);		
	}
}
else {
	echo 'NO RESULTS';
	exit;	
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title><?php echo $title; ?></title>
		
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
			
			<?php echo $content; ?>

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