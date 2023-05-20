<?php 
    
    include 'connection.php';
session_start();

    if($_SESSION['login_user']) {

        $result = mysqli_query($connection, "SELECT * FROM hse_info ORDER BY id DESC LIMIT 1;");
       $item = mysqli_fetch_array($result);
       $lti = $item['lti'];
       $mtc = $item['mtc'];
       $fac = $item['fac'];
       $lti_fi = $item['lti_fi'];
       $smf = $item['smf'];

echo "<!DOCTYPE html>
<html>


<head>
    <meta charset=\"utf-8\" />
    <!--[if lt IE 9]><script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script><![endif]-->
    
    <title>Обновление HSE Board</title>

    <script type=\"text/javascript\">
                var href = document.location.href;
                if(href.includes(\"update=true\")) {
                    alert('Информация обновлена!');
                }   

                var href = document.location.href;
                if(href.includes(\"upload=true\")) {
                    alert('Файлы загружены!');
                }   

            </script>
    
    <meta name=\"keywords\" content=\" \"/>
    <meta name=\"description\" content=\" \"/>

    
    <link href=\"../styles/reset.css\" rel=\"stylesheet\">
    <link href=\"../styles/styles.css\" rel=\"stylesheet\">
    
</head>

<body>
<div id=\"wrapper\">
    ".date("d.m.Y") ."<form action=\"action_info.php\" method=\"post\">
        <label>Жоғалған уақыт жарақаты/ Травма с потерей рабочего времени/ LTI</label>
        <br>
        <input type=\"number\" name=\"lti\" value=\"".$lti."\">
        <br>
        <label>Медициналық көмек көрсету жағдай/ Случайоказания медицинской помощи/ MTC</label>
        <br>
        <input type=\"number\" name=\"mtc\" value=\"".$mtc."\">
        <br>
        <label>Алғашқы жәрдем көрсету жағдай / Оказания первой помощи/ FAC</label>
        <br>
        <input type=\"number\" name=\"fac\" value=\"".$fac."\">
        <br>
        <label>Еңбекке қабілеттілігін жоғалтпаусыз күндер/ Дни без потери трудоспособности/ LTI free days</label>
        <br>
        <input type=\"number\" name=\"lti_fi\" value=\"".$lti_fi."\">
        <br>
        <label>Еңбекке қабілеттілігін жоғалтпаусыз күндер/ Дни без потери трудоспособности/ LTI free days</label>
        <br>
        <input type=\"number\" name=\"smf\" value=\"".$smf."\">
        <br><br>
        <input type=\"submit\" value=\"Обновить\">
    </form>
    <br>
    <img src=\"../images/example.png\" style=\"width: 25%;\">
    <form id=\"files\" action=\"action_files.php\" method=\"post\" enctype=\"multipart/form-data\">

        <label>Блок №1 (Картинки)<samp>*.jpg 440x340</samp></label>
        <br>
        <input type=\"file\" name=\"file_1[]\" multiple >
        <br>
        <label>Блок №2 (Картинки) <samp>*.jpg 440x340</samp></label>
        <br>
        <input type=\"file\" name=\"file_2[]\" multiple>
        <br>
        <label>Блок №3 (Видео) <samp> *.mp4 300Mb</samp></label>
        <br>
        <input type=\"file\" name=\"file_3\">
        <br>
        <label>Блок №4 (Картинки) <samp>*.jpg 440x700</samp></label>
        <br>
        <input type=\"file\" name=\"file_4[]\" multiple> 
        <br>
        <br>
        <input type=\"submit\" value=\"Загрузить\">        
    </form>
    <br>
    

</div>


</body>
</html>
";
    } else {
        header("Location: login.php?log_in=false");
    }


   
   
?>