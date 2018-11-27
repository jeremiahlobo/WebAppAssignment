<?php
 	require 'database/Connection.php';
	require 'database/QueryBuilder.php';

	$app =[];
 	$app ['config'] = require 'config.php';
	$app['database'] = new QueryBuilder(Connection::make($app['config']['database']));
