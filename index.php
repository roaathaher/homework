<?php
// function 1
$str = "roaa raed salleh abu thaher";

echo(str_word_count($str));
echo("<br>");
// function 2
$a1 = array("roaa","raed","3");
echo "a1 is: '".implode("'.'",$a1)."'<br>";
// function 3
$name="jood hassan zamzam taim hassan zamzam";
echo(substr_count($name,"hassan"));
echo("<br>");
// function 4
echo(substr("taim hassan zamzam", 4,10));
echo("<br>");

// function 5
echo(strrev("roaa raed thaher"));
echo("<br>");

// function 6
$str1="hello world";
print_r( str_split($str1,"2"));
echo("<br>");
//function 7

$str2= 'This is a Simple text.';

echo strpbrk($str2, 'S');// case sensitive
echo("<br>");
$str2= 'This is a Simple text.';

echo strpbrk($str2, 's');// case sensitive
echo("<br>");
// function 8
$fn="roaa roaa raed roaa";
echo substr_count($fn, 'roa');
echo("<br>");
echo substr_count($fn, 'ROA'); // case sensitive
echo("<br>");
// function 9
print"hello roaa!!";
echo("<br>");
//function 10
 echo str_pad("roaa", 10, "raed", STR_PAD_RIGHT ); 

?>