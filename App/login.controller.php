<?php
    session_start();
    require "App/db/db.php";
    require "App/models/user.model.php";

// LOGIN
    if(isset($_GET['action'])){
        if($_GET['action'] == 'login'){
            $db = new Db();
            $user = new User();

            $user->__set('db', $db->connect());
            $user->__set('email', $_POST['email']);
            $user->__set('pass', $_POST['pass']);

            $userInfo = $user->login();
            if(count($userInfo) == 1){
                $_SESSION['user_id'] = $userInfo[0]['user_id'];
                // echo $_SESSION['user_id'];

                header('location: painel.php');
            }else{
                echo 'Não foi possivel fazer o login';
            }
        }elseif($_GET['action'] == 'logout'){
            $user = new User;
            $user->logOut();
            header('location: index.php');
        }elseif($_GET['action'] == 'register'){
            $db = new Db;
            $user = new User;

            $user->__set('db', $db->connect());
            $user->__set('name', $_POST['name']);
            $user->__set('pass', $_POST['pass']);
            $user->__set('email', $_POST['email']);

            $user->register();
            header('location: index.php');
        }
    }
?>