<?php
   require __DIR__.'/vendor/autoload.php';

   use Kreait\Firebase\Factory;
   use Kreait\Firebase\ServiceAccount;

$factory = (new Factory)->withServiceAccount(__DIR__.'/wqms-e26bc-firebase-adminsdk-8w2y2-356cbcd322.json');
$database = $factory->createDatabase();

?>
