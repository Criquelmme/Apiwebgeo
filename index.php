<?php

$nombre = $_GET['nombre'];

echo $nombre;
echo "llego11";


if($json != null){
      $data = json_decode($json);
      print_r($data);
    
      // $DBuser = "Claudio@mysqlmobilgeoapp";
      // $DBpass = "Xxed9210";  
      // $DBhost = "mysqlmobilgeoapp.mysql.database.azure.com";
      // $DBname = "cpr52313_test_usr";
      // try{
  
      //       $DBcon = new PDO("mysql:host=$DBhost;dbname=$DBname",$DBuser,$DBpass);
      //       $DBcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
      //      }catch(PDOException $ex){
            
      //       die($ex->getMessage());
      //      }
      //   $query = "SELECT * FROM usuarios";
         
      //   $stmt = $DBcon->prepare($query);
      //   $stmt->execute();
        
      //   $userData = array();
        
      //   while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
          
      //         $userData = $row;
         
      //   }
        
      //   echo json_encode($userData);
        

}


