<?php
    if(isset($_POST['createPost']))
    {
        $postname = $_POST["postname"];
        $postcontent = $_POST["postcontent"];
        $author = $_POST["author"];
        $cat_id = $_POST["cat"];

        $error = array();
        $extensions=array("pdf","doc","docx");
        $file_name = $_FILES["fileToUpload"]["name"];
        $file_ext = pathinfo($file_name,PATHINFO_EXTENSION);
        $file_size =$_FILES['fileToUpload']['size'];
        $file_tmp =$_FILES['fileToUpload']['tmp_name'];
        $target_path = __DIR__."/../DOCS";
        
        
        if(in_array($file_ext,$extensions)=== false){
            $errors[]="Extension not allowed, please choose a PDF or DOC file.";
        }

        if($file_size > 2097152){
            $errors[]='File size must be less than 2 MB';
        }

        if(empty($errors)==true){
            move_uploaded_file($file_tmp, $target_path."/".$file_name);

            $sql_query = "INSERT INTO posts(title,contents,author,category_id,attachment_name) VALUES ('$postname','$postcontent','$author','$cat_id','$file_name')";
            $is_saved=mysqli_query($con,$sql_query);
            if($is_saved)
                echo "<h2>Post Saved Successfully</h2>";
            else {
                echo "<h3>Post Could not be saved. Please try agian</h3>";
            }
        }else{
            print_r($errors);
        }
       

    }
?>