<?php
     
$connexion = mysqli_connect("localhost","root","", "belle_mort");
if (!$connexion) {
    die('Erreur de connexion (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}
        
$sql_query="INSERT INTO utilisateur
VALUES ('".strval($_POST['id'])."','".$_POST['prenom']."','".$_POST['nom']."','".$_POST['date_naissance']."','".$_POST['mail']."','".$_POST['password']."')";
        
if(mysqli_query($connexion,$sql_query)){
    echo '<p class="reponse">vous êtes bien enregistré!</p>';
}
else{
     echo "erreur d'inscription : ".mysqli_error($connexion);
}
        
mysqli_close($connexion);
?>
