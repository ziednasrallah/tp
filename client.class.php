<?php
require 'dbconnect.class.php';
class Client 
{
   private $cnx;

   public function __construct (){
      $db = new basesdonnees;
      $this->cnx = $db->connectDB();
   }
   public function readallclient()
   {
      try[
         $req = 'SELECT*FROM clients';
         $result->prepare($req);
         $result->execute();
         return $result;
   ] catch (PDOExeption)
   }

   public function deleteclient()
   {
      try{
         $req = 'DELETE FROM students WHERE id= :param_id';
         $result=$this->execreq($sql);
         $result->bindParam(':param_id', $id);
         $result->execute();
         return $result;
      }
      catch (PDOExeption $ex){
         echo $ex->getMessage();
      }


   }

   public function addnewclient($id,$firstname,$lastname,$email,$phone)
   {
   try {
    $sql="insert into clients(id,firstname,lastname,email,phone) values (:clt_fistname,:clt_lastname,:clt_email,:clt_phone)";
    $result=$this->cnx->prepare($sql);
    $result->bindParam(':param_id', $id);
    $result->bindparam(":param_firstname",$firstname);
    $result->bindparam(':param_lastname',$lastname);
    $result->bindparam(':param_email',$email);
    $result->bindparam(":param_phone",$phone);
    $result->execute();
    return $result;
   }catch (PDOExeption $ex){
      echo $ex->getMessage();
   }
   }


   public function updateclient($id,$firstname,$lastname,$email,$phone)
   {
      $sql= 'UPDATE Students SET firstname= :param_firstname, lastname= :param_lastname, email= :param_email, phone= :param_phone
      WHERE id= :param_id' );
      $result=$this->cnx->prepare($sql);
      $result->bindParam(':param_firstname', $firstname);
      $result->bindParam(':param_lastname', $lastname);
      $result->bindParam(':param_email', $email);
      $result->bindParam(':param_phone', $phone);
      $result->bindParam(':param_id', $id);
      $result->execute();
      return $result;
   }catch (PDOExeption $ex){
      echo $ex->getMessage();
   }
      


   }

   }








?>

