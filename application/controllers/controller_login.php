<?php
session_start();
    class Controller_Login extends Controller {
        function action_index() {
            if($_SESSION['login'] == 'true') {
                redirect('index');
            }else{
                $this->view->load('common/header_view');
                $this->view->load('login_view');
            }
        }
        /*
        *   Sing in action for user 
        *   if email and pass isset  we are looking for  user with this email in db 
        *   then  chekign his password  if all okey return true;
        */
        function action_sing_in() {
            if(isset($_POST['username']) && isset($_POST['password'])) {
                $login = $_POST['username']; 
                $password = $_POST['password'];
                if(User::check_auth_data($login, $password) == true) {
                    $_SESSION['login'] = "true";  //create sessin for understanding user logged in or not
                    redirect('index');   // redirecting to main page
                } else {
                        redirect('login'); //redirectiong to login page to try agen 
                }
            } else {
                redirect('login');
            }
        }

        /*
        *    logout 
        *    destroy session.
        */
        function action_logout() {
            session_destroy();
            redirect('login');
        }
    }
