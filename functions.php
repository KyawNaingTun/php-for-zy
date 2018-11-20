<?php
    
    function _load_view($viewName) {
        $file = "./view/" . $viewName . ".php";

        if(file_exists($file)) {
            ob_start();
            require $file;
            ob_end_flush();
        } else {
            trigger_error("Not found", E_USER_ERROR);
        }
    }