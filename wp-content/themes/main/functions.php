<?php
define('APP_PATH', dirname(__FILE__));
/**
 * CORE Includes
 **/
include APP_PATH.'/inc/define.php';
include APP_PATH.'/inc/setup.php';
include APP_PATH.'/inc/admin/functions.php';
include APP_PATH.'/inc/plugins/acf/functions.php';
foreach (glob(APP_PATH."/inc/frontend"."/*.php") as $filename)
{
    include $filename;
}