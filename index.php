<?php
echo 'Hello <br>';
//Return the length of the string "Hello world!"
echo strlen("Hello world!");
//The PHP str_word_count() function counts the number of words in a string.
echo str_word_count("Hello world!");
//The PHP strrev() function reverses a string.
echo strrev("Hello world!");
//strpos() - Search For a Text Within a String
echo strpos("Hello world!", "world");
//The PHP str_replace() function replaces some characters with some other characters in a string.
echo str_replace("world", "Dolly", "Hello world!");
/*
    switch (n) {
  case label1:
    code to be executed if n=label1;
    break;
  case label2:
    code to be executed if n=label2;
    break;
  case label3:
    code to be executed if n=label3;
    break;
    ...
  default:
    code to be executed if n is different from all labels;
}
*/
$colors = array('red', 'green', 'blue', 'yellow', 'brown');
foreach ($colors as $c){
    echo $c .', ';
}
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
/*
    In PHP, there are three types of arrays:

        Indexed arrays - Arrays with a numeric index
        Associative arrays - Arrays with named keys
        Multidimensional arrays - Arrays containing one or more arrays
 */
echo count($cars);
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }
  //PHP - Multidimensional Arrays
  $carsM = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
    echo $carsM[0][0].": In stock: ".$carsM[0][1].", sold: ".$carsM[0][2].".<br>";
    echo $carsM[1][0].": In stock: ".$carsM[1][1].", sold: ".$carsM[1][2].".<br>";
    echo $carsM[2][0].": In stock: ".$carsM[2][1].", sold: ".$carsM[2][2].".<br>";
    echo $carsM[3][0].": In stock: ".$carsM[3][1].", sold: ".$carsM[3][2].".<br>";


    for ($row = 0; $row < 4; $row++) {
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
          echo "<li>".$carsM[$row][$col]."</li>";
        }
        echo "</ul>";
      }
      /* 
        sort() - sort arrays in ascending order
        rsort() - sort arrays in descending order
        asort() - sort associative arrays in ascending order, according to the value
        ksort() - sort associative arrays in ascending order, according to the key
        arsort() - sort associative arrays in descending order, according to the value
        krsort() - sort associative arrays in descending order, according to the key
      */
      rsort($cars); 
      $clength = count($cars);
      for($x = 0; $x < $clength; $x++) {
        echo $cars[$x];
        echo "<br>";
      }
        $numbers = array(4, 6, 2, 22, 11);
        sort($numbers);


        krsort($age);
        foreach($age as $x => $x_value) {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
          }
            $html = '<form action="welcome.php" method="post">
            Name: <input type="text" name="name"><br>
            E-mail: <input type="text" name="email"><br>
            <input type="submit">
            </form>' ;
             
