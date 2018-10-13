<?php

    class User {

        public $idUser;
        public $login;
        public $password;
        public $permission;

        function __construct($idUser, $login, $password, $permission){

            $this->idUser       = $idUser;
            $this->login        = $login;
            $this->password     = $password;
            $this->permission   = $permission;

        }

    }

?>