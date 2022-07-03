<?php
	session_start();
	include 'Classes.php';

	if (isset($_POST['connexion'])) {

		extract($_POST);

		// session_start();
		// $servername = "localhost";
		// $dbname = "cahier";
		// $username = "root";

		// echo $_SESSION['Nom'];
		// echo $_SESSION['Mdp'];
		// echo $_SESSION['Statut'];

		if ($_POST['statut'] === 'Admin'){
			$Admin = new Admin();
			$Admin->connexion($_POST['login'], $_POST['mdp'], $_POST['statut']);
		}
		else if ($_POST['statut'] === 'Chef Departement'){
			$Depart = new Departement();
			$Depart->connexion($_POST['login'], $_POST['mdp'], $_POST['statut']);
		}
		else if ($_POST['statut'] === 'Enseignant'){
			$Enseignant = new Enseignant();
			$Enseignant->connexion($_POST['login'], $_POST['mdp'], $_POST['statut']);
		}
		else if ($_POST['statut'] === 'Delegue'){
			$Delegue = new Delegue();
			$Delegue->connexion($_POST['login'], $_POST['mdp'], $_POST['statut']);
		}
	}

	if (isset($_POST['insertion'])){
		extract($_POST);

		if ($_POST['departement'] === 'departement'){
			$Depart = new Departement();
			$id = $_SESSION['Id'];
			$sql = "INSERT INTO departement ".
               "(ID_ADMIN,NOM_DEPARTEMENT, NOM_RESPONSABLE, EMAIL, LOGIN, MDP) "."VALUES ".
               "('$id','$name_department','$name','$email','$login','$pwd')";
			$Depart->insertion($sql);
			// $Depart->insertion($sql, $_SESSION['Id'], $_POST['name_department'], $_POST['name'], $_POST['email'], $_POST['login'], $_POST['pwd']);
		}
	}


?>