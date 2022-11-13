<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
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
            <h2>Nouveau Courrier</h2>
        </div>
         
        <form class="form" action="home_check.php" method="post">

        <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>


            <div class="form-control ">
                <label for="">Objet : </label>
                <?php if (isset($_GET['objet'])) { ?>
               <input type="text" 
                      name="objet" 
                      placeholder="Objet"
                      value="<?php echo $_GET['objet']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="objet" 
                      placeholder="Objet"><br>
          <?php }?>
            </div>
            <div class="details">
            <label>Type : </label>
                        
	    				<select name="type" >
	    					<option value="E-mail">E-mail</option>
	    					<option value="Telegram">Telegram</option>
	    				</select>
	    				
            </div>

            <div class="form-control">
                <label for="">Détails : </label>
                <input type="text" id="details" name="details">
                
            </div>
            <div class="details">
                <label for="">Document scanné : </label>
                <input type="file"  >
                
            </div>
            <div class="form-control">
                <label for="">Destinataire : </label>
                <?php if (isset($_GET['destinataire'])) { ?>
                <input type="text"  name="destinataire"value="<?php echo $_GET['destinataire']; ?>">
                <br>
          <?php }else{ ?>
               <input type="text" 
                      name="destinataire" 
                      placeholder="Destinataire"><br>
          <?php }?>
            </div>
            <button type="submit" name="valider" > Envoyer </button>
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