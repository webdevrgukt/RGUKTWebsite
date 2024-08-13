<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
	<head profile="http://gmpg.org/xfn/11">
		<meta charset="UTF-8" />
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<meta http-equiv="imagetoolbar" content="no" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
		<title>Department of Computer Science & Engineering</title>
		<!-- -------------ATTACHMENTS-------------- -->
		<!-- <link rel="stylesheet" href="assets/css/minified.style.css" /> -->
		<link rel="stylesheet" href="assets/css/style.css" />
		<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
		<script src="assets/js/jquery-3.7.1.slim.min.js"></script>
	</head>
	<body>
		<?php include "includes/headerNav.php"?>
		<?php 
			if(isset($_GET["page"])){
				if($_GET["page"]=="team"){
					include "pages/websiteTeam.php";
				}
			}else{
				include "pages/main.php";
			}
			// $route = explode("/",$_SERVER['REQUEST_URI']);
			// if($route[3]==''){
			// 	include "pages/main.php";
			// }else{
			// 	include "pages/404.php";
			// }
		?>
		<!-- <script>
			var route = window.location.pathname;
			route = route.trim().split("/");
			console.log(route);
			if (route[3]==''){
				<?php //include "pages/main.php"?>
			}else{
				alert("page not found")
			} -->
		</script>
		<?php include "includes/footer.php"; ?>
	</body>
</html>
