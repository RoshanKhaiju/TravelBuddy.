<?php

if(isset($_POST['login-submit'])){

    require "db.php";

    $email = $_POST['userEmail'];
    $password = $_POST['userPassword'];

    if(empty($email) || empty($password)){
        header("Location: ../dist/index.php?error=emptyfields");
        exit();
    }
    else{
        $sql = "SELECT * FROM users WHERE userName=? OR userEmail=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../dist/index.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "ss", $email, $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)){
                $pwdCheck = password_verify($password, $row['userPassword']);
                if($pwdCheck == false){
                    header("Location: ../dist/index.php?error=wrongpassword");
                    exit();
                }
                elseif($pwdCheck == true){
                    session_start();
                    $_SESSION['userId'] = $row['idUsers'];
                    $_SESSION['userName'] = $row['userName'];

                    header("Location: ../dist/index.php?login=success");
                    exit();

                }
                else{
                    header("Location: ../dist/index.php?error=wrongpassword");
                    exit();
                }
            }
            else{
                header("Location: ../dist/index.php?error=nouser");
                exit();
            }
        }
    }

}
else{
    header("Location: ../dist/index.php");
    exit();
}