<?php

include 'dbConnect.php';

    session_start();

    if(isset($_POST['username']) && isset($_POST['password']))
    {
        $email = $_POST['username'];
        $pass = $_POST['password'];

        if(empty($email))
        {
            header("Location: index.php?error=User mail is required.");
            exit();
        }
        else if (empty($pass))
        {
            header("Location: index.php?error=password is required.");
            exit();
        }
        else
        {
            if(!empty($email) && !empty($pass))
            {
                $sql = "SELECT * FROM userinfo WHERE Email = '$email' AND Password='$pass' ";
                $result = mysqli_query($connection,$sql);

                if(mysqli_num_rows($result) === 1)
                {
                    $row = mysqli_fetch_assoc($result);
                    if($row['Email'] === $email && $row['Password'] === $pass)
                    {
                        $_SESSION['Email'] = $row['Email'];
                        $_SESSION['FirstName'] = $row['FirstName'];
                        $_SESSION['Id'] = $row['Id'];
                        header("Location: home.php");
                        exit();
                    }
                    else
                    {
                        header("Location: index.php?error=User mail and password is incorect.");
                        exit();
                    }
                }
                else
                {
                    header("Location: index.php?error=User mail and password is incorect.");
                    exit();
                }
            }
            else
            {
                header('Location: index.php');
                exit();
            }
        }
    }
    else
    {
        header('Location: index.php');
        exit();
    }



?>