<?php 
    include $_SERVER['DOCUMENT_ROOT']."/php/dipti_3/templates/header.php";
    include('download.php');
?>


<div id="admin">

<div class="header">
    <h2>Welcome to the Admin Panel</h2>
</div>

<div class="op">

    <a class='btn' href="./add-category.php">Add New Category</a>
    <a class='btn' href="./add-post.php">Add New Post</a>

</div>

</div>



<?php 
    require('../templates/footer.php');
?>