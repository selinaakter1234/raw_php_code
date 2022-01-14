<?php

// class 1
$name = "Selina Akter";
echo $name;
echo "<br>";
$intitute_name = "Southeast University";
echo $intitute_name;
//constant
define('USERNAME',"selinaakhter42779@gmail.com");
echo USERNAME;
echo "<br>";
//concat---- string/text
$first_name="Selina";
$last_name="Akter";
echo "<b>Full name:</b>". $full_name= $first_name.' '. $last_name;
echo "<br>";
$intitute_name = "Southeast University";
echo "<b>Institute name:</b>".$intitute_name;
echo "<br>";
echo "<br>";
// "<b>M:</b>".
//string method

$main_text=" Bangladesh won the toss, Bangladesh opted to bat, Bangladesh put up a below par total, Bangladesh lost. You've seen this movie before in this series but anyone who told you this one was no different would have to be treated with scepticism. Because although it looked like the same script might play out, a sensational final over from Mahmudullah took Bangladesh to the brink of a famous victory. It went down to the final delivery, which Mohammad Nawaz carved over extra cover for a boundary to complete a clean sweep for Pakistan, and a heart-breaking loss for their opponents.   ";
echo "<b>Main text:</b>". $main_text;
echo"<br>";
echo"<br>";
//total chars;
echo  "<b>Total charecter:</b>".strlen($main_text);
echo"<br>";
//total word
echo "<b>Total word</b>:".str_word_count($main_text);
echo"<br>";
//white space remove
echo  "<b>left trim:</b>:".strlen(ltrim($main_text));
echo"<br>";
echo  "<b>right trim</b>:".strlen(rtrim($main_text));
echo"<br>";
echo  "<b>trim</b>:".strlen(trim($main_text));
echo"<br>";

//string reverse;
echo  "<b>reverse</b>:".strrev($main_text);
echo"<br>";
echo"<br>";

//cse transform
echo  "<b>lower text:</b>:".strtolower($main_text);
echo"<br>";
echo"<br>";
echo  "<b>upper text:</b>:".strtoupper($main_text);
echo"<br>";
echo"<br>";
echo "<b>Replacement:</b>". str_replace('win','loss', $main_text);
echo"<br>";
echo"<br>";
//string er position
echo "<b>word position:</b>". strpos($main_text, 'toss');
echo"<br>";

// password
$my_name="musfiq";
echo"<br>";
echo  "<b>password</b>:".md5 ($my_name);
echo"<br>";
echo  "<b>password</b>:".md5 (strtoupper($my_name));
echo"<br>";
//arithmatic operation;
echo "<h2>arithmatic operation</h2>";
$num1=50;
$num2=45;
echo "<b>Addition:</b>:". $add = $num1 + $num2;
echo"<br>";
echo "<b>Substraction:</b>:".$sub = $num1 - $num2;
echo"<br>";
echo "<b>Multiplication:</b>:".$sub = $num1 * $num2;
echo"<br>";
echo "<b>Division:</b>:".$sub = $num1 / $num2;
echo"<br>";
echo "<b>Mod:</b>:".$sub = $num1 % $num2;
echo"<br>";



//function
echo "<h2>function</h2>";
function subtract($num3,$num4)
{

  echo $sub = $num3 - $num4;

}
subtract(100,80);
echo"<br>";
subtract(100,70);
echo"<br>";
subtract(100,50);

?>
