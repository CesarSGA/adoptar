<?php
    include_once '../server/user/user.php';
    include_once '../server/user/user_session.php';

    $userSession = new UserSession();
    $user = new User();

    if(isset($_SESSION['user'])){
        $user->setUser($userSession->getCurrentUser());
        header("location: cart.php");

    }else {
        if(isset($_POST['username']) && isset($_POST['password'])){
            $userForm = $_POST['username'];
            $passForm = $_POST['password'];
            $user = new User();

            if($user->userExists($userForm, $passForm)){
                $userSession->setCurrentUser($userForm);
                $user->setUser($userForm);
                
                include_once 'my_adoptions.php';

            } else{
                echo '<script type="text/javascript">
                        alert("Nombre de usuario y/o password incorrecto");
                    </script>';
                include_once 'login_style.html';
            }
        } else{
            include_once 'login_style.html';
        }
    }
?>