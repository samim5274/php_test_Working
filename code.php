<?php

    include "img_db_conn.php";

    if(isset($_POST['btnImgDelet']))
    {
        $id = $_POST['delet_id'];
        $img = $_POST['imageDelet'];

        $query = "DELETE FROM images WHERE id = '$id'";
        $search_Result = mysqli_query($connection , $query);

        if($search_Result)
        {
            unlink("upload/".$img);
            $_SESSION['status'] = "Delete successfully.";
            header("Location: deleteImg.php");
        }
        else
        {
            $_SESSION['status'] = "Delete not possiable.";
            header("Location: deleteImg.php");
        }
    }


    if(isset($_POST['btnEdit']))
    {
        $id = $_POST['id'];
        $new_img = $_FILES['my_image']['name'];
        $old_img = $_POST['my_image_old'];

        if($new_img != '')
        {
            $update_filename = $new_img = $_FILES['my_image']['name'];
        }
        else
        {
            $update_filename = $old_img;
        }

        if(file_exists("Upload/".$_FILES['my_image']['name']))
        {
            $filename = $_FILES['my_image']['name'];
            $_SESSION['status'] = "Image allready exsit".$filename;
            header("Location: edit.php");
        }
        else
        {
            $query2 = "UPDATE images SET image_url = '$update_filename' WHERE id = '$id'";
            $query_result2 = mysqli_query($connection , $query2);

            if($query_result2)
        {
            echo  "Update successfully.";
            header("Location: Edit.php");
        }
        else
        {
            echo  "Update not possiable.";
            header("Location: Edit.php");
        }
        }
    }

