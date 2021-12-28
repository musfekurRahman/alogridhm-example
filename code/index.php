<?php
use Algorithm\sorting\BubbleSort;

require_once dirname(__FILE__).'/vendor/autoload.php';
$sorting = new BubbleSort();
echo $sorting->show();