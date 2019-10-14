<?php

use Telegram\Bot\Api;

set_time_limit(0);

include "vendor/autoload.php";

$app = new App();

while (true) {
    $app->loop();
}