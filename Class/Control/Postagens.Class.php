<?php

    public class Postagens{

        private $User;
        private $UserApiCode;
        private $Tittle;
        private $TextPost;
        
        /*get das propriedades de uma postagem*/
        public function getUser(){
            return $this->User;
        }

        public function getUserApiCode(){
            return $this->UserApiCode;
        }

        public function getTittle(){
            return $this->Tittle;
        }

        public function getTextPost(){
            return $this->TextPost;
        }

        /*Definição do set das postagens*/
        public function setUser($user){
            $this->User = $user;
        }

        public function setUserApiCode($userapicode){
            $this->UserApiCode = $userapicode;
        }
        
        public function setTittle($tittle){
            $this->Tittle = $tittle;
        }

        public function setTextPost($textpost){
            $this->TextPost = $textpost;
        }

        public function InsertPost(){
            return parent::DBInsertPost($this);
        }
    }

?>