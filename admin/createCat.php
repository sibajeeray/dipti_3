<?php

    include("../php/connectDB.php");

    if(isset($_POST['createCat']))
    {
        $name = mysqli_real_escape_string($con,$_POST["catname"]);
        $sql_query = "INSERT INTO categories(name) VALUES ('$name')";
        $is_saved=mysqli_query($con,$sql_query);
        if($is_saved)
        echo "<h3>Category saved successfully</h3>";
        else {
            echo "<h3>Category Could not be saved. Please try agian</h3>";
        }
    }

?>
