<?php
class usersDAO{
    
    public $USERS_NAME;
    public $USERS_LAST_NAME;
    public $USERS_EMAIL;
    public $USERS_PASSWORD;
    
    function getUSERS_NAME() {
        return $this->USERS_NAME;
    }

    function getUSERS_LAST_NAME() {
        return $this->USERS_LAST_NAME;
    }

    function getUSERS_EMAIL() {
        return $this->USERS_EMAIL;
    }

    function getUSERS_PASSWORD() {
        return $this->USERS_PASSWORD;
    }

    function setUSERS_NAME($USERS_NAME) {
        $this->USERS_NAME = $USERS_NAME;
    }

    function setUSERS_LAST_NAME($USERS_LAST_NAME) {
        $this->USERS_LAST_NAME = $USERS_LAST_NAME;
    }

    function setUSERS_EMAIL($USERS_EMAIL) {
        $this->USERS_EMAIL = $USERS_EMAIL;
    }

    function setUSERS_PASSWORD($USERS_PASSWORD) {
        $this->USERS_PASSWORD = $USERS_PASSWORD;
    }


    
}