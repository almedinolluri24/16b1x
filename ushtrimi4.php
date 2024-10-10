DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ushtrimi i katert</h1>

    <?php
    $a=38;
    if($a>30){
        echo "Vlera eshte me e madhe se 30";
    }

    if($a<20){
        echo "<br> Vlera e variables eshte me e vogel se 20";
    }
    else{
        echo "<br> Vlera e variables eshte me e madhe se 20";
    }
    //////////////
    $b=12;
    $c=28;
    if($b<$c){
        echo "<br>Variabla b eshte me e vogel se variabla c";
    }
    elseif($b==$c){
        echo "<br> Variabla b eshte e barabart me variablen c";
    }
    else {
        echo "<br> Variabla b eshte me e madhe se variabla c";
    }

    $d=$c-$b;
    if($d<10){
        echo "<br> Vlera me e vogel se 10";
    }
    elseif($d<20){
        echo "<br> Vlera me e vogel se 20";
    }
    else{
        echo "<br> Vlera me e madhe se 20";
    }
    //////////////

    $ora=2;
    if($ora>6 and $ora<12){
        echo "<p style='color:blue'>Miremengjesi</p>";
    }
    elseif($ora>=12 and $ora<18){
        echo "<p style='color:orange'> Miredita</p>";
    }
    elseif($ora>18 and $ora<24){
        echo "<p style='color:red'> Mirembrema</p>";
    }
    else{
        echo "<p style='color:green'> Ora eshte ndermjet 00 deri ne 6 te mengjesit</p>";
    }
    ////////////////

    $dita=3;
    switch($dita){
        case 1: echo "E Hene";
        break;
        case 2: echo "E Marte";
        break;
        case 3: echo "E Merkure";
        break;
        case 4: echo "E Enjte";
        break;
        case 5: echo "E Premte";
        break;
        case 6: echo "E Shtune";
        break;
        case 7: echo "E Diele";
        break;
        default: echo "Sheno nje numer nga 1-7";
    }
    ///////////
    $ora2=rand(1,7);
    switch($ora2){
        case ($ora2>=1 && $ora2<=5): echo "<br> Dite e javes";
        break;
        case ($ora2>5 && $ora2<=7): echo "<br> Weekend";
        break;
    }
    ///////////

    $zbritja=rand(1,1000);
    switch($zbritja){
        case ($zbritja>0 and $zbritja<=100): echo "<br> Fituat 5% zbritje";
        break;
        case($zbritja>100 and $zbritja<=500): echo "<br> Fituat 10% zbritje";
        break;
        case($zbritja>500): echo "<br> Fituat 15% zbritje";
        break;
    }
    $BMI=rand(1,50);
    switch($BMI){
        case($BMI<18): echo "<br> Nenpeshe";
        break;
        case($BMI>=18 and $BMI<25): echo "<br> Peshe normale";
        break;
        case($BMI>=25 and $BMI<30): echo "<br> Mbipeshe";
        break;
        case($BMI>=30): echo "<br> Obezitet";
        break;
    }
    ?>
</body>
</html>