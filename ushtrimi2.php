<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $stringu1="PHP eshte gjuhe programuese skriptuese e bazuar ne server";
    $gjatesia=strlen($stringu1);
    echo 'Numri i karaktereve te stringut eshte: ' .$gjatesia;
    echo "<br>Numri i karaktereve te stringut eshte: $gjatesia";
    /////////
    echo "<hr>";
    $fjalet=str_word_count($stringu1);
    echo "Numri i fjaleve te stringut eshte: $fjalet fjale.";
    /////////
    echo "<hr>";
    $big=strtoupper($stringu1);
    echo "$big";
    /////////
    echo "<hr>";
    $small=strtolower($big);
    echo "$small";
    /////////
     echo "<hr>";
     $reverse=strrev($big);
     echo "$reverse";
     /////////
     echo "<hr>";
     $nderrimi=str_replace("PHP","SQL",$big);
     echo "$nderrimi";
     ////////
     echo "<hr>";
     echo "$small $big";
     echo $small." ".$big;
    /////////
     echo "<hr>";
     $x=min(72,18,4,39);
     $y=max(72,18,4,39);
     echo "Numri me i vogel ne vargun e numrave eshte: $x";
     echo "<br>Numri me i madhe ne vargun e numrave eshte: $y";
     ////////
     echo "<hr>";
     $nr1=max(12,55,100,3);
     $nr2=min(95,16,42,8);
     $pjestimi=$nr1/$nr2;
     echo "Pjestimi i numrit $nr1 me numrin $nr2 eshte: $pjestimi";
     ////////
     echo "<hr>";
     $rrenja=sqrt(49);
     echo "Rrenja katrore e 49 eshte: $rrenja";
     $fuqizimi=pow(2,4);
     echo "<br> Fuqizimi i numrit 2 ne eksponentin 4 eshte: $fuqizimi";
    //////////
    echo "<hr>";
    $rrenja2=sqrt(81);
    $fuqia2=pow(3,2);
    $shumezimi1=$rrenja2 * $fuqia2;
    echo "Shumezimi i rrenjese katrore te 81 me 3 ne fuqine e 2 eshte: $shumezimi1";
    //////////
    echo "<hr>";
    $rrumbullaki=round(12.7);
    echo "$rrumbullaki";
    echo "<hr>";
    $rrumbullaki2=round(81.5);
    echo "$rrumbullaki2";
    echo "<hr>";
    $rrumbullaki3=floor(3.99);
    echo "$rrumbullaki3";
    echo "<hr>";
    $rrumbullaki4=ceil(3.001);
    echo "$rrumbullaki4";
   //////
   echo "<br>";
   echo strpos("ne jemi duke mesuar php","javascript");
   echo "<hr>";ss
    ?>
</body>
</html>