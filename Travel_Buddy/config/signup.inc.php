<?php

if(isset($_POST['signup-submit'])){

    require "db.php";

    $username = $_POST['userName'];
    $email = $_POST['userEmail'];
    $password = $_POST['userPassword'];
    $passwordConfirm = $_POST['userPasswordConfirm'];

    if(empty($username) || empty($email)|| empty($passwordConfirm) || empty($passwordConfirm)){
        header("Location: ../dist/signUp.php?error=emptyfields&userName=".$username."userEmail=".$email);
        exit();
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("Location: ../dist/signUp.php?error=invalidusernameemail");
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../dist/signUp.php?error=invalidmail&userName=".$username);
        exit();
    }
    elseif(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("Location: ../dist/signUp.php?error=invalidusername&userEmail=".$email);
        exit();
    }
    elseif($passwordConfirm !== $passwordConfirm){
        header("Location: ../dist/signUp.php?error=passwordchecked&userName=".$username."userEmail=".$email);
        exit();
    }
    else{

        $sql = "SELECT userName FORM users WHERE userName=?";
        $stmt = mysqli_stmt_init($conn);
        if(mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../dist/signUp.php?error=sqleror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if($resultCheck > 0){
                header("Location: ../dist/signUp.php?error=usertaken&userEmail=".$email);
                exit();
            }
            else{

                $sql = "INSERT INTO users (userName, userEmail, userPassword) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ../dist/signUp.php?error=sqlerror");
                    exit();
                }
                else{
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "sss", $username,$email, $hashedPwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../dist/signUp.php?signup=success");
                    exit();
                }

            }
        }

    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

}
else{
    header("Location: ../dist/signUp.php");
    exit();
}