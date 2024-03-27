<?php
require 'vendor/autoload.php'; // Path to autoload.php

\Stripe\Stripe::setApiKey('your_secret_key');

$paymentMethod = \Stripe\PaymentMethod::create([
  'type' => 'card',
  'card' => [
    'number' => '4242424242424242',
    'exp_month' => 12,
    'exp_year' => 2023,
    'cvc' => '123',
  ],
]);

echo $paymentMethod;
?>