<?php

namespace app;


class Email{
    private $email;
    public function __construct()
    {
        echo "Class email de app <br>";
    }

    /**
     * @param $email
     * @return String
     */
    public function setEmail($email){
        $this->email = $email;
        return "Ok";
    }
}