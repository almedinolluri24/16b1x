<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
      $a="Welcome to php";
      echo $a;

      $b=93;
      echo "<br>vlera e variables b eshte : $b";
      echo '<br>vlera e varibles b eshte:' .$b;

      $c=9;
      function a(){
        global $c;
        echo ("<br>$c");
      };
      a();

      echo ("<br>");

      $d="hello";
      function b(){
        global $d;
        return $d;
    }
   echo "<h1>".b(). "</h1>";


   function c(){
     $a=12;
     $b=23;
     $c=$a+$b;
     echo "shuma e numrave $a dhe $b eshte:  $c<br>";
     print 'shuma e numrave ' .$a. 'dhe' .$b. 'eshte:' .$c.'<br>';
   };
   c();

    $f=85;
    function d(){
         global $f;
         $a=59;
         $b=$a+$f;
         echo "shuma e numarve $f dhe $a eshte: $b";

    };
    d();
    echo "<br>";

    echo  strlen("hello world");
    echo "<br>";
    echo "gjatesia e stringut eshte ".strlen("hello world")." karaktere ";

    echo "<br>";
    $j="hello PHP";
    $i=strlen($j);//metoda  per numrimin e fjaleve te stringut
    echo strlen($j);
    echo "<br>gjatesi e stringut ehste: $i katrorit<br>";

    $k="Debugging is like a movie" ;
    $l=str_word_count($k);//metoda per numerimin e fjaleve te stringut
    echo "<br> Numri i fjalve ne stringun e mesiprem eshte: $l fjale";


    // single line commnet
    # single line commnet
    /*
   multiple line comment
   */

   echo "<br>";
   echo strpos("ne jemi duke mesuar php","php");

   echo "<br>";
   echo strpos("ne jemi duke mesuar php","javascript");
 
   echo "<br>";
   $m="envery pice of code your write is a lessen";
   echo strpos($m,"write");

   echo "<br>";
   $m="edhe sot do te bejm nje perseritje te php";
   echo strpos($m,"go");
    
?>
</body>
</html>