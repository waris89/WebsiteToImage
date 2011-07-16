<?php

require_once 'WebsiteToImage.php';

$websiteToImage = new WebsiteToImage();
$websiteToImage->setProgramPath('/usr/local/bin/wkhtmltoimage-i386')
               ->setOutputPath('www.phpgangsta.de.jpg')
               ->setQuality(70)
               ->setUrl('http://www.phpgangsta.de');
$websiteToImage->start();