<?php

$usuario = $_POST["usuario"];
$pass = $_POST["pass"];
if($usuario != null){
    

      $DBuser = "Claudio@mysqlmobilgeoapp";
      $DBpass = "Xxed9210";  
      $DBhost = "mysqlmobilgeoapp.mysql.database.azure.com";
      $DBname = "cpr52313_test_usr";
      try{
  
            $DBcon = new PDO("mysql:host=$DBhost;dbname=$DBname",$DBuser,$DBpass);
            $DBcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
           }catch(PDOException $ex){
            
            die($ex->getMessage());
           }
        $query = "SELECT * FROM usuarios where usuario = '$usuario' and contrasena = '$pass'";
         
        $stmt = $DBcon->prepare($query);
        $stmt->execute();
        
   
        
        $count = mysqli_num_rows($stmt);
        echo $count;
        
      //   if($userData => 0 ){
      //       echo true;

      //   }else{echo false;}
        
        

}else{
      echo "no data";
}


