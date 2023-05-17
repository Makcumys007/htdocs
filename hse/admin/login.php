<?php 
    
    include 'connection.php';

   $result = mysqli_query($connection, "SELECT * FROM hse_info ORDER BY id DESC LIMIT 1;");
   
   
    ?>


<!DOCTYPE html>
<html>


<head>
	<meta charset="utf-8" />
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    
	<title>Обновление HSE Board</title>
    
	<meta name="keywords" content="" />
	<meta name="description" content="" />
    <link href="../styles/styles.css" rel="stylesheet">
    <link href="../styles/reset.css" rel="stylesheet">
    
</head>

<body>
<div id="wrapper">
    <div id="login">
        <form method="post" action="">
            <label>Логин:</label>
            <br>
            <input type="text" name="login">
            <br>
            <label>Пароль:</label>
            <br>
            <input type="password" name="password">
            <br><br>
            <input type="submit" name="submit" value="Войти">

        </form>
    </div>
</div>


</body>
</html>
