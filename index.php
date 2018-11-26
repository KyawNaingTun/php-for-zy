<?php
    //require
    require "functions.php";

    // print_r($_GET);
    // array('page' => 'about');
    // require './view/'.$_GET['page'].'.php';
    // _load_view($_GET['page']);
    //call function from function.php
    // familyName("kyaw naing Tun");


    $request_uri = explode("/", $_SERVER['REQUEST_URI']);
    $script_name = explode("/", $_SERVER['SCRIPT_NAME']);

    $uri = array_values(array_diff($request_uri, $script_name));

    if(empty($uri)) {
        $page = "welcome";
    } else {
        $page = $uri[0];
    }
    //load view
    _load_view($page);
?>
