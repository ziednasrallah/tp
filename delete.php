<?php
include 'dbconnexion.php';
$rep=$cnx->prepare('DELETE FROM students WHERE id= :param_id');
$rep->bindParam(':param_id',$_GET['id']);
$rep->execute();
header("location:index.php");
