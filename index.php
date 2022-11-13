<!DOCTYPE html>
<html>
<head>
	<title>Gestion Courrier</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
        
            <img class="logo" src="img/logo.png" >
        
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form action="login.php" method="post">
			   
				<img src="img/avatar.svg">
				<h2 class="title">Bienvenue</h2>

				<?php if (isset($_GET['error'])) { ?>
     		       <p class="error"><?php echo $_GET['error']; ?></p>
     	        <?php } ?>

           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Nom d'utilisateur</h5>
           		   		<input type="text" class="input" name="uname">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Mot de passe</h5>
           		    	<input type="password" class="input" name="password">
            	   </div>
            	</div>
            	<a href="#">Mot de passe oublié?</a>
            	<input type="submit" class="btn" value="Se connecter">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html> 