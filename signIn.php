<?php
	 include('Class/Users.php');
	 include('Class/Login.php');
	 include('Function/Function.php');
	 include('connexion.php');

		try{ 
		  //on verifie que l'identifiant du client n'existe pas avent de l'inscrire
		  $ident = $_POST["login"];
		  $requete = $db->prepare("SELECT * FROM `Login` WHERE Login = :Identifiant");
		  $requete->execute(array('Identifiant' => $ident));
		  $requete->setFetchMode(PDO::FETCH_CLASS, 'Login');
		  $client = $requete->fetchAll();
		  
			if (empty($client) ) {
				//si il existe on rempli les l'objet client
				$login = new Login();
				$login->setLogin($_POST["login"]);
				$login->setMdp($_POST["pass"]);
				$request = $db->prepare("INSERT INTO Login (Login,Mdp)
				VALUES (:Login,MD5(:Mdp))");
				$request->execute(dismount($login));

				$requete2 = $db->query("SELECT * FROM `Login` ORDER BY IdLogin DESC");
		  		$requete2->setFetchMode(PDO::FETCH_CLASS, 'Login');
				$login = $requete2->fetch();


				$client = new Users();
				$client->setNom($_POST["name"]);
				$client->setPrenom($_POST["prenom"]);
				$client->setTelephone($_POST["phone"]);
				$client->setEmail($_POST["email"]);
				$client->setIdLogin($login->getIdLogin());
				
			   $request3 = $db->prepare("INSERT INTO utilisateurs (Nom,Prenom,Email,Telephone,IdLogin)
			   VALUES (:Nom,:Prenom,:Email,:Telephone,:IdLogin)");
			   $request3->execute(dismountWithout($client));
			   header("Location: index.html");
				
			}
			else
			{	
				echo  " Non ti mal";
			}
		
		 }

		catch(Exception $ex){
	  
			echo $ex;
	  
		}

        ?>