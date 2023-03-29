<?php
$mhs = array( 
   array("ardika", "1212121212", "denpasar") ,
   array("wahyu", "3214321234", "manado"),
   array("susanti", "1324123456", "jakarta"),
   array("fizi", "1678543215", "malang"),



);

foreach($mhs as $idx => $dta){
    echo "data ke-".$idx."<br>";
    foreach($dta as $nval){
        echo $nval."<br>";
    }
}