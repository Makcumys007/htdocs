<?php 
    
    include 'connection.php';



   if( isset($_POST['login'])) {
        $login = $_POST['login'];
   }

   if( isset($_POST['password'])) {
        $password = $_POST['password'];
   }
   
  
   $result = mysqli_query($connection, "SELECT * FROM admins WHERE login = '".$login."' AND password = '".$password."' ");

 $item = mysqli_fetch_array($result);
 
 if($item) {
    echo "+";
 } else {     
       header("Location: login.php?error_auth=Не правильный логин или пароль!");    

 }


   
    ?>