<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Rechercher Courrier</title>
	<link rel="stylesheet" type="text/css" href="hom.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
     <div>
        <img class="logo" src="img/logo.png" >
        
     </div>
     <div class="bar">
          <h1>GESTION DES COURRIERS</h1>

     </div>
     <nav>
          <input type="checkbox" id="click">
          <label for="click" class="menu-btn">
          <i class="fas fa-bars"></i>
          </label>
     <ul>
          
          <li><a href="home.php">Nouveau Courrier</a></li>
          <li><a href="entrant.php">Courrier Entrant</a></li>
          <li><a href="sortant.php">Courrier Sortant</a></li>
          <li><a href="recherche.php">Rechercher Courrier</a></li>
          <li><a href="enregistrer.php">Enregistrer Courrier</a></li>
          <li><a href="logout.php" class="deconn"><i class="fas fa-power-off"></i></a></li>          
     </ul>
     
     </nav>
     <div class="content">
        <div class="header">
            <h2>Enregistrer Courrier Entrant</h2>
        </div>
         
        <form class="form" action="recherche_check.php" method="post">
        <div class="form-control">
                <label for="">Réf Bureau d'ordre : </label>
                <input type="text" name="reference">
                
              </div>
              <div class="form-control">
                <label for="">Objet : </label>
                <input type="text" name="objet">
                
              </div>
              <div class="form-control">
              <label>Type : </label>
                        
	    				<select name="type" >
	    					<option value="E-mail">E-mail</option>
	    					<option value="Telegram">Telegram</option>
	    				</select>
                
              </div>
              <div class="form-control">
                <label for="">Agent Destinataire : </label>
                <input type="text" name="agent">
                
              </div>
              <div class="form-control">
                <label for="">Expéditeur : </label>
                <input type="text" name="expediteur">
                
              </div>
            <button type="submit" name="Enregistrer" > Enregistrer </button>
        </form>
    </div>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>