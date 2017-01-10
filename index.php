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



<?php // List of keywords for php

abstract    and          array()     as          break
case        catch        class       clone       const  
continue    declare      default     do          else
elseif      enddeclare   endfor      endforeach  endif
endswitch   endwhile     extends     final       for 
foreach     function     global      goto        if  
implements  interface    instanceof  namespace   new   
or          private      protected   public      static
switch      throw        try         use         var 
while       xor

// List of language constructs
die()           echo()          empty()     exit()      eval()
include()       include_once()  isset()     list()      require()
require_once()  return()        print()     unset()     

?>


<?php //print will print the value of $a to the console, but not on a new line. Print only takes 1 arguement.

$a = 23;
print $a;

?>

<?php //echo is the same as print, but it takes more than 1 arguement

$a = 23;
$b = 24;

echo $a, "\n", $b, "\n";

?>



<?php //PHP scripts can receive command line arguments. They follow the name of the program. The $argv is an array holding all arguments of a PHP script. The $argc holds the number of arguments passed, including the name of the PHP script.

echo "There are $argc arguments\n";

for ($i=0; $i < $argc; $i++) {
    echo $argv[$i] . "\n";
}

?>



<?php //In PHP, we can create constants. A constant is a name for a value that, unlike a variable, cannot be reassociated with a different value. We use the define() function to create constants in PHP.

define("BLUE", "0000FF");

echo BLUE, "\n";

echo defined("BLUE");
echo "\n";

?>




<?php //these are predefined constants.

echo TRUE;
echo "\n";
echo PHP_VERSION;
echo "\n";
echo PHP_OS;
echo "\n";
echo __LINE__;
echo "\n";
echo __FILE__;
echo "\n";
echo DIRECTORY_SEPARATOR;
echo "\n";
echo PHP_DATADIR;
echo "\n";

?>



<?php //this is how you interpolate in php. same thing as interpolating in other languages, just different syntax

$age = 17;

echo "Jane is $age years old\n";   // simply returns the line with the age variable, which is 17

//only works in double quotes, if the line was echo 'Jane is $age years old\n'; it would print $age instead of 17

?>



<?php //file named common.php

define("VERSION", 1.12);

function get_max($x, $y) {
    if ($x > $y) {
        return $x;
    } else {
        return $y;
    }
}

?>

<?php //file named myfile.php

include "common.php";  //this is how you include other files i

echo "The version is " . VERSION . "\n";

$a = 5;
$b = 3;

echo get_max($a, $b), "\n";

?>

</body>
</html>