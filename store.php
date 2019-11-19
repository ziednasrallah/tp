<?php
 include 'dbconnexion.php' ;
 $firstname=$_POST['firstname'];
 $lastname=$_POST['lastname'] ;
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $cnx -> exec('INSERT INTO students(firstname, lastname, email , phone) VALUES (  "'.$firstname.'", "'.$lastname.'", "'.$email.'", "'.$phone.'") ');
header("location:index.php");

//modal
//alert.js