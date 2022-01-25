<?php 
    include('config.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $config['tytul']; ?></title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script type="text/javascript" src="style.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>
	<body>
		<header class="w3-container w3-indigo" >
			<h1><a href="index.php" style="text-decoration: none;"><?php echo $config['navbar']; ?></a></h1>
		</header>
		<div class="w3-container">
			<?php				
				if(empty($_GET['id'])) 
				{
					require_once('inc/zaladujexcel.php');
				}
				elseif($_GET['id']=='excel')
				{	
					require_once('inc/excel.php');
				}
				elseif($_GET['id']=='dodajsylabus')
				{	
					require_once('inc/dodajsyl.php');
				}
				elseif($_GET['id']=='dodajsylabusok')
				{	
					require_once('inc/dodajsylok.php');
				}
				elseif($_GET['id']=='usunsylabus')
				{	
					require_once('inc/usunsyl.php');
				} 
				else 
				{
					require_once('inc/error.php');
				}
			?>
		</div>
	</body>
</html> 