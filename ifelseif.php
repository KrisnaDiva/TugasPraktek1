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
    else if($volume>=40){
        echo"Volume Normal<br>";
    }
    else{
        echo"Volume Kecil<br>";
    }

    //2
    $beli=10;//Pcs
    if($beli>=10){
        echo"Diskon 20%<br>";
    }
    else if($beli>=5){
        echo"Diskon 10%<br>";
    }
    else{
        echo"Tidak Dapat Diskon<br>";
    }

    //3
    $berat=70;//Kg
    if($berat>=70){
        echo"Baju Kamu XL<br>";
    }
    else if($berat>=60){
        echo"Baju Kamu L<br>";
    }
    else if($berat>=50){
        echo"Baju Kamu M,<br>";
    }
    else{
        echo"Baju Kamu S<br>";
    }

    //4
    $lama_tidur=7;//jam
    if($lama_tidur>8){
        echo"Kamu Tukang Tidur<br>";
    }
    else if($lama_tidur>=6 and $lama_tidur <=8){
        echo"Kamu Cukup Tidur<br>";
    }
    else{
        echo"Kamu Kurang Tidur<br>";
    }

     //5
     $nilai=60;
     if($nilai>=75){
         echo"Kamu Lulus<br>";
     }
     else if($nilai>=1){
         echo"Kamu Remedial<br>";
     }
     else{
         echo"Kamu Mengulang<br>";
     }
    ?> 

    
    </body>

</html>

