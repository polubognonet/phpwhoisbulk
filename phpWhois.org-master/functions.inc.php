<?php

include 'src/whois.main.php';


   function findyear($domainInfo) {

   foreach ($domainInfo as $key) {
     $newDomainInfo = explode(' ', $key);
     if ($newDomainInfo[0] == "Creation") {
       $newDomainCreationDate = trim(preg_replace('/-/', ' ', $key));
       $newDomainCreationInfo = explode(' ', $newDomainCreationDate);
       $domainCreationYear = $newDomainCreationInfo[2];
       return $domainCreationYear;
       break;
     }
   }
}

  function explodedomains($domainsString) {

    $allDomains = explode("\r\n", $domainsString);
    return $allDomains;

  }

 ?>
