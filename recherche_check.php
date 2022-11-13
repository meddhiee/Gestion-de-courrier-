<!DOCTYPE html>
<html>
<head>
	<title>Courriers depart</title>
	
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
<?php 
session_start(); 
include "db_conn.php";

$res1="SELECT * FROM nouveau where
id like '%".$_POST["reference"]."%'";
$result1=mysqli_query($conn,$res1);

$res2="SELECT * FROM nouveau where objet like'%".$_POST["objet"]."%'";
$result2=mysqli_query($conn,$res2);

$res3="SELECT * FROM nouveau where
categorie like '%".$_POST["type"]."%'";
$result3=mysqli_query($conn,$res3);

if($result1 || $result2 ){
    $nb1= mysqli_num_rows($result1);
    $nb2= mysqli_num_rows($result2);
    if($nb2>0 ){
        ?>
          <table class="table-style">
               <tr>
                    <td>Réference</td>
                    <td>Objet</td>
                    <td>Type</td>
                    <td>Destinataire</td>
                    
               </tr>
               <?php while($ligne = mysqli_fetch_array($result2) ){
                    ?>
                    <tr>
                         <td><?php echo $ligne['id'] ?></td>
                         <td><?php echo $ligne['objet'] ?></td>
                         <td><?php echo $ligne['categorie'] ?></td>
                         <td><?php echo $ligne['destinataire'] ?></td>
                         

                    </tr>
              <?php } ?>
              
              </table>
         
              <?php
          }
          else{
            echo "<p>Désolé, il n,y a pas de réponse correspondant à votre recherche.</p>";
          }
         }else{
            echo"erreur dans l'éxecution de la requéte</br>";
         } ?>
</body>
</html>