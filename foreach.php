<!DOCTYPE html>
<html>
<body>

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
$numbers = array(4, 6, 2, 22, 11);
// asort($age);

foreach($numbers as $key => $value) {
    // echo "Key=" . $x . ", Value=" . $x_value;
    echo "<pre>".$key."/".$value."</pre>";
    echo "<br>";
}
?>

</body>
</html>