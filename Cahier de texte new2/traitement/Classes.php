<?php
	/**
	 * 
	 */
	abstract class Utilisateurs
	{
		private $nom;
		private $email;
		private $login;
		private $mdp;
		private $statut;
		
		function __construct($nom, $email, $login, $mdp, $statut)
		{
			$this->nom = $nom;
			$this->email = $email;
			$this->login = $login;
			$this->mdp = $mdp;
			$this->statut = $statut;
		}

		public abstract function connexion($login, $mdp, $statut);
	}

	class Admin extends Utilisateurs
	{
		function __construct()
		{
			$this->nom = '';
			$this->email = '';
			$this->login = '';
			$this->mdp = '';
			$this->statut = '';
		}

		public function connexion($login, $mdp, $statut)
		{
			session_start();
			$servername = "localhost";
			$dbname = "cahier";
			$username = "root";

			try {

				$db = new PDO("mysql:host=$servername;dbname=$dbname",$username);
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$requete = "SELECT * FROM admin";
				$resultat = $db -> query($requete);
				$admin = $resultat -> fetchAll();

				foreach ($admin as $row){
					if ($row['LOGIN'] === $login && $row['MDP'] === $mdp ){
						$_SESSION['Login'] = $login;
						$_SESSION['Mdp'] = $mdp;
						$_SESSION['Statut'] = $statut;
						$_SESSION['Nom'] = $row['NOM'];
						$_SESSION['Id'] = $row['ID_ADMIN'];
						$_SESSION['Alert'] = "oui";
						echo "<script>
								window.location.assign('../presentation/index.php');
							 </script>";
							// header('location:../presentation/index.php');
							 // window.location.assign('../presentation/index.php');
					}	
				}
				
			} 
			catch (Exception $e) {
				echo "connexion echoue : ". $e->getMessage();
			}

			$db = NULL;
		}
	}

	class Departement extends Utilisateurs
	{
		private $nomDepart;

		function __construct()
		{
			$this->nomDepart = '';
			$this->nom = '';
			$this->email = '';
			$this->login = '';
			$this->mdp = '';
			$this->statut = '';
		}

		public function insertion($sql/*, $idAdmin, $nomDepart, $nomRespo, $email, $login, $mdp*/){
			$servername = 'localhost';
			$dbname = 'cahier';
            $username = 'root';
            $dbpass = '';

            $mysqli = new mysqli($servername, $username, $dbpass, $dbname);

            if($mysqli->connect_errno ) {
               printf("Connect failed: %s<br />", $mysqli→connect_error);
               exit();
            }
            printf('Connected successfully.<br />');

            // $sql = "INSERT INTO departement ".
            //    "(ID_ADMIN,NOM_DEPARTEMENT, NOM_RESPONSABLE, EMAIL, LOGIN, MDP) "."VALUES ".
            //    "('$idAdmin','$nomDepart','$nomRespo','$email','$login','$mdp')";
           
            if ($mysqli->query($sql)) {
               printf("Record inserted successfully.<br />");
               echo "<script>
						window.location.assign('../presentation/form-layout.php?form=oui');
					 </script>";
            }
            if ($mysqli->errno) {
               printf("Could not insert record into table: %s<br />", $mysqli->error);
            }
            $mysqli->close();
		}

		public function connexion($login, $mdp, $statut)
		{
			session_start();
			$servername = "localhost";
			$dbname = "cahier";
			$username = "root";

			try {

				$db = new PDO("mysql:host=$servername;dbname=$dbname",$username);
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$requete = "SELECT * FROM departement";
				$resultat = $db -> query($requete);
				$departement = $resultat -> fetchAll();

				foreach ($departement as $row){
					if ($row['LOGIN'] === $login && $row['MDP'] === $mdp ){
						$_SESSION['Login'] = $login;
						$_SESSION['Mdp'] = $mdp;
						$_SESSION['Statut'] = $statut;
						$_SESSION['Nom_de'] = $row['NOM_DEPARTEMENT'];
						$_SESSION['Nom'] = $row['NOM_RESPONSABLE'];
						$_SESSION['Alert'] = "oui";
						echo "<script>
								window.location.assign('../presentation/index.php')
							 </script>";
							// header('location:../presentation/index.php');
							 // window.location.assign('../presentation/index.php');
					}	
				}
				
			} 
			catch (Exception $e) {
				echo "connexion echoue : ". $e->getMessage();
			}

			$db = NULL;
		}
	}

	class Enseignant extends Utilisateurs
	{
		function __construct()
		{
			$this->nom = '';
			$this->email = '';
			$this->login = '';
			$this->mdp = '';
			$this->statut = '';
		}

		public function connexion($login, $mdp, $statut)
		{
			session_start();
			$servername = "localhost";
			$dbname = "cahier";
			$username = "root";

			try {

				$db = new PDO("mysql:host=$servername;dbname=$dbname",$username);
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$requete = "SELECT * FROM enseignant";
				$resultat = $db -> query($requete);
				$enseignant = $resultat -> fetchAll();

				foreach ($enseignant as $row){
					if ($row['LOGIN'] === $login && $row['MDP'] === $mdp ){
						$_SESSION['Login'] = $login;
						$_SESSION['Mdp'] = $mdp;
						$_SESSION['Statut'] = $statut;
						$_SESSION['Nom'] = $row['NOM'];
						$_SESSION['Alert'] = "oui";
						echo "<script>
								window.location.assign('../presentation/index.php')
							 </script>";
							// header('location:../presentation/index.php');
							 // window.location.assign('../presentation/index.php');
					}	
				}
				
			} 
			catch (Exception $e) {
				echo "connexion echoue : ". $e->getMessage();
			}

			$db = NULL;
		}
	}

	class Delegue extends Utilisateurs
	{
		private $departement;
		private $niveau;
		private $option;

		function __construct()
		{
			$this->departement = '';
			$this->niveau = '';
			$this->option = '';
			$this->nom = '';
			$this->email = '';
			$this->login = '';
			$this->mdp = '';
			$this->statut = '';
		}

		public function connexion($login, $mdp, $statut)
		{
			session_start();
			$servername = "localhost";
			$dbname = "cahier";
			$username = "root";

			try {

				$db = new PDO("mysql:host=$servername;dbname=$dbname",$username);
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$requete = "SELECT * FROM delegue";
				$resultat = $db -> query($requete);
				$delegue = $resultat -> fetchAll();

				foreach ($delegue as $row){
					if ($row['LOGIN'] === $login && $row['MDP'] === $mdp ){
						$_SESSION['Login'] = $login;
						$_SESSION['Mdp'] = $mdp;
						$_SESSION['Statut'] = $statut;
						$_SESSION['Nom'] = $row['NOM'];
						$_SESSION['Departement'] = $row['DEPARTEMENT'];
						$_SESSION['Niveau'] = $row['NIVEAU'];
						$_SESSION['Option'] = $row['OPTION'];
						$_SESSION['Alert'] = "oui";
						echo "<script>
								window.location.assign('../presentation/index.php')
							 </script>";
							// header('location:../presentation/index.php');
							 // window.location.assign('../presentation/index.php');
					}	
				}
				
			} 
			catch (Exception $e) {
				echo "connexion echoue : ". $e->getMessage();
			}

			$db = NULL;
		}
	}

?>