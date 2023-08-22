<?php

if(isset($_POST['btnSubmit']) && isset($_FILES['my_image']))
{
    include "db.php";
    $fileName = $_POST['fileName'];
    $remark = $_POST['remark'];
    echo "<pre>";
    print_r($_FILES['my_image']);
    echo "</pre>";

    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];
    

    if($error === 0)
    {
        if($img_size > 1250000)
        {
            $ex = "Sorry, your file size is too large.";
            header("Location: picture2.php?error=$ex");
        }
        else
        {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            //echo ($img_ex);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg","jpeg","png","webp");

            if(in_array($img_ex_lc, $allowed_exs))
            {
                $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
                $img_upload_Path = 'photo/'.$new_img_name;
                move_uploaded_file($tmp_name,$img_upload_Path);

                $result = "INSERT INTO pictureinfo(name,image,Remark) VALUES ('$fileName','$new_img_name','$remark')";
                mysqli_query($connection,$result);
                header("Location: picture2.php");
            }
            else
            {
                $ex = "you can not upload this file";
                header("Location: picture2.php?error=$ex");
            }
        }
    }
    else
    {
        $ex = "Unknown error occured";
        header("Location: picture2.php?error=$ex");
    }
}
else
{
    header("Location: picture2.php");
}