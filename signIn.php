<?php
	 
		try{ 
		  //on verifie que l'identifiant du client n'existe pas avent de l'inscrire
		  $ident = $_POST["ident"];
		  $requete = $db->prepare("SELECT * FROM `clients` WHERE Identifiant = :Identifiant");
		  $request3->execute(array('Identifiant' => $ident));
		  $requete->setFetchMode(PDO::FETCH_CLASS, 'Clients');
		  $client = $requete->fetchAll();
		  
		  
			  
			if (empty($client) ) {
				//si il existe on rempli les l'objet client
				$client = new Clients();
				$client->setNom($_POST["nom"]);
				$client->setPrenom($_POST["prenom"]);
				$client->setTelephone($_POST["phone"]);
				$client->setEmail($_POST["email"]);
				$client->setIdentifiant($_POST["ident"]);
				$client->setPassword($_POST["pass"]);
				$_SESSION['nom']="";
				$_SESSION['prenom']="";
				$_SESSION['tel']="";
				$_SESSION['mail']="";
				
			   $request = $db->prepare("INSERT INTO clients (Nom,Prenom,Telephone,Email,Identifiant,Password)
			   VALUES (:Nom,:Prenom,:Telephone,:Email,:Identifiant,MD5(:Password))");
			   $request->execute(dismountC($client));
			   $_SESSION['ident']=$client->getIdentifiant();
			   echo  " <script>
				window.onload = function() 
				  {
					validation();
				  }; 
			    </script>";
				
			}
			else
			//sinon on lui dis que sont identifiant est incorect et on rempli les champs avec les info remplis auparavant
			//afin qu'il n'ai pas à le refaire
			{	
				$_SESSION['nom']=$_POST["nom"];
				$_SESSION['prenom']=$_POST["prenom"];
				$_SESSION['tel']=$_POST["phone"];
				$_SESSION['mail']=$_POST["email"];

				echo  " <script>
				window.onload = function() 
				  {
					mafonction2();
				  }; 
			    </script>";
				
			
			}

			//////////////////
		
		 }
		 
		
		catch(Exception $ex){
	  
			echo $ex;
	  
		}

        ?>