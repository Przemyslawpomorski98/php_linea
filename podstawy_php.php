<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>



<?php 
  $zmienna = 5;
  for ($i=0; $i < $zmienna; $i++) { 
     
    for ($j=0; $j <= $i; $j++) { 
      echo "*";
    }
    echo "<br>";
  }
?>



<?php 

/*

$nazwa_zmiennej = "tekst przyładowy";

$Nazwa_zmiennej = "tekst drugi";

$suma = $nazwa_zmiennej . $Nazwa_zmiennej . $Nazwa_zmiennej;


$typ_zmiennej_a = gettype($nazwa_zmiennej);




$number = 4;


// var_dump($nazwa_zmiennej);
// die();

// define(argument1,argument2);
define("ADRES_URL","localhost");
// echo ADRES_URL;


// print $number;


$dec = 1;
// var_dump($dec);

$neg = -1;
// var_dump($neg);

$hexa = 0x1A;
// var_dump($hexa);

$octa = 0123;
// var_dump($octa);




$tak_lub_nie = false;

// var_dump($tak_lub_nie);
// echo($tak_lub_nie);




// tablice

$miasto_wroclaw = "Wrocław";
$miasto_cracow = "Kraków";
$miasto_katokato = "KatoKato";


// tablice indexowana
$miasta = array("Wrocław","Kraków","KatoKato");
$liczby = array(3,7,10,1);

// $miasta[0] = "Wrocław po zmianach"; 
// $miasta[1] = "Kraków bez autostrad"; 
// var_dump($miasta);

// rosnąco
// sort();


// malejąco
// rsort();


// var_dump($liczby);

// tablice asocjacyjne
$ludzie = array("Józef"=>24,"Albert"=>78,"Grażyna"=>45,"Marek"=>18);
// $ludzie["Albert"] = 45;
// $ludzie["Józef"] = 45;

// rosnąco po nazwie/kluczu np. "Albert"
// ksort();


// malejąco po nazwie/kluczu np. "Albert"
// krsort();


// rosnąco po wartości
// asort();


// malejąco po wartości
// arsort();


// krsort($ludzie);
// var_dump($ludzie);

$budynek_ulica = array(
  "Weglokoks" => "Mickiewicza 29",
  "Inny" => "Inny adres"
);

// var_dump($budynek_ulica);
// echo $budynek_ulica["Weglokoks"];

// tablica wielowymiarwa
$ludzie = array(
  array(
    "imie" => "Zbyszek",
    "wiek" => 34
  ),
  array(
    "imie" => "Alojzy",
    "wiek" => 102
  ),
  array(
    "imie" => "Grażyna",
    "wiek" => 34
  ),
  array(
    "imie" => "Janusz",
    "wiek" => 34
  ),
);
// echo "Pan " . $ludzie[0]["imie"] . " ma lat: " . $ludzie[0]["wiek"]; ?>



<h2>
  <!-- Pan --> 
  <?php  echo $ludzie[0]["imie"]; ?> 
  ma lat 
  <?php echo $ludzie[0]["wiek"]; ?> 
</h2>

<?php 

$budynki = array(
  'Weglokoks' => array(
    'ilosc_sal' => 234,
    'pietra' => 14
  ),
  'Supersam' => array(
    'ilosc_sal' => 45,
    'pietra' => 3
  )
);
// wypisanie wartosci elementu ilosc_sal w elemencie 1 o nazwie weglokoks
// echo($budynki['Weglokoks']['ilosc_sal']);


// operatory skrótowe

$x = 10;
$y = 3;


// równanie
  $x = $x + $y;
// jest takie samo jak:
  $x += $y;
  // echo $x;

// równanie
  $x = $x - $y;
// jest takie samo jak:
  $x -= $y;
  // echo $x;

// równanie
  $x = $x * $y;
// jest takie samo jak:
  $x *= $y;
  // echo $x;

// dzielenie bez reszty
  $x = $x / $y;
// takie samo
  $x /= $y;

// dzielenie z reszta
  $x = $x % $y;
// takie samo
  $x %= $y;



$d = 20;
$b = 10;


// porównanie samych wartości
var_dump($d == $b);

// porównanie samych wartości oraz typów zmiennych
var_dump($d === $b);

// element różny od drugiego - zaprzeczenie (wartości)
var_dump($d != $b);
// element różny od drugiego - zaprzeczenie (wartości oraz typy)
var_dump($d !== $b);
var_dump($d > $b);
var_dump($d < $b);
var_dump($d <= $b);
var_dump($d >= $b);



// inkrementacja ora preinkrementacja


// inkrementacja
$x = $x + 1;

// post-inkrementacja

$x = 1;
// $x++;
// echo $x++;

// pre-inkrementacja
// echo ++$x;

// dekrementacja
$x = $x - $x;

// post-dekrementacja
$x--;

// pre-dekrementacja
--$x;


$str = "tekst1";
$str_two = "tekst2";

$str = $str . $str_two;
// echo $str . "<br>"; 

$str .= $str_two;
// echo $str . "<br>";


// instrukcje warunkowe


// jeżeli (warunek){
//   wykonuje się wszystko wewnątrz
// }



$zmienna = "warunek";

// wywołanie zminnej z pominięciem błędów
// @$zmienna


if (@$zmienna != 'warunek_k' ) {
  // wartośc instrukcji warunkowej powinna sie wykonać
  // echo "test";
}

// if (@$zmienna) {
//   echo "zmienna istnieje";
// }else{
//   echo "zmienna nie istnieje";
// }

// if ($zmienna != 'warunek') {
//   echo "warunek";
// }elseif ($zmienna == 'warunek2' ) {
//   echo "warunek 2";
// }else{
//   echo "coś innego";
// }



$obiekty = array(
  'budynki' => array(
    array(
      'nazwa' => 'Weglokoks',
      'pietra' => 23
    ),
    array(
      'nazwa' => 'Coś innego',
      'pietra' => 23
    )
  ),
  'galerie' => array(
    array(
      'nazwa' => 'Katowicka',
      'pietra' => 2
    ),
    array(
      'nazwa' => 'Supersam',
      'pietra' => 3
    )
  )

);


$b = 0;
// echo $obiekty['budynki'][$b]['nazwa'];
// wyswietla nazwe "Weglokoks"

$b++;
// echo $obiekty['budynki'][$b]['nazwa'];
// wyswietla nazwe "Coś innego"




// if ($budynki["Weglokoks"]["pietra"] < 6) {
//   echo "budynek ma malo pieter";
// }else{
//   echo "normal duzo pieter";
// };

// echo 
// ($budynki["Weglokoks"]["pietra"] < 6) ? 'Budynek malo pieter' : 'Budynek ma duzo pieter';


// if ($budynki["Weglokoks"]["wybudowano"] == true) {
//   echo "Ilośc pięter: " . $budynki["Weglokoks"]["pietra"] . "<br>";
//   echo "Ilośc sal: " . $budynki["Weglokoks"]["ilosc_sal"] . "<br>";
// }else{
//   echo "Niestety, podany budynek nie istnieje, lub jest w trakcie budowy";
// }


// pętle 


// for (
//   argument 1 - deklaracja zmiennej licznikowej; 
//   argument 2 - warunek podczas którego pętla się wykonuje; 
//   argument 3 - wzrost/zmniejszanie sie zmiennej licznikowej) { 
  
//   tresc petli wykonywane po spelnieniu argumentow
// }

for ($i=0; $i < 10; $i++) { 
  
  // echo $i . "<br>";

}


// while ( warunek ) {
//   // wykonuje się tyle razy, aż do momenty gdy warunek nie będzie spełniony
// }

$i = 0;
while ( $i <= 10) {
  // echo "test"."<br>";
  $i++;
}


// do{
//   // wypisuje elementy do momentu gdy warunek przestanie być prawdziwy
// }while( warunek );

$i = 0;
do {
  echo $i;
  $i++;
} while ( $i <= 10);


// foreach dedykowany dla zwyklych tablic indexowanych
foreach ($tablica as $element_tablicy) {
  echo $element_tablicy;
}

// foreach dedykowany dla tablic asocjacyjnych
foreach ($tablica as $klucz/element_tablicy => $wartość) {
  echo $klucz;
  echo $wartość;
}


*/

