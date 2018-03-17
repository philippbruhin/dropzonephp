<?php
// Store directory separator (DIRECTORY_SEPARATOR) to a simple variable. This is just a personal preference as we hate to type long variable name.
$ds = DIRECTORY_SEPARATOR;

// Declare a variable for destination folder.
$storeFolder = 'uploads';
 
if (!empty($_FILES)) { 
    //If file is sent to the page, store the file object to a temporary variable.
    $tempFile = $_FILES['file']['tmp_name'];            
    // Create the absolute path of the destination folder.  
    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;
    // Create the absolute path of the uploaded file destination. 
    $targetFile =  $targetPath. $_FILES['file']['name'];
    // Move uploaded file to destination.
    move_uploaded_file($tempFile,$targetFile);    
}
?>   