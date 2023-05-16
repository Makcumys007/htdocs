<?php 
	
	include '../connection.php';
	function get_data(string $atribut) {
			if (isset($_POST[$atribut])) {
			return $_POST[$atribut];		
		} return 'null';
	}

	function get_icon_door(string $src) {
			if($src =='close') { 
				echo '<img src="yes.png" width="20" height="20">';
	    		} else {
				echo '<img src="no.png" width="20" height="20">';
			}
	}

	function get_checkbox(string $check) {
			if($check =='on') { 
				echo '<img src="yes.png" width="20" height="20">';
	    		} else {
				echo '<img src="no.png" width="20" height="20">';
			}
	}

	$date = get_data('date');

	echo $date;

	$fio = get_data('fio');

	$gate = get_data('gate');	
	$door = get_data('door');
	$entrance = get_data('entrance');

	$A001 = get_data('A001');
	$A002 = get_data('A002');
	$A003 = get_data('A003');
	$A004 = get_data('A004');

	$B001 = get_data('B001');
	$B002 = get_data('B002');
	$B003 = get_data('B003');
	$B004 = get_data('B004');

	$C001 = get_data('C001');
	$C002 = get_data('C002');
	$C003 = get_data('C003');
	$C004 = get_data('C004');

	$D001 = get_data('D001');
	$D002 = get_data('D002');
	$D003 = get_data('D003');
	$D004 = get_data('D004');

	$E001 = get_data('E001');
	$E002 = get_data('E002');
	$E003 = get_data('E003');
	$E004 = get_data('E004');

	$F001 = get_data('F001');
	$F002 = get_data('F002');
	$F003 = get_data('F003');
	$F004 = get_data('F004');
	$F005 = get_data('F005');

	$G001 = get_data('G001');
	$G002 = get_data('G002');
	$G003 = get_data('G003');
	$G004 = get_data('G004');
	$G005 = get_data('G005');

	$clean = get_data('clean');

	ob_start();
?>


<!DOCTYPE html>
<html>
<style>



</style>


<head>
	<meta charset="utf-8" />
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<title>Main Tower</title>
    <link rel="stylesheet" href="style.css">
	<meta name="keywords" content="" />
	<meta name="description" content="" />
    
</head>

