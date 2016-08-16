<?php
session_start();
#Require global properties
#require_once 'config.php';

class main {
    #MySQL Info

    #Session info
    var $id;
    var $loggedIn;
    var $admin = false;
    var $username;

    function __construct() {
        #Nothing fancy
    }

    #Set the currently logged in user
    function login($id)
    {
        session_start();
        $_SESSION['id'] = $id;
    }

    #Logout the user in the current session
    function logout()
    {
        session_unset();
        session_destroy();
    }

    #Send the user to a selected location and terminate the script
    function redirect($loc)
    {
        header("Location: ".WEBADDRESS.$loc);
        exit();
    }

    #Templating engine (The thing I wanted from this copy pasted code)
    #Send a template name, properties (optional), and interior content (optional)
    #This will return an html that will be written to the document
    function template($template, $arg = [], $content = null)
    {
        /** @noinspection PhpIncludeInspection */
        require_once('template/'.$template.'.php');
        call_user_func('draw_'.$template, $arg, $this, $content);
    }

    #Check is a value is not set or blank
    function nullOrEmpty($string) {
        return (!isset($string) || trim($string)==='');
    }
}

#Create a new instance of the main object to be used by the page
$app = new main();