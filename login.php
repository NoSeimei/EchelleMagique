<?php


include("connexion.php");

include("Class/Login.php");
include("Function/Function.php");

if (isset($_POST["name"]) && isset($_POST["pass"])) {

  $user = $_POST["name"];
  $pass = $_POST["pass"];

    
  try {
	  //on test la connexion du client
    $requete = $db->query("SELECT * FROM Login");
    $requete->setFetchMode(PDO::FETCH_CLASS, 'Login');
    $users = $requete->fetchAll();
    $pass = MD5($pass);
    foreach ($users as $theUser) {
		//si il se connecte on initialise la varible de session sinon on l'averti
      if ($theUser->getLogin() === $user && $theUser->getMdp() === $pass) {
		

        header("Location: accueil.php");
        break;
      } 
      
      else {

      echo  " y marche pas gars";
        
      }
    }
  } catch (Exception $ex) {

    echo $ex;
  }
  
  
}
?>