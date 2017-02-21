<?php
	function whatever($j): float
	{
		if(is_float($j))
		{
			return $j;
		}
		else
		{
			echo 'Invalid entry for method<br />';
			return 0;
		}
	}
	$a = ' eehe';
	echo whatever($a);
?> 