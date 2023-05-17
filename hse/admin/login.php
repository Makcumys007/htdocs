


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
        <form method="post" action="action_authentication.php">
            <label>Логин:</label>
            <br>
            <input type="text" name="login">
            <br>
            <label>Пароль:</label>
            <br>
            <input type="password" name="password">
            <br>
            <?php 
                if(isset($_GET['error_auth'])) {
                    echo "<p>".$_GET['error_auth']."</p>";
                } else {
                    echo "<br>";
                }
            ?>
            <input type="submit" name="submit" value="Войти">

        </form>
    </div>
</div>


</body>
</html>
