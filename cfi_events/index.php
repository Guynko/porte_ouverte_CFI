<!DOCTYPE html>
<html>
<head>
	<title>Gestion des portes ouvertes du cfi</title>
</head>
<body>
	<center>
		<h1> Gestion des portes ouvertes du cfi</h1>
		<br><br>

		<p>
			<a href="index.php?page=1">
				<img src="image/logo.jpg" height="100" width="100"></a>
			<a href="index.php?page=1">
				<img src="image/portes.png" height="100" width="100"></a>
			<a href="index.php?page=1">
				<img src="image/candidat.jpg" height="100" width="100"></a>
			<a href="index.php?page=1">
				<img src="image/inscription.png" height="100" width="100"></a>
		</p>
		 <?php
            if (isset($_GET["page"]))
            {
                $page = $_GET["page"]; //on récupere la variable URL page
            } else {
                $page = 1; // la page home cfi
		    }
		    switch ($page) {
                case 1 : require_once("home.php"); break;
                case 2 : require_once("portes.php"); break;
                case 3 : require_once("candidat.php"); break;
                case 4 : require_once("inscription.php"); break;
                default :require_once("home.php"); break;
		    }
		    ?>
	</center>

</body>
</html>