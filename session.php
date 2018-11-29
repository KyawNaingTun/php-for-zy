<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["email"] = $_POST['email'];
$_SESSION["password"] = $_POST['password'];
    // if(session['email'] == post['email'] && session['password'] == post['password']){
    //     "your logged in";   
    // }
// echo "Session variables are set.";
print_r($_SESSION['favcolor']);
?>

</body>
</html>