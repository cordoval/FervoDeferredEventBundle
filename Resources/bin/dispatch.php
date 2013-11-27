<?php

set_time_limit(0);

require_once '../app/bootstrap.php.cache';
require_once '../app/AppKernel.php';

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Input\ArgvInput;

$input = new ArgvInput(['dispatch.php', 'fervo:deferred-event:dispatch', $_SERVER['DEFERRED_DATA']]);

$kernel = new AppKernel('dev', true);
$application = new Application($kernel);
$application->run($input);
