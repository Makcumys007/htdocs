<?php 
    
    include 'connection.php';

    function get_data(string $atribut) {
            if (isset($_POST[$atribut])) {
            return $_POST[$atribut];        
        } return 0;
    }


    session_start();

    if($_SESSION['login_user']) { 

        $lti = get_data("lti");
        $mtc = get_data("mtc");
        $fac = get_data("fac");
        $lti_fi = get_data("lti_fi");
        $smf = get_data("smf");
        $date = date("Y-m-d");


        echo $lti;
        echo $mtc;
        echo $fac;
        echo $lti_fi;
        echo $smf;
        echo $date;

        mysqli_query($connection, "INSERT INTO `hse_board`.`hse_info`(`lti`,`mtc`,`fac`,`lti_fi`,`smf`,`date`)
        VALUES ('$lti','$mtc','$fac','$lti_fi','$smf','$date');");

    
    } else {
            header("Location: login.php?log_in=false");
        }
?>