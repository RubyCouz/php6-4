<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 4</title>
  </head>
  <body>
    <p>

    <?php
    if (isset($_GET['language']) && isset($_GET['server'])) // si on a le les deux paramêtres, test les variable language et server
    {
echo $_GET['language'] . ' ' . $_GET['server'];
} else //manque de paramêtre
{
  echo 'manque de renseignement';
}
     ?>
   </p>
  </body>
</html>
