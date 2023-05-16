

<?php include 'connection.php';
 
 # mysql_query("SET NAMES 'utf8'"); 
 # mysql_query("SET CHARACTER SET 'utf8'");
 # mysql_query("SET SESSION collation_connection = 'utf8_general_ci'");

$result = mysqli_query($connection, "SELECT * FROM main_tower  ORDER BY date");

?>
<!DOCTYPE html>
<html>

<style>
th, td {
  border-style:solid;
  border-color: #96D4D4;
}
</style>

<head>
	<meta charset="utf-8" />
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<title>Отчеты осмотров</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
        <link href="style/style.css" rel="stylesheet">
</head>

<body>
<table>
    <thead>
        <tr>
            <th>Дата</th><th>Локация</th>
        </tr>
    </thead>
    <tbody>
       
        <?php
        
while ($item = mysqli_fetch_array($result)) {
            $id = $item['id'];
            $date = $item['date'];            
            $location = $item['location'];
            echo <<<LI
            <tr>
                <td><a href="maintower/report.php?id=$id">$date<a></td>     <td>$location</td>        
            </tr>
        LI;
        }
        

        ?>

        
    </tbody>
</table>


</body>
</html>
