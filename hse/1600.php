<?php 
    
   include 'admin/weather.php';
   include 'admin/connection.php';

   $result = mysqli_query($connection, "SELECT * FROM hse_info ORDER BY id DESC LIMIT 1;");
   $item = mysqli_fetch_array($result);
   $lti = $item['lti'];
   $mtc = $item['mtc'];
   $fac = $item['fac'];
   $lti_fi = $item['lti_fi'];
   $smf = $item['smf'];
   $date = $item['date'];

   $result = mysqli_query($connection, "SELECT file_1 FROM files_urls WHERE file_1 != 'null' ORDER BY id DESC LIMIT 1;");
   $item = mysqli_fetch_array($result);
   $file_1 = $item['file_1'];

   


   $result = mysqli_query($connection, "SELECT file_2 FROM files_urls WHERE file_2 != 'null' ORDER BY id DESC LIMIT 1;");
   $item = mysqli_fetch_array($result);
   $file_2 = $item['file_2'];


   $result = mysqli_query($connection, "SELECT file_3 FROM files_urls WHERE file_3 != 'null' ORDER BY id DESC LIMIT 1;");
   $item = mysqli_fetch_array($result);
   $file_3 = $item['file_3'];

   $result = mysqli_query($connection, "SELECT file_4 FROM files_urls WHERE file_4 != 'null' ORDER BY id DESC LIMIT 1;");
   $item = mysqli_fetch_array($result);
   $file_4 = $item['file_4'];

   

    ?>


<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">

        <title>SafetyBoard</title>
        <meta http-equiv="Refresh" content="3600" />
        <link href="styles/styles1600.css" rel="stylesheet">
        <link href="styles/reset.css" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="images/favicon.ico">
        <script>
            const today = new Date().toLocaleDateString();
        </script>


        

    </head>
    <body>
        <div id="wrapper">
            <!-- Шапка -->
        <div id="header">
            <div id="logo"><img height="100" src="images/logo.png"></div>
            <div id="descr"><h2>ЕҚ, ӨҚ БОЙЫНША АҚПАРАТТЫҚ КЕСТЕ <br>
ИНФОРМАЦИОННАЯ ДОСКА ПО ОТ И ПБ <br>
HEALTH AND SAFETY BOARD
</h2></div>
            <div id="logo2"><img height="100" src="images/logo2.png"></div>
        </div>
        <!-- Таблица -->
        <div id="statistic">
            <table>
              <tr>
                <td class="num_w"><h1><?php echo $lti;?></h1></td>
                <td class="num_w_p"><h4>Жоғалған уақыт жарақаты/ Травма с потерей рабочего времени/ LTI</h4></td>
                <td class="num_w"><h1><?php echo $mtc;?></h1></td>
                <td class="num_w_p"><h4>Медициналық көмек көрсету жағдай/ Случайоказания медицинской помощи/ MTC</h4></td>
                <td class="num_w"><h1><?php echo $fac;?></h1></td>
                <td class="num_w_p"><h4>Алғашқы жәрдем көрсету жағдай / Оказания первой помощи/ FAC</h4></td>
                <td class="num_g"><h1><?php echo $lti_fi;?></h1></td>
                <td class="num_g_p"><h4>Еңбекке қабілеттілігін жоғалтпаусыз күндер/ Дни без потери трудоспособности/ LTI free days</h4></td>
                <td class="num_g"><h1><?php echo $smf;?></h1></td>
                <td class="num_g_p"><h4>Қауіпсіз адам-сағат саны/ Безопасное количество человеко-часов/ Safe men-hours</h4></td>                
                <td class="num_w"><h1><?php echo $current_date;?></h1></td>
                <td class="num_w_p"><h4>Күні Дата Date</h4></td>
              </tr>
            </table>
        </div>   
        <!-- Инфо -->
        <div id="info">
            <div id="left">
                <!-- Блок А -->
                <div class="first">

            <?php  
            if(str_contains($file_1, " ")) {                
                $file_1 = explode(" ", $file_1);
                foreach ($file_1 as $value) {
                    echo "<div class=\"blockA fade\">  
                      <img src=\"";
                    echo $value;
                    echo "\">                      
                        </div>";
                }

            }  else {
                echo "<div class=\"blockA fade\">  
                      <img src=\"";
                echo $file_1;
                echo "\">                      
                    </div>";
            }
            
            

            ?>
            <script>
        var slideIndex = 0;
        showSlidesA();

        function showSlidesA() {
          var i;
          var slides = document.getElementsByClassName("blockA");
         
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          
          slides[slideIndex-1].style.display = "block";  
         
          setTimeout(showSlidesA, 4000); // Change image every 2 seconds
        }
        </script>
                   

                    


                </div>

                <div class="second">

                <?php  
            if(str_contains($file_2, " ")) {
                $file_2 = explode(" ", $file_2);


                foreach ($file_2 as $value) {
                    echo "<div class=\"blockB fade\">  
                      <img src=\"";
                    echo $value;
                    echo "\">                      
                        </div>";

                }

            }  else {
                echo "<div class=\"blockB fade\">  
                      <img src=\"";
                echo $file_2;
                echo "\">                      
                    </div>";
            }
            
            

            ?>

            <script>
        var slideIndex = 0;
        showSlidesB();

        function showSlidesB() {
          var i;
          var slides = document.getElementsByClassName("blockB");
         
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          
          slides[slideIndex-1].style.display = "block";  
         
          setTimeout(showSlidesB, 5000); // Change image every 2 seconds
        }
        </script>

                </div>
            </div>
            <div id="center">
                <div id="weather"> 
                        <div class="background_wthr"> 
                            <table>
                                <tr>
                                    <td>
                                        <img src="weather/<?php echo $desc_icon;?>" height="30" title="<?php echo $now_desc;?>">
                                    </td>
                                    <td>
                                         <img src="weather/icons8-thermometer-80.png" height="30" >
                                    </td>
                                    <td>
                                        <h1><?php echo $temperature; ?> °C</h1>
                                    </td>
                                    <td>
                                         <img src="weather/icons8-wind-80.png" height="30" >
                                    </td>
                                    <td>
                                        <h1><?php echo $wind; ?></h1>
                                    </td>
                                    <td>
                                        <h1>m/s</h1>
                                    </td>
                                    <td>
                                         <img src="weather/icons8-wet-80.png" height="30" >
                                    </td>
                                    <td>
                                        <h1><?php echo $humidity; ?></h1>
                                    </td>
                                </tr>
                            </table>
                                

                        </div>
                </div>
                <video id="video" controls loop autoplay muted>
                    <source src="<?php echo $file_3; ?>" type="video/mp4">
                </video>                
            </div>
            <div id="right">
                
            <?php  
            if(str_contains($file_4, " ")) {
                
                $file_4 = explode(" ", $file_4);
                foreach ($file_4 as $value) {
                    echo "<div class=\"blockC fade\">  
                      <img src=\"";
                    echo $value;
                    echo "\">                      
                        </div>";

                }

            }  else {
                echo "<div class=\"blockC fade\">  
                      <img src=\"";
                echo $file_4;
                echo "\">                      
                    </div>";
            }
            
            
            

            ?>

            <script>
        var slideIndex = 0;
        showSlidesC();

        function showSlidesC() {
          var i;
          var slides = document.getElementsByClassName("blockC");
         
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          
          slides[slideIndex-1].style.display = "block";  
         
          setTimeout(showSlidesC, 3000); // Change image every 2 seconds
        }
        </script>

            </div>
        </div>
        </div> 
        <script type="text/javascript">
            
        </script>
        
        
    </body>
</html>