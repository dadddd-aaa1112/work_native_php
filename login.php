<?php

use danog\MadelineProto\API;
use danog\MadelineProto\Logger;
use danog\MadelineProto\Settings;
use danog\MadelineProto\Settings\AppInfo;

require 'vendor\autoload.php';

$settings = new Settings;

$settings->setAppInfo((new AppInfo)
->setApiId(АПИ АЙДИ)
->setApiHash(АПИ ХЭШ));


$MadelineProto = new API('test3.madeline', $settings);
$MadelineProto->start();
$me = $MadelineProto->get_self();

Logger::log($me);

$MadelineProto->messages->sendMessage(['peer' => ВСТАВИТЬ ИД ЧАТА, 'message' => 'send from user account']);

