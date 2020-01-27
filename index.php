<?php

define('DB_SERVER', 'lmysqlmobilgeoapp.mysql.database.azure.com');
define('DB_USERNAME', 'Claudio@mysqlmobilgeoapp');
define('DB_PASSWORD', 'Xxed9210');
define('DB_DATABASE', 'cpr52313_test_usr');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

   
      session_start();
   
      if($_SERVER["REQUEST_METHOD"] == "POST") {
         // username and password sent from form 
         
         $myusername = mysqli_real_escape_string($db,$_POST['usuario']);
         $mypassword = mysqli_real_escape_string($db,$_POST['pass']); 
      
         $sql = "SELECT id FROM admin WHERE usuario = '$myusername' and contrasena = '$mypassword'";
         echo $_POST['usuario'];
         $result = mysqli_query($db,$sql);
         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
         $active = $row['active'];
         
         $count = mysqli_num_rows($result);
         
         // If result matched $myusername and $mypassword, table row must be 1 row
               
         if($count == 1) {
            session_register("myusername");
            $_SESSION['login_user'] = $myusername;

         }else {
            $error = "Your Login Name or Password is invalid";
         }
      }
        




