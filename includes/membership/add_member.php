<?php
if (isset($_POST['submit'])) {
    // Include the database configuration file
    include_once '../db.php';
     
    // File upload configuration
    $targetDir = "admin/sristi_page/member_data/";
    $allowTypes = array('jpg','png','jpeg');
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $curr_occupation = $_POST['occupation'];
    $other_work = $_POST['other-work'];
    $joining_reason = $_POST['reason-joining'];
    $photo = $_POST['photo'];
    $photoid = $_POST['photo-id'];

    echo $name;
    echo $photo;
    echo $photoid ;
    
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
    $fileNamePhoto = $_FILES['photo']['name'];
    echo $fileNamePhoto;
    $fileNamePhotoId = $_FILES['photo-id']['name'];
    echo $fileNamePhotoId;
    //echo "$fileNamePhoto $fileNamePhotoId"
    if (!empty($fileNamePhoto) && !empty($fileNamePhotoId)) {
        $photo = basename($_FILES['photo']['name']);
        $targetFilePath_Photo = $targetDir . $photo;
        
        $photoid = basename($_FILES['photo-id']['name']);
        $targetFilePath_PhotoId = $targetDir . $photoid;
        
        $fileType = pathinfo($targetFilePath_Photo, PATHINFO_EXTENSION);
        if (in_array($fileType, $allowTypes)) {
            if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFilePath_Photo) && move_uploaded_file($_FILES["photo-id"]["tmp_name"], $targetFilePath_PhotoId)) {
                $insertValuesSQL .= "('".$name."','".$gender."', '".$dob."', '".$phone."', '".$email."', '".$address."', '".$curr_occupation."', '".$other_work."', '".$joining_reason."', '".$photo."', '".$photoid."'),";
            } else {
                $errorUpload .= $_FILES['photo']['name'].' | ';
            }
        } else {
            $errorUploadType .= $_FILES['photo']['name'].' | ';
        }
        
        
        
         
        if (!empty($insertValuesSQL)) {
            $insertValuesSQL = trim($insertValuesSQL, ',');
            // Insert image file name into database
            $insert = $conn->query("INSERT INTO membership (name, gender, dob, phone, email, address, curr_occupation, other_work, joining_reason, photo, photo_id) VALUES $insertValuesSQL");
            if ($insert) {
                $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):'';
                $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):'';
                $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType;
                $statusMsg = " Your Data uploaded successfully.".$errorMsg;
            } else {
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        $statusMsg = 'Please select a file to upload.';
    }
     
    // Display status message
    echo $statusMsg;
}


$email_to = "web@shibpursristi.org, secretary@shibpursristi.org, treasurer@shibpursristi.org";
    $email_subject = "Voulenteer Form Submission";
    
    function clean_string($string)
    {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad, "", $string);
    }
 
     
 
  $email_message .= "Name: ".clean_string($name)."\n";
$email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Gender: ".clean_string($gender)."\n";
     $email_message .= "DOB: ".clean_string($dob)."\n";
     $email_message .= "Phone: ".clean_string($phone)."\n";
     
     $email_message .= "Address: ".clean_string($address)."\n";
$email_message .= "Current Occupation: ".clean_string($curr_occupation)."\n";
      $email_message .= "Other Work: ".clean_string($other_work)."\n";
    $email_message .= "Reason of Joining: ".clean_string($joining_reason)."\n";
        $email_message .= "Photo: ".clean_string($photo)."\n";
         $email_message .= "ID: ".clean_string($photoid)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
?>
<html>
<h2>Thank you for contacting us. We will be in touch with you very soon.</h2>
<br>
<a href="index.php">
    <h3>Back to Home</h3>
</a>

</html>