<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pertemuan 5 - Back End G</title>
</head>
<body>
    <h1>Hello World</h1>
    

    <?PHP 
    // Output
    echo '<h1>Hello world <br></h1>';
    print "Hello World<br>";

    //Variable di PHP
    $x = 80;
    $y = 10;
    $str = "<br>INI String";

    // ctrl + alt + down key
    //Ini cara untuk ngeprint variable di php
    echo 'INI Adalah Hasil Perkalian '.$x*$y.'<br>';
    echo 'INI Adalah Hasil Pembagian '.$x/$y.'<br>';
    echo 'INI Adalah Hasil Penjumlahan '.$x+$y.'<br>';
    echo 'INI Adalah Hasil Pengurangan '.$x-$y.'<br>';
    echo 'INI Adalah Hasil Modulus '.$x%$y.'<br>';
    echo 'INI Adalah Hasil Exponetial '.$x**$y.'<br>';
    echo $str.'<br>';


    //Selection
    //kalo grade 90 - 100 --> A
    //Klo grade 80 - 90 --> B
    //grade 65 - 80 --> C
    $grade = 64;
    if($grade >=90 && $grade <=100){
        echo "A<br>";
    }else if($grade >=80 AND $grade <=90){
        echo 'B<br>';
    }else if($grade >=65 AND $grade <=80){
        echo "C<br>";
    }else{
        echo 'Nilai tidak tuntas<br>';
    }

    //while loop
    $x = 0;
    while($x<=10){
        echo 'Bilangan ke-'.$x.'<br>';
        $x++;
    }


    //for loop
    for($i=0; $i<10; $i++){
        echo 'Bilangan ke-'.$i.'<br>';
    }

    //array
    $arr = array(1, 55, 77, 43, 6, 2, 6, 3);
    sort($arr);
    foreach ($arr as $value) {
        echo 'Nilai ke-'.$value.'<br>';
    }


    //array assosiative
    $mahasiswa = array(
        "Nama" => "Jon",
        "GPA" => "3.8",
        "NIM" => "2501960902"
    );

    // echo $mahasiswa["Nama"];
    foreach ($mahasiswa as $x => $value) {
        echo 'Key '.$x.'<br>';
        echo 'Value '.$value.'<br>';
    }


    function pesan(){
        echo 'Hello World Function';
    }
    pesan();

    function hitung($a, $b){
        echo $a**$b;
    }
    hitung(2,3);
    
    echo str_word_count("Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex excepturi iure debitis! Repellat alias nobis, aperiam quo magni cupiditate amet.");
    ?>

   
    
</body>
</html>