<body>
	<h3>Чек лист по осмотру серверного помещения Main tower</h3>
		
		 <table width="960" border="1">
		  <tbody>
		    <tr bgcolor="red">
		      <td>Осмотр входной группы</td>
		      <td>Результат</td>
		     <td>Коментарий</td> 
		    </tr>

		    <tr bgcolor="yellow">
		      <td>1.1	Входная калитка на территорию антенного поля (закрыта)</td>
		      <td><?php get_icon_door($gate); ?></td>	 
		      <td rowspan="2"><?php echo $entrance; ?></td>
		      
		    </tr>
		    <tr bgcolor="yellow">
		      <td>1.2 Входная дверь в контейнер (закрыта)</td>	
		      <td><?php get_icon_door($door); ?></td>	      	      
		    </tr>

		    <tr bgcolor="gray">
		      <td>Шкаф №1 Казактелеком</td>
		      <td>Результат</td>
		      <td>Коментарий</td>		      
		    </tr>

		    <tr>
		      <td>2.1 Шкаф в нормальном состоянии, дверцы заперты, все оборудование работает, отсутствует тревожная индикация, искрение, дым и запах гари. </td>
		      <td><?php get_checkbox($A001);?></td>
		      <td><?php echo $A002; ?></td>		      
		    </tr>

		    <tr>
		      <td>2.2. Имеются неисправности  </td>
		      <td><?php get_checkbox($A003);?></td>
		      <td><?php echo $A004; ?></td>		      
		    </tr>

		    <tr bgcolor="gray">
		      <td>Шкаф №2 Tetra</td>
		      <td>Результат</td>
		      <td>Коментарий</td>		      
		    </tr>

		    <tr>
		      <td>3.1 Шкаф в нормальном состоянии, дверцы заперты, все оборудование работает, отсутствует тревожная индикация, искрение, дым и запах гари. </td>
		      <td><?php get_checkbox($B001);?></td>
		      <td><?php echo $B002; ?></td>		      
		    </tr>

		    <tr>
		      <td>3.2. Имеются неисправности  </td>
		      <td><?php get_checkbox($B003);?></td>
		      <td><?php echo $B004; ?></td>		      
		    </tr>

		    <tr bgcolor="gray">
		      <td>Шкаф №3 Beeline</td>
		      <td>Результат</td>
		      <td>Коментарий</td>		      
		    </tr>

		    <tr>
		      <td>4.1 Шкаф в нормальном состоянии, дверцы заперты, все оборудование работает, отсутствует тревожная индикация, искрение, дым и запах гари. </td>
		      <td><?php get_checkbox($C001);?></td>
		      <td><?php echo $C002; ?></td>		      
		    </tr>

		    <tr>
		      <td>4.2. Имеются неисправности  </td>
		      <td><?php get_checkbox($C003);?></td>
		      <td><?php echo $C004; ?></td>		      
		    </tr>

		     <tr bgcolor="gray">
		      <td>Шкаф №4 TV</td>
		      <td>Результат</td>
		      <td>Коментарий</td>		      
		    </tr>

		    <tr>
		      <td>5.1 Шкаф в нормальном состоянии, дверцы заперты, все оборудование работает, отсутствует тревожная индикация, искрение, дым и запах гари. </td>
		      <td><?php get_checkbox($D001);?></td>
		      <td><?php echo $D002; ?></td>		      
		    </tr>

		    <tr>
		      <td>5.2. Имеются неисправности  </td>
		      <td><?php get_checkbox($D003);?></td>
		      <td><?php echo $D004; ?></td>		      
		    </tr>

		    <tr bgcolor="gray">
		      <td>Шкаф №5 0700-CC-213</td>
		      <td>Результат</td>
		      <td>Коментарий</td>		      
		    </tr>

		    <tr>
		      <td>6.1 Шкаф в нормальном состоянии, дверцы заперты, все оборудование работает, отсутствует тревожная индикация, искрение, дым и запах гари. </td>
		      <td><?php get_checkbox($E001);?></td>	 
		      <td><?php echo $E002; ?></td>		      
		    </tr>

		    <tr>
		      <td>6.2. Имеются неисправности  </td>
		      <td><?php get_checkbox($E003);?></td>	 
		      <td><?php echo $E004; ?></td>		      
		    </tr>

		    <tr bgcolor="gray">
		      <td>UPS-A</td>
		      <td>Результат</td>	 
		      <td>Коментарий</td>		      
		    </tr>

		    <tr>
		      <td>1. Отсутствие механических повреждений </td>
		      <td><?php get_checkbox($F001);?></td>
		      <td rowspan="4"><?php echo $F005; ?></td>			      
		    </tr>
		    <tr>
		      <td>2. Зеленый индикатор LOAD ON </td>
		      <td><?php get_checkbox($F002);?></td>	
		      	      		      
		    </tr>

		    <tr>
		      <td>3. Отсутствие желтой/красной индикации </td>	
		      <td><?php get_checkbox($F003);?></td>	 
		            	      
		    </tr>
		    <tr>
		      <td>4. Достаточный заряд аккумулятора (Chrg 100%)</td>
		      <td><?php get_checkbox($F004);?></td>	
		           	      
		    </tr>

		    <tr bgcolor="gray">
		      <td>Система кондиционирования Vertiv Liebert</td>
		      <td>Результат</td>
		      <td>Коментарий</td>		      
		    </tr>
		    <tr>
		      <td>Влажность (проценты)</td>
		      <td><?php echo $G001; ?></td>
		      <td rowspan="5"><?php echo $G005; ?></td>		      
		    </tr>
		    <tr>
		      <td>Температура (градусы Цельсия) </td>
		      <td><?php echo $G002; ?></td>		      		      
		    </tr>

		    <tr>
		      <td>Отсутствие красной индикации блок №1</td>
		      <td><?php get_checkbox($G003); ?></td>		      		      
		    </tr>

		    <tr>
		      <td>Отсутствие красной индикации блок №2</td>
		      <td><?php get_checkbox($G004); ?></td>		      		      
		    </tr>

		    <tr>
		      <td>С 25 по 31 текущего месяца организовать влажную уборку</td>
		      <td><?php get_checkbox($clean); ?></td>		      		      
		    </tr>

		  </tbody>
		</table>

		<h4>Ответственный за мониторинг: </h4>
		<h3>ФИО  <?php echo $fio;?>  Дата: <?php echo $date;?></h3>
		
</body>
</html>

<?php


// Get the content that is in the buffer and put it in your file //
file_put_contents('duty.html', ob_get_contents());

$file = file_get_contents('duty.html');



mysqli_query($connection, "
	INSERT INTO `kzmboz`.`main_tower`
(`date`,
`content`,
`location`)
VALUES
(
'$date',
'$file',
'MA');

	");

header("Refresh: 1; URL=../index.php");



?>


