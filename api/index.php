<?php

require_once __DIR__ . '/../vendor/autoload.php';

Tracy\Debugger::enable(Tracy\Debugger::DEVELOPMENT);

require_once __DIR__ . '/../app/index.php';
