<?php

        include __DIR__ .'/../variables.php';


        $con = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname) //connect to the database server
        or die ("Could not connect to mysql because ".mysqli_error());

        mysqli_select_db($con,$dbname)  //select the database
        or die ("Could not select to mysql because ".mysqli_error());

?>