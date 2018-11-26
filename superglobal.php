<?php 
// $x = 75; 
// $y = 25;
 
// function addition() { 
//     $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
//     // $z = $x + $y;
// }
 
// addition(); 
// // echo $GLOBALS['z']; 
// echo $z;

// echo "PHP_SELF ------".$_SERVER['PHP_SELF'];
// echo "<br>";
// echo "SERVER_NAME ------".$_SERVER['SERVER_NAME'];
// echo "<br>";
// echo "HTTP_HOST -------".$_SERVER['HTTP_HOST'];
// echo "<br>";
// echo "SERVER_REQUEST -------".$_SERVER["REQUEST_METHOD"];
// echo "<br>";
// echo "HTTP_USER_AGENT ------".$_SERVER['HTTP_USER_AGENT'];
// echo "<br>";
// echo "SCRIPT_NAME -------".$_SERVER['SCRIPT_NAME'];
// print_r($_REQUEST);

?>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="name">
    Male <input type="radio" name="gender" value="male">
    Female <input type="radio" name="gender" value="female">
    <input type="submit">`
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    print_r($_REQUEST);
    // collect value of input field
    $name = $_REQUEST['name'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>

</body>
</html>