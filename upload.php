<?php

require_once 'dbconfig.php';

$status = $statusMsg = '';
    if(isset($_POST['Submit']))
    {
        $status = 'error';
        if(empty($_FILES["image"]["name"]))
        {
            $fileName = basename($_FILES["image"]["name"]);
            $fileType = pathinfo($fileName,PATHINFO_EXTENSION);

            $allowTypes = array('jpg','png','jpeg','gif');
            if(in_array($fileType,$allowTypes))
            {
                $image = $_FILES['image']['tmp_name'];
                $imgContent = addslashes(file_get_contents($image));

                $sql = "INSERT INTO image (name, image) VALUES ('".$imgContent."',Now())";
                $insert = $connection->query($sql);
                 
                if($insert)
                {
                    $status = 'Success';
                    $statusMsg = "File uploaded succefully.";
                }
                else
                {
                    $statusMsg = "file upload failed, please try again.";
                }
            }
            else
                {
                    $statusMsg = "Sorry! only jpg, jpeg, png & GIF files are allowed to upload";
                }
        }
        else
                {
                    $statusMsg = "Please select an image file to upload";
                }
    }