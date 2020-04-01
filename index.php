<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, banan!</h1>


<?
require __DIR__ . '/maksekeskus-1.3/vendor/autoload.php'; //Comment this line out if you are using Composer to build your project

use Maksekeskus\Maksekeskus;

// get your API keys from merchant-test.maksekeskus.ee or merchant.maksekeskus.ee
$shopId = 'f7741ab2-7445-45f9-9af4-0d0408ef1e4c';
$KeyPublishable = 'zPA6jCTIvGKYqrXxlgkXLzv3F82Mjv2E';
$KeySecret = 'pfOsGD9oPaFEILwqFLHEHkPf7vZz4j3t36nAcufP1abqT9l99koyuC1IWAOcBeqt';

// use TRUE if working against the Test environment
// see https://makecommerce.net/en/for-developers/test-environment/
$MK = new Maksekeskus($shopId,$KeyPublishable,$KeySecret,TRUE);

$context["currency"]="eur";
$context["country"]="ee";

// // get transaction näide
$transaction = array();
$transaction['amount'] = "55";
$transaction['currency'] = "EUR";
$transaction['reference'] = "tähtis korraldus";
$transaction['merchant_data'] = "testia_mk_ai";
$csr = array();
$csr['email'] = "maksekeskus.test.1585750667@mailinator.com";
$csr['ip'] = "80.235.22.114";
$csr['country'] = "ee";
$csr['locale'] = "et";
$body = array();
$body['transaction'] = $transaction;
$body['customer'] = $csr;
$data = $MK->createTransaction($body);


// $data = $MK->getPaymentMethods($context);

print "<pre>";
print_r($data);
print "</pre>";


?>










    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
