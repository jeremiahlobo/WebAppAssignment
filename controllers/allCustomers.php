<?php
include 'core/Customer.php';
include 'core/functions.php';

$customer = new Customer($app['config']['database']);
function getallCustomers()
{
  global $customer;
  return $customer->allCustomers();
}
