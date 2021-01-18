<?php
	require_once ("modele.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Gestion des portes ouvertes de l'ESIEE</title>
</head>
<body>
	<CENTER>
		<h1>Gestion des portes ouvertes de l'ESIEE</h1>
		<br/><br/>

		<p>
			<a href="index.php?page=1">
				<img src="images/logo.jpg" height="100" width="100">
			<a href="index.php?page=2">
				<img src="images/JPO.png" height="100" width="100">
			<a href="index.php?page=3">
				<img src="images/candidat.jpg" height="100" width="100">
			<a href="index.php?page=4">
				<img src="images/inscription.png" height="100" width="100">
			</a>
		</p>

		<?php
		if (isset($_GET["page"]))
		{
			$page = $_GET["page"]; // on récupère la variable URL page
		}else{
			$page = 1; // la page home ESIEE
		}
		switch ($page) {
			case 1: require_once ("home.php"); break;
			case 2: require_once ("JPO.php"); break;
			case 3: require_once ("candidat.php"); break;
			case 4: require_once ("inscription.php"); break;
			default : require_once ("home.php"); break;
		}
		?>
	</CENTER>
</body>
</html>