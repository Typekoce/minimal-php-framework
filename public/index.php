<?php

namespace App;

$dir = dirname(dirname(__FILE__));

require_once $dir . '/app/core/App.php';

$conf['dir'] = $dir;

$app = new Core\App\App($conf);


?>