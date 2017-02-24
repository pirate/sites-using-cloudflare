<?php

$i = 0;
$file = 'sorted_unique_cf.txt';
$f = fopen($file, 'r');


$ipcache = [];

while (false !== ($line = fgets($f))) {
   // echo $line;
    $i++;
    $ip = gethostbyname(trim($line));

    if($ip){
        if(!isset($ipcache[$ip])){
            $w = exec('whois '.$ip.' | grep noc@cloudflare.com');
            if($w){
                $ipcache[$ip] = 1; // its cloudflare proxy
            }else{
                $ipcache[$ip] = 0; // this site doesnt use proxy
            }
        }
       if(isset($ipcache[$ip]) AND $ipcache[$ip])
           echo $line;
    }
}
