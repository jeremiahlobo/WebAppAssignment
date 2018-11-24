<?php

	function diedump ($data)
	{
		echo '<pre>';
		var_dump($data);
		echo '</pre>';
	}

	function redirect($url)
	{
	    header("Location: $url");
	}