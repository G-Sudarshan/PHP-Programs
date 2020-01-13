<?php
//use of if-else statement with Logical operator...
$d = date("D");
if($d == "Sat" || $d == "Sun")
{
    echo "Have a nice Weekend!";
} 
else
{
    echo "Have a nice day! Today there was no Holiday";
}
?>