<?php

require "BusinessCustomer.php";
require "CustomerConsoleFormatter.php";

$netigo = new BusinessCustomer(1337, "Netigo AB");
$google = new BusinessCustomer(666, "Google Inc");

echo (new CustomerConsoleFormatter)->printArray([$netigo,$google]);