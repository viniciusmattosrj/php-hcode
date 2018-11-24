<?php

    //phpinfo();
#    echo "Seja bem vindo ao Curso Completo com PHP7 da HCode";

$envio  = "teste/envio";
$backup = "teste/backup";

if(!is_dir($envio)) {
    mkdir("teste/envio");
}

if(!is_dir($backup)) {
    mkdir("teste/backup");
}

$filename = "DPSP";

/* Move o arquivo para backup */
if (!rename($envio, $backup .'/BKP'.date('dmYHis').'_'.$filename)) {
    die("Erro ao mover arquivo para backup.");
}

//if (!file_exists($backup . DIRECTORY_SEPARATOR . $filename)) {
    
 /*    $file = fopen($envio. DIRECTORY_SEPARATOR . $filename, "w+");
    
    fwrite($file, date("Y-m-d H:i:s"));
    
    fclose($file); */
  //  rename("{$envio}/{$filename}", "{$backup}/{$filename}");
//} 

//rename("{$envio}/{$filename}", "{$backup}/{$filename}");