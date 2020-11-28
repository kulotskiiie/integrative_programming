<?php

class User
{
    public $name;
    public $username;
    public $email;

    function set_name($name)
    {
        $this ->name = $name;
    }
    function get_name()
    {
        return $this ->name;
    }
    function set_username($username)
    {
        $this ->username = $username;
    }
    function get_username()
    {
        return $this ->username;
    }
    function set_email($email)
    {
        $this ->email = $email;
    }
    function get_email()
    {
        return $this ->email;
    }

}
 $example = new User();
 $example ->set_name("Rose Kyla C. Fernandez");
 $example ->set_username("rosekyla.fernandez");
 $example ->set_email("rosekylaf@gmail.com");

 echo $example ->get_name(). " Added a friend" . "<br>";
 echo $example ->get_name(). " Posted a status";

?>