<?php
define('SYS_DIR',dirname(__FILE__).DIRECTORY_SEPARATOR);
require_once SYS_DIR.'coreclass'.DIRECTORY_SEPARATOR.'base.core.php';
new XcCore('admin');
//new XcDbFactory();
new XcRouting('site');