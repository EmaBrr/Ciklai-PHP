<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/app.css">
    <title>Ciklai</title>
</head>
<body>

<?php

// 1. Naršyklėje nupieškite linija iš 400 “*”. 
//  a) Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;

echo "<h3>Pirma užduotis a)</h3>";

echo "<p>";
for ($i = 0; $i < 400 ; $i++) {
    echo "*";
};
echo "</p>";

//  b) Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”; 
echo "<h3>Pirma užduotis b)</h3>";

for ($i=0; $i < 8; $i++) { 
    for ($j = 0; $j < 50 ; $j++) {
    echo "<span>*</span>";
    };
    echo "<br>";
};

// 2.Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais ir suskaičiuokite kiek tarp jų yra didesnių už 150.  
// Skaičiai didesni nei 275 turi būti raudonos spalvos.
echo "<h3>Antra užduotis</h3>";

$counter = 0;

for ($i=0; $i < 300; $i++) { 
    $random = rand(0, 300);
    if ($random > 150) {
        $counter = $counter + 1;
    }
    if ($random > 275) {
        echo "<span style = 'color: red';>$random </span>";
    } else {
    echo "$random ";
    };
};
echo "<br>";
echo "<br>";
echo "Kiek skaičių yra didesnių nei 150: $counter";

// 3.Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476), 
// kurie dalijasi iš 77 be liekanos. Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio neturi būti. 
// Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane.
echo "<h3>Trečia užduotis</h3>";

$atsitiktinis_skaicius = rand(3000, 4000);

echo "$atsitiktinis_skaicius";
echo "<br>";
echo "<br>";

for ($i=0; $i < $atsitiktinis_skaicius; $i++) { 
    $temp = floor($i / 77);
    $temp2 = $i - (77 * $temp);
    $temp3 = floor($atsitiktinis_skaicius / 77);
    $temp4 = 77 * $temp3;

   if ($i != 0 && $temp2 == 0 && $i != $temp4) {
      echo "$i, ";
   };

   if ($i == $temp4) {
    echo "$i. ";
   };

};

// 4. Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”. Panaudokite css stilių, kad kvadratas ekrane atrodytų kvadratinis.
echo "<h3>Ketvirta užduotis</h3>";
echo "<div class = 'kvadratas'>";
for ($i=0; $i < 100; $i++) { 
    for ($j = 0; $j < 100 ; $j++) {
    echo "<span class = 'kvadrato__span'>*</span>";
    };
    echo "<br>";
};
echo "</div>";

// 5. Prieš tai nupieštam kvadratui nupieškite raudonas istrižaines.
echo "<h3>Penkta užduotis</h3>";

echo "<div class = 'kvadratas'>";
for ($i=0; $i < 20; $i++) { 
    for ($j = 0; $j < 20 ; $j++) {
        echo "<span class = 'kvadrato__span'>*</span>";
    };
    echo "<br>";
};
echo "</div>";

// 6. Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija, kur 0 yra herbas, 
// o 1 - skaičius. Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas. 
// Suprogramuokite keturis skirtingus scenarijus kai monetos metimą stabdome:
// a) Iškritus herbui;
echo "<h3>Šešta užduotis</h3>";

$S = 0;
$H = 0;

for ($i=0; true; $i++) { 
    $metimas = rand(0, 1);
    echo "$metimas";
    echo "<br>";
    if ($metimas == 1) {
        echo "Skaičius";
        echo "<br>";
    } else {
        $H = $H + 1;
        $H += 1;
        $H++;
        if ($H != 0) {
            echo "Iškrito herbas - stabdom.";
            break;
        }
    };
};

// while(true){
//     if(rand(0,1) == 0){
//         echo "H";
//         break;
//     }
//     echo "S";
// }

echo "<br>";
echo "<br>";
// b) Tris kartus iškritus herbui;

$S1 = 0;
$H1 = 0;

for ($i=0; $i < 100; $i++) { 
    $metimas = rand(0, 1);
    echo "$metimas";
    echo "<br>";
    if ($metimas == 1) {
        echo "Skaičius";
        echo "<br>";
    } else {
        $H1 = $H1 + 1;
        echo "Herbas";
        echo "<br>";
        if ($H1 == 3) {
            echo "Herbas iškrito 3 kartus - stabdom.";
            break;
        }
    };
};
echo "<br>";
echo "<br>";
// c) Tris kartus iš eilės iškritus herbui;

$S1 = 0;
$H1 = 0;
for ($i=0; $i < 100; $i++) { 
    $metimas = rand(0, 1);
    echo "$metimas";
    echo "<br>";
    if ($metimas == 1) {
        echo "Skaičius";
        $H = 0;
        echo "<br>";
    } else {
        $H1 = $H1 + 1;
        echo "Herbas";
        echo "<br>";
        if ($H1 == 3) {
            echo "Herbas iškrito 3 kartus - stabdom.";
            break;
        }
    };
};


?>
    
</body>
</html>