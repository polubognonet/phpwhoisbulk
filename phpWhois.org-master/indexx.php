
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php include "functions.inc.php"; ?>

    <form action="indexx.php" method="post">
      <textarea name="domain" rows="8" cols="80" placeholder="your domains"></textarea>
      <button type="submit" name="submit">Go</button>
    </form>

    <?php

    $allDomainsArray = explodedomains($_POST['domain']);

    foreach ($allDomainsArray as $key) {
      set_time_limit(15);
      $whois = new Whois();
      $query = $key;
      $result = $whois->Lookup($query,false);
      $domainInfo = $result['rawdata'];
      $domainYear = findyear($domainInfo);
      echo '<pre>';
      print_r($domainYear);
      echo '</pre>';
    }


     ?>

    <script type="text/javascript">

    </script>

  </body>
</html>
