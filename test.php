<?php

use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;

require_once 'vendor/autoload.php';

$host = 'http://hub:4444/wd/hub';

$driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());

$driver->get('URL');

echo "The title is '" . $driver->getTitle() . "'\n";

$driver->quit();