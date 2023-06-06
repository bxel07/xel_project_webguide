<?php
    namespace xel\framework\Service;
    require_once __DIR__."/../../vendor/autoload.php";

    class auth extends BaseService{
        public function login() {
            $this->render('login/session_id/index');
        }

        public function register() {
            $this->render('login/session_id/register');
        }

        public function logout() {

        }
    }