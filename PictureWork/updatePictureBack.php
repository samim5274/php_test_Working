<?php

    include 'PDB.php';

        

    
    if(isset($_POST['btnEdit']))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $remark = $_POST['Remark'];

        $img_old = $_POST['image_old'];
        $img_new = $_FILES['my_image']['name'];

        $tem_name = $_FILES['my_image']['tmp_name'];
        
        
        if($img_new != '')
        {
            $update_imgName = $_FILES['my_image']['name'];
        }
        else
        {
            $update_imgName = $img_old;
        }

        if(file_exists("Pic/".$_FILES['my_image']['name']))
        {
            $filename = $_FILES['my_image']['name'];
            $_SESSION['status'] = "Image already exist".$filename;
            header("Location: insertPicture.php");
        }

        else
        {
            $query = "UPDATE `pictureinfo` SET `name`='$name',`image`='$img_new',`Remark`='$remark' WHERE id = '$id'";
            $query_Result = mysqli_query($connection, $query);

            if($query_Result)
            {
                $_SESSION['status'] = "Image update successfully.";
                header("Location: index.php");
            }
            else
            {
                $_SESSION['status'] = "Image not updated.";
                header("Location: insertPicture.php");
            }
        }

    }