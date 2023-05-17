<?php 
    
    include 'connection.php';

    function uploadFiles(string $value) {       
            $links = "";
            if($_FILES)
                {
                    foreach ($_FILES[$value]["error"] as $key => $error) {
                        if ($error == UPLOAD_ERR_OK) {
                            $tmp_name = $_FILES[$value]["tmp_name"][$key];
                            $name = $_FILES[$value]["name"][$key];
                            $links = "res/".$name." ".$links;
                            move_uploaded_file($tmp_name, "../res/".$name);
                        }
                    }
                    echo "Файлы загружены";
                } 

                if ($links == "") {
                    return "null";
                }
                
            return trim($links);
    }

    function uploadFile(string $value) {
        $link = "";
        if ($_FILES && $_FILES[$value]["error"]== UPLOAD_ERR_OK)
            {
                $name = $_FILES[$value]["name"];
                $link = "res/".$name;
                move_uploaded_file($_FILES[$value]["tmp_name"], "../res/".$name);
                echo "Файл загружен";
            } else {
                $link = "null";
            }            
        return trim($link);
    }


   session_start();

    if($_SESSION['login_user']) { 

       $file_1 = uploadFiles("file_1");
       $file_2 = uploadFiles("file_2");
       $file_3 = uploadFile("file_3");
       $file_4 = uploadFiles("file_4");

       mysqli_query($connection, "

    INSERT INTO `files_urls`(`file_1`,`file_2`,`file_3`,`file_4`)
    VALUES
    (
    '$file_1',
    '$file_2',
    '$file_3',
    '$file_4');


    ");

       } else {
        header("Location: login.php?log_in=false");
    }


   
   
?>



   
     
   

    
    




    

?>