// // tablice indexowana
// $miasta = array("Wrocław","Kraków","KatoKato");
// $liczby = array(3,7,10,1);

// // tablice asocjacyjne
// $ludzie = array("Józef"=>24,"Albert"=>78,"Grażyna"=>45,"Marek"=>18);

// $count = count($miasta);
// echo $count;
// for ($i=0; $i < $count; $i++) { 
//   echo $miasta[$i] . " <br>";
//   // echo $i . "<br>";
// }

// foreach ($ludzie as $klucz => $wartosc) {
//   echo $klucz . " - " . $wartosc . "<br>"; 
// }


// funkcje


// function nazwa_funcji( $zmienna, $zmienna_druga ){
// }

// function odejmowanie( $zmienna, $zmienna_druga ){
//   $zmienna = $zmienna - $zmienna_druga;
//   echo $zmienna;
// }

// $liczba = 10;
// $liczba_druga = 3;

// odejmowanie(259,250);




function wypisz_nazwe_budynku( $tablica ){

    foreach ($tablica as $budynek) {
      if ($budynek['wybudowano'] == true) {
        echo $budynek['nazwa'] . "<br>";
      }
    }

}


?> 









<!-- <?php 
$budynki = array(
    array(
      'nazwa' => 'Weglokoks',
      'pietra' => 23,
      'wybudowano' => true
    ),
    array(
      'nazwa' => 'Coś innego',
      'pietra' => 23,
      'wybudowano' => false
    ),
    array(
      'nazwa' => 'Supersam',
      'pietra' => 22,
      'wybudowano' => false
    ),
    array(
      'nazwa' => 'Dixie',
      'pietra' => 23,
      'wybudowano' => true
    ),
);
wypisz_nazwe_budynku($budynki);
?> -->






<!-- <h3>Witam</h3>
<h3>Witam</h3>
<h3>Witam</h3>
<h3>Witam</h3>
<h3>Witam</h3> -->


<?php /* ?>

<h3>Witam Państwa</h3>
<h3>Witam Państwa</h3>
<h3>Witam Państwa</h3>
<h3>Witam Państwa</h3>
<h3>Witam Państwa</h3>
<h3>Witam Państwa</h3>

<?php */ ?>











    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>