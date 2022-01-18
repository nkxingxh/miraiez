<?php
$baseDir = empty($_SERVER['DOCUMENT_ROOT']) ? __DIR__ : $_SERVER['DOCUMENT_ROOT'];
define('baseDir', $baseDir);            //定义站点目录

require_once "$baseDir/config.php";
require_once "$baseDir/string.php";
require_once "$baseDir/curl.php";
require_once "$baseDir/easyMirai.php";
require_once "$baseDir/pluginsHelp.php";
require_once "$baseDir/OneBotBridge.php";

$dataDir = getDataDir();
define("dataDir", $dataDir);
define("version", '1.4.0');

require_once "core.php";