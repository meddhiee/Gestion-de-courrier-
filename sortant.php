<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Courriers depart</title>
	<link rel="stylesheet" type="text/css" href="hom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <style>
     .table-style  {
    border-collapse: collapse;
    box-shadow: 0 5px 50px rgba(0,0,0,0.15);
    cursor: pointer;
    margin: 0px auto;
    border: 2px solid midnightblue;
}

thead tr {
    background-color: midnightblue;
    color: #fff;
    text-align: left;
}

th, td {
    padding: 10px 15px;
    text-align: center;
}

tbody tr, td, th {
    border: 1px solid #ddd;
}

tbody tr:nth-child(even){
    background-color: #f3f3f3;
}
    </style>
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
          <li><a href="logout.php">Deconnexion</a></li>
          
     </ul>
     
     </nav>
     <div class="content">
        <div class="header">
            <h2>Courriers Depart</h2>
        </div>
        <?php
       $conn= mysqli_connect('localhost','root','','test');
        

        $requete=" SELECT * FROM nouveau";
        $result=mysqli_query($conn,$requete);

        if(!$result){
          echo 'Erreur lors de l\'execution de la requete'.mysql_error;
        }else{
          ?>
          <table class="table-style">
               <tr>
                    <td>Réference</td>
                    <td>Objet</td>
                    <td>Type</td>
                    <td>Destinataire</td>
                    <td>Date d'envoi</td>
               </tr>
               <?php while($ligne = mysqli_fetch_array($result)){
                    ?>
                    <tr>
                         <td><?php echo $ligne['id'] ?></td>
                         <td><?php echo $ligne['objet'] ?></td>
                         <td><?php echo $ligne['categorie'] ?></td>
                         <td><?php echo $ligne['destinataire'] ?></td>
                         <td><?php echo date('d/m/Y'); ?></td>

                    </tr>
              <?php } ?>
          </table>
          <?php } ?>
          <?php } ?>        
</body>
</html>