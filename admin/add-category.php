<?php
include $_SERVER['DOCUMENT_ROOT']."/php/dipti_3/templates/header.php";
include('createCat.php');
?>


<div id="add_cat">

    <form method="post" class="form" data-parsley-validate>
        <div class="form-content">
            <input type="text" class="text-field" name="catname" placeholder="Enter Category Name"  required />
            <input type="submit" name="createCat" class="btn" value="Create Category" />
        </div>
    </form>

</div>



<?php
require('../templates/footer.php');
?>