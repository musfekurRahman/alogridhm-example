<?php
use Algorithm\sorting\Sorting;

require_once dirname(__FILE__).'/vendor/autoload.php';
$sorting = new Sorting('bubble');
$sorting->set([5,2,9,7,6]);
echo "<pre>";
print_r($sorting->show());
echo "</pre>";