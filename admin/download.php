<?php

require_once( $_SERVER['DOCUMENT_ROOT']."/php/dipti_3/templates/header.php");


if (isset($_GET['file'])) {
    $filename = $_GET['file'];
    $filePath = $_SERVER['DOCUMENT_ROOT']."/php/dipti_3/DOCS/".$filename;
    if(file_exists($filePath)) {
        $fileName = basename($filePath);
        $fileSize = filesize($filePath);
    
        // Output headers.
        header("Cache-Control: private");
        header("Content-Type: application/stream");
        header("Content-Length: ".$fileSize);
        header("Content-Disposition: attachment; filename=".$fileName);
    
        // Output file.
        readfile ($filePath);                   
        exit();
    }
    else {
        echo "<h2>Error Occured. Please try agian later.<h2>";
        exit();
    }
}

require_once('../templates/footer.php');

?>
