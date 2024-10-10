<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align:center">ushtrimi peste</h1>
    <?php
    //////detyra e pare///////

      $a=rand(1,10);
      $b=rand(1,10);

     if($a<$b){
        echo "varibla a eshte e barabart me varibla b";
     }
     elseif($a==$b){
        echo "varibla a eshte e barabart me variblen b";
     }
     else {
        echo "variabla b eshte me e vogle se varibla a";
     }
      echo "<hr>";
    //////////////detyra e dyte/////////

    $c=rand(-20,20);
    switch($c){
        case ($c<0): echo "numri eshte negativ";
         break;

         case  $c>0: echo "numeri eshte pozitiv";
         break;

         default: echo "numri eshte 0";
         break;
    }
    ////////////detyra e trete////////////
    echo "<hr>";

    $temp=rand(5,35);

    switch($temp){
        case $temp<18: echo "<p style='color:blue'>Tempertura e ulet </p>";
        break;

        case $temp<=25: echo "<p style='color:orange'>Tempertura e normale </p>";
        break;

        case $temp<35: echo "<p style='color:red'>Tempertura e larta </p>";
        break;
    }
     echo "<hr>";
    //////detyra e kater/////////

    $usernmae="shkolladigitale123";
    $password="shkolladigitale";

     if($usernmae=="shkolladigitale123" and $password="shkolladigitale"){
        echo "<h1>kalon</h1>";
     }
     else{
        echo "<h1> nuk kalon</h1>";
     }

     ///////detyra e paset////////

     echo "<hr>";
     $produktet=rand(1,700);

     switch( $produktet){
        case $produktet<100: echo "<p> Duhet te prodhohen produkete  te reja</p>";
        break;

        case $produktet<500: echo "<po> Numri i produkteve eshte ne rregull</p>";
        break;


        case $produktet>500: echo "<p> Prodhimi duhet te ndalet, numri i madhe i produktit</p>";
        break;
     }

     ////////detyra e gjashte/////////

     echo "<hr>";

     $fjala="programming";
     $length=strlen($fjala);


     switch ($length){
        case $length<5: echo "Fjala ka ma pak se 5 shkronja";
        break;

        case $length<=10: echo "Fjala ka 5 deri ne 10 shkronja";
        break;

        case $length<20: echo "Fjala ka me shume se 5 shkronja dhe me pak se 20 shkronja";
        break;
     }

     ////////detyra s shtat /////////
   echo "<hr>";
     $piket=rand(1,100);

     switch($piket){
        case $piket<50: echo "Ju keni $piket 50 ne provim dhe nota juaj eshte 5";
        break;

        case $piket<60: echo "Ju keni $piket 60 ne provimi dhe nota juaj eshte 6";
        break;

        case $piket<60: echo "Ju keni $piket 60 ne provimi dhe nota juaj eshte 6";
        break;
 
        case $piket<80: echo "Ju keni $piket 80 ne provimi dhe nota juaj eshte 8";
        break;

        case $piket<90: echo "Ju keni $piket 90 ne provimi dhe nota juaj eshte 9";
        break;
   
        case $piket<100: echo "Ju keni $piket 100 ne provimi dhe nota juaj eshte 100";
        break;
     }

    //////// DETYRA E TETE /////
  echo "<hr>";
    $x=7;
    while($x<10){
    echo "$x";
    $x++;
    }

    $y=7;
    do{
      echo "$y";
      $y++;
    }
    while($y<5);

    ///////detyra e nante/////////

    for($g=10; &g>2; $g=2){
        echo "$g";
    }


    ?>
</body>
</html>