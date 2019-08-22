<?php
    require_once(__DIR__ . "/../php/connectDB.php");
    $sql_query = "SELECT * FROM categories";
    $result_set = mysqli_query($con, $sql_query)  or die('Error in Retriving Categories');
?>

<section class="menu container">
    <div class="main">
        <nav>
            <ul class="list">
                <li><a href="<?php echo $home_url; ?>">Home</a></li>
                <li><a href="#">About</a></li>
                <li class="parent-menu" ><a href="#">Services</a>
                
                    <ul class="submenu">
                        <?php
                        if ($result_set) {
                            if ($result_set->num_rows > 0) {
                                while ($row = $result_set->fetch_array()) {
                                    ?>
                                    <li><a href="<?php echo $home_url.'/templates/category.php?catid='.$row['id'] ?>"><?php echo $row['name'] ?></a></li>
                                <?php
                                }
                                $result_set->free();
                            }
                        }
                        ?>
                    </ul>

                </li>
                <li><a href="#">Support</a></li>
                <li><a href="<?php echo $home_url . '/admin'; ?>">Admin</a></li>
            </ul>
        </nav>
    </div>
</section>


<?php
?>