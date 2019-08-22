<?php 
    require_once($_SERVER['DOCUMENT_ROOT'] . "/php/dipti_3/templates/header.php");
    require_once($_SERVER['DOCUMENT_ROOT'] . "/php/dipti_3/php/connectDB.php");

    $cat_id = $_GET["catid"];
    $sql_query = "SELECT * FROM posts where category_id = $cat_id";
    $posts_res = mysqli_query($con, $sql_query)  or die('Error in Retriving Categories');

    if ($posts_res) {

        if ($posts_res->num_rows > 0) {
            while ($row = $posts_res->fetch_array()) {
                ?>
                    <a href="<?php echo $home_url.'/templates/post_page.php?postid='.$row['id']; ?>">
                        <div class="box">
                            <h2><?php echo $row['title'] ?></h2>
                            <p>Author : <?php echo $row['author'] ?></p>
                        </div>
                    </a>

                <?php
            }
            $posts_res->free();
        }
    }

    require_once('../templates/footer.php');
?>