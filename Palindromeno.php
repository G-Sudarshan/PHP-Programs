<?php
// program to check no is palindrome or not
$no=121; $sum=0; $rem; $temp=$no;
while($no>0)
{
  $rem = $no%10;
  $sum=$sum*10+$rem;
  $no=$no/10;
}

if($sum==$temp)
{
  echo"Its Palindrome no."
}
else
{
  echo"Not a palindrome no.";
}
?>
