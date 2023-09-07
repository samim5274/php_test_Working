<?php 


if(isset($_POST['btnInsert']) && isset($_FILES['my_image']))
    {
        include "PDB.php";

        $userName = $_POST['fileName'];
        $remark = $_POST['remark'];

        echo"<pre>";
        print_r($_FILES['my_image']);
        echo"</pre>";
        
        $img_name = $_FILES['my_image']['name'];
        $img_size = $_FILES['my_image']['size'];
        $tem_name = $_FILES['my_image']['tmp_name'];
        $error = $_FILES['my_image']['error'];

        if($error === 0)
        {
            if($img_size > 1250000)
            {
                $ex = "Sorry, file is to large!";
                header("Location: insertPicture.php?error=$ex");
            }
            else
            {
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);

                $allowed_exs = array("jpg","jpeg","png");

                if(in_array($img_ex_lc, $allowed_exs))
                {
                    $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
                    $img_upload_path = 'Pic/'.$new_img_name;
                    move_uploaded_file($tem_name,$img_upload_path);
                    $sql = "INSERT INTO pictureinfo(image,name,Remark) VALUES ('$new_img_name','$userName','$remark')";
                    mysqli_query($connection, $sql);
                    $ex = "Picture upload successfully.";
                    header("Location: insertPicture.php?error=$ex");
                }
                else
                {
                    $ex = "You cann't upload files of this type!";
                    header("Location: insertPicture.php?error=$ex");
                }
            }
        }
        else
        {
            $ex = "Unkown error occurred!";
            header("Location: insertPicture.php?error=$ex");
        }
    }
    else
    {            
        header("Location: insertPicture.php");
    }