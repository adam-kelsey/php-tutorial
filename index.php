<!DOCTYPE html>
<html>
<body>

<?php
echo "This is the php tag";
?>

<?php  #opening php tag

$a = 34; #semi colon required
$b = $a * 34 - 34;    #expression where output is assigned to b variable
echo $a;  #command to print a

?>  #closing php tag



<?php

$price = 1;
$Price = 2; #PHP is case sensitive, these are 3 different variables.
$PRICE = 3;

?>



<?php

define("SIZE", 300); 
define("EDGE", 100); 

#SIZE = 100;  This is a constant, it can not be assigned a different value like a variable. If this line is uncommented the script will fail. 

echo SIZE;
echo EDGE;

echo "\n";

?>



<?php  #A literal is the assignment of a value to a variable. In this case, string Jane and number 17 are literals.

$name1 = "Jane ";
$age1 = 17;

$name2 = "Rose ";
$age2 = 16;

echo "Patrick 34\n";
echo "Luke 22\n";

echo $name1, $age1, "\n";
echo $name2, $age2, "\n";

?>

</body>
</html>