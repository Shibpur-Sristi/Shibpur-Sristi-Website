<?php 
if(isset($_POST['submitNewsletter'])){ 
    // Include the database configuration file 
    include_once 'db.php'; 
   
     
    $name = $_POST['name'];
    $email = $_POST['email'];
    // echo $name;
    // echo $email;
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    
    $insertValuesSQL .= "('".$name."','".$email."'),"; 
    
    if(!empty($insertValuesSQL)){ 
        $insertValuesSQL = trim($insertValuesSQL, ','); 
        // Insert image file name into database 
        $insert = $conn->query("INSERT INTO subscriber (`name`, `email`) VALUES $insertValuesSQL"); 
        if($insert){ 
            $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
            $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
            $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
            $statusMsg = "Subscribed successfully.".$errorMsg; 
        }else{ 
            $statusMsg = "Sorry, there was an error uploading your file."; 
        } 
    } 
    echo $statusMsg; 
} 
else {
    echo "is not set";
}
?>