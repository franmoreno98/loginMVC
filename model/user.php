<?php
    class User{
        //Atributos
        private $id_user;
        private $email;
        private $passwd;
        //Constructor
        public function __construct($email, $passwd){
            $this-> email=$email;
            $this-> passwd=$passwd;
        }
        //Metodos GETTERS AND SETTERS
        //metodo get para devolver valores y set para meter valores
        /**
         * Get the value of passwd
         */ 
        public function getPasswd()
        {
                return $this->passwd;
        }

        /**
         * Set the value of passwd
         *
         * @return  self
         */ 
        public function serPasswd($passwd)
        {
                $this->passwd = $passwd;

                return $this;
        }

        /**
         * Get the value of id_user
         */ 
        public function getId_user()
        {
                return $this->id_user;
        }

        /**
         * Set the value of id_user
         *
         * @return  self
         */ 
        public function setId_user($id_user)
        {
                $this->id_user = $id_user;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }
   }
?>