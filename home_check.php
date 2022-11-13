<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['objet']) && isset($_POST['type'])
    && isset($_POST['destinataire'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$objet = validate($_POST['objet']);
	$type = validate($_POST['type']);
	$destinataire = validate($_POST['destinataire']);

	$user_data = 'objet='. $objet. '&destinataire='. $destinataire;


	if (empty($objet)) {
		header("Location: home.php?error=Objet obligatoire&$user_data");
	    exit();
	}else if(empty($type)){
        header("Location: home.php?error=Type obligatoire&$user_data");
	    exit();
	}else if(empty($destinataire)){
        header("Location: home.php?error=Destinataire obligatoire&$user_data");
	    exit();
	}
	else{

           $sql2 = "INSERT INTO nouveau(objet, categorie, destinataire) VALUES('$objet', '$type', '$destinataire')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: home.php?success=Un nouveau courrier a etait envoyé");
	         exit();
           }else {
	           	header("Location: home.php?error=Erreur inconnue &$user_data");
		        exit();
           }
		}
	}
	else{
	header("Location: home.php");
	exit();
}