<?php
    
    // function _load_view($viewName) {
    //     $file = "./view/" . $viewName . ".php";

    //     if(file_exists($file)) {
    //         ob_start();
    //         require $file;
    //         ob_end_flush();
    //     } else {
    //         trigger_error("Not found", E_USER_ERROR);
    //     }
    // }
    include './database.php';

    // $sql = "CREATE TABLE user (
    //             id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    //             firstname VARCHAR(30) NOT NULL,
    //             surname VARCHAR(30) NOT NULL,
    //             email VARCHAR(50),
    //             password VARCHAR(50),
    //             gender VARCHAR(50),
    //             birthday VARCHAR(50),
    //             registered_date TIMESTAMP
    //             )";
    $firstname = $_POST['first_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    
    $insert_sql = "INSERT INTO user (firstname, surname, email, password, gender, birthday) 
            VALUES ('$firstname', 'Naing Tun', '$email', 'ppddee', '$gender', '16/03/1992')";

    $conn->exec($insert_sql);

    echo "Table user created successfully";