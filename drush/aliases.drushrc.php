<?php
// Don't change anything here, it's magic!

 global $aliases_stub;
 if (empty($aliases_stub)) {
     $ch = curl_init();
     curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
     curl_setopt($ch, CURLOPT_HEADER, 0);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($ch, CURLOPT_URL, 'https://drush-alias.lagoon.amazeeio.cloud/aliases.drushrc.php.stub');
//     curl_setopt($ch, CURLOPT_URL, 'https://gist.githubusercontent.com/shreddedbacon/8d6a92c349d39221477ec8272b68b226/raw/1801bd08675cfd72ec1f60a990e4d7c5b66b6226/stub.php');
     curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
     $aliases_stub = curl_exec($ch);
     curl_close($ch);
 }
 eval($aliases_stub);
