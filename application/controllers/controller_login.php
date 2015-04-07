<?php
session_start();
    class Controller_Login extends Controller {
        function action_index() {
            if($_SESSION['login'] == 'true') {
                redirect('login');
            }else{
                $this->view->load('common/header_view');
                $this->view->load('login_view');
            }
        }
        function action_sing_up() {
            if(isset($_POST['username']) && isset($_POST['password'])) {
                $login = $_POST['username'];
                $password = $_POST['password'];
                if($login == "admin" && $password == "admin") {
                    $_SESSION['login'] = "true";
                     redirect('index');
                } else {
                     redirect('login');
                }
            } else {
                $this->view->load('login_view');
            }
        }

        function action_logout() {
            session_destroy();
            redirect('login');
        }
    }
