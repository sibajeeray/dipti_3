<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/php/dipti_3/templates/header.php");
include 'createPost.php';
require_once(__DIR__ . "/../php/connectDB.php");
$sql_query = "SELECT * FROM categories";
$cat_res = mysqli_query($con, $sql_query)  or die('Error in Retriving Categories');

?>


<form method="post" class="form" enctype="multipart/form-data" data-parsley-validate>
    <div class="add_post_form">
        <input type="text" class="text-field" name="postname" placeholder="Post Title" required />
        <textarea type="text" class="text-field" name="postcontent" placeholder="Post Contents" required></textarea>
        <input type="text" class="text-field" name="author" placeholder="Author's Name" required />

        <div class="checkbox">
            <select name="cat" required>
                <option disabled selected value>-- Select Category --</option>
                <?php
                if ($cat_res) {

                    if ($cat_res->num_rows > 0) {
                        while ($row = $cat_res->fetch_array()) {
                            ?>
                            <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
                            <?php
                        }
                        $cat_res->free();
                    }
                }
                ?>
            </select>
        </div>

        <input type="file" class="file-field" name="fileToUpload" placeholder="Choose File"  required />
        <input type="submit" name="createPost" class="btn" value="Create Post" />
    </div>
</form>


<?php
require_once('../templates/footer.php');
?>