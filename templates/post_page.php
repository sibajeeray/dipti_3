<?php 
    require_once($_SERVER['DOCUMENT_ROOT'] . "/php/dipti_3/templates/header.php");
    require_once($_SERVER['DOCUMENT_ROOT'] . "/php/dipti_3/php/connectDB.php");
    require_once(__DIR__. "/../admin/download.php");

    $post_id = $_GET["postid"];
    $sql_query = "SELECT * FROM posts where id = $post_id";
    $post_res = mysqli_query($con, $sql_query)  or die('Error in Retriving Categories');

    if ($post_res) {

        if ($post_res->num_rows > 0) {
            while ($row = $post_res->fetch_array()) {
                ?>
                    <div class="heading">
                        <h1><?php echo $row['title'] ?></h1>
                        <p>Author : <?php echo $row['author'] ?></p>
                    </div>
                    <div class="contents">
                        <p><?php echo $row['contents'] ?></p>
                    </div>

                    <div class="save">
                        <a class='dwn_btn' name="filedownload" href="<?php echo $home_url.'/admin/download.php?file='.$row['attachment_name'] ?>" >Download</a>
                    </div>
                    
                <?php
            }
            $post_res->free();
        }
    }

    require_once('../templates/footer.php');
?>