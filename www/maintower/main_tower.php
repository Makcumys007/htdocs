<?php 
    
    include '../connection.php';
    $result = mysqli_query($connection, "SELECT * FROM specialists ORDER BY RAND()");

    ?>


<!DOCTYPE html>
<html>
<style>

div {
    outline-style:solid;
}


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
<div>
    <form action="action.php" method="post">
        <h1>Main Tower</h1>
        <label>Дата</label>
        <input type="date" name="date" required>
        <br/>

        <label>ФИО</label>
        <select name="fio">
            <?php
        
while ($item = mysqli_fetch_array($result)) {
            $id = $item['id'];
            $lastname = $item['lastname'];
            $name = $item['name'];
           echo <<<LI
           <option value='$lastname $name'>$lastname $name</option>
           LI;}            ?>
        </select>   
        <br>

        <h3>Шкаф №1 Казактелеком</h3>

        <input type="checkbox" name="A001">
        <label>Шкаф в нормальном состоянии, дверцы заперты, все оборудование работает, отсутствует тревожная индикация, искрение, дым и запах гари.</label>
        <br/>

        <label>Коментарий</label>
        <textarea name="A002"></textarea>
        <br/>

        <input type="checkbox" name="A003">
        <label>Имеются неисправности</label>
        <br/>

        <label>Коментарий</label>
        <textarea name="A004"></textarea>
        <br/>
    <!--Конец блока A -->

        <h3>Шкаф №2 Tetra</h3>

        <input type="checkbox" name="B001">
        <label>Шкаф в нормальном состоянии, дверцы заперты, все оборудование работает, отсутствует тревожная индикация, искрение, дым и запах гари.</label>
        <br/>

        <label>Коментарий</label>
        <textarea name="B002"></textarea>
        <br/>

        <input type="checkbox" name="B003">
        <label>Имеются неисправности</label>
        <br/>

        <label>Коментарий</label>
        <textarea name="B004"></textarea>
        <br/>
    <!--Конец блока B -->
        <h3>Шкаф №3 Beeline</h3>

        <input type="checkbox" name="C001">
        <label>Шкаф в нормальном состоянии, дверцы заперты, все оборудование работает, отсутствует тревожная индикация, искрение, дым и запах гари.</label>
        <br/>

        <label>Коментарий</label>
        <textarea name="C002"></textarea>
        <br/>

        <input type="checkbox" name="C003">
        <label>Имеются неисправности</label>
        <br/>

        <label>Коментарий</label>
        <textarea name="C004"></textarea>
        <br/>
    <!--Конец блока C -->
        
        <h3>Шкаф №4 TV</h3>

       <input type="checkbox" name="D001">
        <label>Шкаф в нормальном состоянии, дверцы заперты, все оборудование работает, отсутствует тревожная индикация, искрение, дым и запах гари.</label>
        <br/>

        <label>Коментарий</label>
        <textarea name="D002"></textarea>
        <br/>

        <input type="checkbox" name="D003">
        <label>Имеются неисправности</label>
        <br/>

        <label>Коментарий</label>
        <textarea name="D004"></textarea>
        <br/>
    <!--Конец блока D -->

        <h3>Шкаф №5 0700-CC-213</h3>

        <input type="checkbox" name="E001">
        <label>Шкаф в нормальном состоянии, дверцы заперты, все оборудование работает, отсутствует тревожная индикация, искрение, дым и запах гари.</label>
        <br/>

        <label>Коментарий</label>
        <textarea name="E002"></textarea>
        <br/>

        <input type="checkbox" name="E003">
        <label>Имеются неисправности</label>
        <br/>

        <label>Коментарий</label>
        <textarea name="E004"></textarea>
        <br/>
    <!--Конец блока E -->
        
        <h3>Проверка входной группы</h3>
        <h4>Ворота на територию</h4>
        <input type="radio" name="gate" value="open">
        <label>Открыты</label>
        <br/>

        <input type="radio" name="gate" value="close">
        <label>Закрыты</label>
        <br/>

        <h4>Входная дверь в контейнер</h4>
        <input type="radio" name="door" value="open">
        <label>Открыта</label>
        <br/>

        <input type="radio" name="door" value="close">
        <label>Закрыта</label>
        <br/>

        <label>Коментарий</label>
        <textarea name="entrance"></textarea>
        <br/>

    <!--Конец блока Gate -->

    <h3>UPS-A</h3>

        <input type="checkbox" name="F001">
        <label>Отсутствие механических повреждений</label>
        <br/>

        <input type="checkbox" name="F002">
        <label>Зеленая индикация LOAD ON</label>
        <br/>

        <input type="checkbox" name="F003">
        <label>Отсутствие оранжевой/красной индикации</label>
        <br/>    

        <input type="checkbox" name="F004">
        <label>Заряд АКБ (Chrg 100%)</label>            
        <br/>

        <label>Коментарий</label>
        <textarea name="F005"></textarea>
        <br/>
    <!--Конец блока F -->

    <h3>Система кондиционирования Vetiv Liebert</h3>
        
        <label>Температура (градусы Цельсия)</label>    
        <input type="field" name="G001">
        <br/>

        <label>Влажность (проценты)</label>    
        <input type="field" name="G002">
        <br/>

        <h4>Отсутствие красной индикации</h4>
        <input type="checkbox" name="G003">
        <label>Блок №1</label>
        <br/>

        <input type="checkbox" name="G004">
        <label>Блок №2</label>
        <br/>

        <label>Коментарий</label>
        <textarea name="G005"></textarea>
        <br/>
        
    <!--Конец блока G -->

        <h3>Влажная уборка</h3>

        <input type="checkbox" name="clean">
        <label>С 25 по 31 текущего месяца организовать влажную уборку</label>
        <br/>

        <input type="submit">
        <br/>
    </form>

</div>


</body>
</html>
