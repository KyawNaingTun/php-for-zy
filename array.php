<!DOCTYPE html>
<html>
<body>

<?php
$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );
    
// for ($row = 0; $row < 4; $row++) {
//   echo "<p><b>Row number $row</b></p>";
//   echo "<ul>";
//   for ($col = 0; $col < 3; $col++) {
//     echo "<li>".$cars[$row][$col]."</li>";
//   }
//   echo "</ul>";
// }
echo "<ul>";
    foreach($cars as $car){
        echo "<li>";
        // print_r($car);
        echo "Name:".$car[0].", Stock:".$car[1].", Sold:".$car[2];
        echo "</li>";
    }
echo "</ul>";
?>

</body>
</html>