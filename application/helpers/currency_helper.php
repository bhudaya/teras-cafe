<?php
function to_currency($number)
{
	return 'Rp'.number_format($number, 2, '.', '');
}
?>