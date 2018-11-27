<?php
include 'core/Agent.php';
include 'core/functions.php';

$agent = new Agent($app['config']['database']);
function getallAgents()
{
  global $agent;
  return $agent->allAgents();
}
