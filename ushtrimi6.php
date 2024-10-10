<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1 style="text-align:center">ushtrimi gjashte</h1>
    <?php
     ///// detyra e pare/////
     $a=2;
     while($a<=10){
        if($a==7){
            echo "Loop eshte ndaluar ne numrim 7";
            break;
        }
        echo "$a <br>";
        $a++;
     }
    /////DETYRA E DYTE/////
    echo "<hr>";


    $b=6;
    while($b<=14){
        if($b==12){
            echo" loop eshte ndalure ne 12";
            break;
        }
        echo "$b <br>";
        $b+=2;
    }

    echo "<hr>";
    ////// detyra e dyte//////

   $c=1;
   while($c<=5){
    if($c==3 or $c==4){
        $c++;
        continue;
    }
    echo "$c <br>";
    $c++;
   }

   echo "<hr>";
   ////// detyra e tret /////

   for($dita=1 ; $dita<=11 ; $dita++){
    if($dita==11){
        echo "sot rifilluat punen";
        break;
    }
    echo "Sot  eshte dita e $dita e pushimit <br>";
    }
    echo "<hr>";
   ////// detyra e kater //////

   $shuma=0;
   $kursimet=150;
   for($muaji=1; $muaji<=12; $muaji++){
     $shuma+=$kursimet;
     echo "Ne muajin e $shuma ju keni krsyers: $shuma EURO<br>";
   }
   echo "<hr>";

   //////detryra e peset//////

   $dita=1;
   for($litra=2 ; $litra<=40 ; $litra+=2){
      echo "Dita e $dita, keni pier $litra litra uje<br>";
      $dita++;
   }
   echo "<hr>";
   
   //////dita e gjashte/////


   for($dita=1;$dita<=7;$dita++){
    switch($dita){
        case 1 : echo "sot dita e Hane, keni ushtrime<br>";
        break;
        case 2 : echo "sot dita e Marte, keni pushime<br>";
        break;  
        case 3 : echo "sot dita e Merkure, keni ushtrime<br>";
        break;
        case 4 : echo "sot dita e Ejte, keni pushime<br>";
        break;
        case 5 : echo "sot dita e Premte, keni ushtrime<br>";
        break;
        case 6: echo "sot dita e Shtune, keni pushime<br>";
        break;
        case 7 : echo "sot dita e Dijele, keni ushtrime<br>";
        break;
    }
   }
   
   echo "<hr>";

   /////// detyra e shate//////

   for($dita=1;$dita<=7;$dita++){
    switch($dita){
        case 1 : echo "Sot dita e Hane, kemi menyja File Pule<br>";
        break;
        case 2 : echo "Sot dita e Marte, kemi menyja Pica  <br>";
        break;  
        case 3 : echo "Sot dita e Merkure, kemi menyja Spageti <br>";
        break;
        case 4 : echo "Sot dita e Ejte, keni menyja Hamburger<br>";
        break;
        case 5 : echo "Sot dita e Premte, kemi menyja Makarona <br>";
        break;
    }
   }

   echo "<hr>";

   /////// detyra e tete //////

   $matrica=array(1,3,5,7,9,);
    echo count($matrica);
    echo "<br>";
    echo $matrica[2];
    echo "<br>";
    echo $matrica [4];

   
 
    ?>
</body>
</html> 