<?php
session_start();
    class Controller_Login extends Controller{
        function action_index(){
            if($_SESSION['login'] == 'true') {
                header("Location: http://localhost/index");
            }else{
                $this->view->load('common/header_view.php');
                $this->view->load('login_view.php');
            }
        }
        function action_sing_up() {
            if(isset($_POST['username']) && isset($_POST['password'])) {
                $login = $_POST['username'];
                $password = $_POST['password'];
                if($login == "admin" && $password == "admin") {
                    $_SESSION['login'] = "true";
                    header("Location: http://localhost/index");
                } else {
                    header("Location: http://localhost/login");
                }
            } else {
                $this->view->load('login_view.php');
            }
        }

        function action_logout() {
            session_destroy();
            header("Location: http://localhost/login");
        }

    }
