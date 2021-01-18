<?php
	class Modele
	{
		private static $pdo; // php data object : variable pour se connecter à la Base De Donnée
		public static function connexion()
		{
			try
			{
				Modele::$pdo = new PDO ("mysql:host=localhost:8889;dbname=esieeevent","root","root");
			}
			catch (PDOException $pdo)
			{
				echo "Erreur de connexion à la base de donnée";
			}
		}
		public static function selectAllPortes()
		{
			$requete = "select * from porte";
			Modele::connexion();
			$select = Modele::$pdo->prepare ($requete);
			$select->execute();
			$resultats = $select->fetchAll();
			return $resultats;
		}
	}
?>