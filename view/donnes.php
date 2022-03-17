<?php session_start();
require('bd.php');
require_once('inscription.php');




$p = $_SESSION['pseudo']=$_POST['pseudo'];
$e = $_SESSION['email']=$_POST['email'];
$pas =$_SESSION['password']=$_POST['password'];




$i = 0; 



if ($i === 0) {
    
    $requete = $ppp->prepare("INSERT INTO utilisateurs(pseudo,email,password,role) VALUES ('$p','$e','$pas',1)");
     $requete->execute();
    header('location:connexion.php');
}




?>