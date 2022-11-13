<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Courriers Arrivées</title>
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
ul li .deconn i{
    color:#fff;
    
    z-index: 99;

}

nav ul li a i:hover{

color: cyan;
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
          <li><a href="logout.php" class="deconn"><i class="fas fa-power-off"></i></a></li>
          
     </ul>
     
     </nav>
     <div class="content">
        <div class="header">
            <h2>Courriers Arrivées</h2>
        </div>
        <table class="table-style">
               <tr>
                    <td>Réference</td>
                    <td>Objet</td>
                    <td>Type</td>
                    <td>Agent Destinataire</td>
                    <td>Expéditeur</td>
                    <td>Date d'arrivée</td>
                    
               </tr>
        </table>
     </div>
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>