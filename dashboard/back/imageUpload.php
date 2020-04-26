<?php
/* error_reporting(E_ALL & ~E_NOTICE & ~E_USER_NOTICE); */
$storeFolder = 'uploads/';
if (!empty($_FILES)) {
    $tempFile = $_FILES['file']['tmp_name'];  
    $ran = time();
    $targetPath = $storeFolder;
    $fileName=$ran.$_FILES['file']['name'];
    $targetFile =  $targetPath.$fileName;
    move_uploaded_file($tempFile,$targetFile);
    $data["image_data"]=$fileName;
    include_once 'imageClass.php'; 
    $imageClass=new imageClass();
    $alert=$imageClass->addImages($data);
    
}else
{
    echo "Image not found";
}