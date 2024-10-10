<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    define("x",23);
    define("y",46);
    define("z",x+y);
    echo "shuma e numrave ".x." ne numrin ".y." eshte:".z;
    echo"<hr>";

    $a=18;
    $a=(string)$a;
    var_dump($a);
    echo "<hr>";

    $b=true;
    $b=(string)$b;
    var_dump($b);//(string) perdoret per te konvertuar nje tip te te dhanve ne string//
     echo"<hr>";// metoda var_dump() perdoret per te identfikuar tipin e te dhenave te variables//

    echo "<hr>";
    $c=NULL;//NULL, e pavler
    $c=(string)$c;
    var_dump($c);

    echo "<hr>";
    $d="25 hello world 25";
    $d=(int)$d;
    var_dump($d);

    $e=true;
    $e=(int) $e;
    var_dump($e);
    echo "<hr>";

    echo "<hr>";
    $f=7;
    echo $f++;// post increment;
    echo "<br>".$f;

    $g=7;
    echo ++$g;// pre increment;
    echo "<hr>";
    echo "<br>".$g;

    echo "<hr>";
    if(7<8 xor 8>7){// operatori logjik xor;
      echo "e sakte";
    }
    else{
      echo "e pasakte";
    }
    echo "<hr>";

    if(12==12 && 13>8){
      echo " e sakte";
    }
    else{
    echo " e pasakte";
    }
    echo "<hr>";
   
    /////////detyra e pare////////

    $x=max(12,55,78,99,2);
    $y=min(12,55,78,99,2);
    $pjestimi=$x/$y;
    echo "<br> pjestimi i numrin $x me numrin $y eshte: $pjestimi";
    echo "<hr>";

  //////// detyra e dyte ////////

    $nr11=sqrt(49);
    $nr22=pow($nr11,2);
    echo "<br> fuqizimi i rrejes katrore te numrit 49 eshte:$nr22";
    echo "<hr>";

   //////// detyra e tret /////////

   $r1=rand(0,10);
   $r2=rand(50,60);
   $shuma=$r1+$r2;
   echo "shuma e numrit random $r1 me numrin random $r2 eshte: $shuma";
   echo "<hr>";

   ////// detyra e kater /////////

   $teksti= "programimo me i mire eshte ne javascript";
   $fjalet=str_word_count($teksti);
   echo "numri i fjalve ne string eshte: $fjalet";
   echo "<hr>";





?>
</body>
</html>