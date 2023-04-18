<html>
    <head>
    </head>

    <body>
    <?php
    //1
    $volume=97;
    if($volume>=80){
        echo"Volume Besar<br>";
    }
    else{
        echo"Volume Kecil<br>";
    }

    //2
    $beli=10;//Pcs
    if($beli>=10){
        echo"Diskon 20%<br>";
    }
    else{
        echo"Tidak Dapat Diskon<br>";
    }

    //3
    $berat=70;//Kg
    if($berat>=70){
        echo"Baju Kamu XL<br>";
    }
    else{
        echo"Baju Kamu S<br>";
    }

    //4
    $lama_tidur=7;//jam
    if($lama_tidur>=8){
        echo"Kamu Tukang Tidur<br>";
    }
    else{
        echo"Kamu Kurang Tidur<br>";
    }

     //5
     $nilai=60;
     if($nilai>=75){
         echo"Kamu Lulus<br>";
     }
     else{
        echo"Kamu Remedial<br>";
     }
    ?> 

    
    </body>

</html>

