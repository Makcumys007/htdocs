

<?php include 'connection.php';
 
 # mysql_query("SET NAMES 'utf8'"); 
 # mysql_query("SET CHARACTER SET 'utf8'");
 # mysql_query("SET SESSION collation_connection = 'utf8_general_ci'");

$result = mysqli_query($connection, "SELECT * FROM computers");

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
	<title>Computers</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
        <link href="style/style.css" rel="stylesheet">
</head>

<body>
<table>
    <thead>
        <tr>
            <th>Name</th><th>Serial Number</th><th>Description</th>
        </tr>
    </thead>
    <tbody>
       
        <?php
        
while ($item = mysqli_fetch_array($result)) {
            $device_name = $item['device_name'];
            $serial_number = $item['serial_number'];
            $description = $item['description'];
            echo <<<LI
            <tr>
                <td>$device_name</td>     <td>$serial_number</td>    <td>$description</td>        
            </tr>
        LI;
        }
        

        ?>

        
    </tbody>
</table>


</body>
</html>
