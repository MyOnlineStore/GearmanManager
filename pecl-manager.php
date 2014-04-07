#!/usr/bin/env php
<?php

/**
 * Implements the worker portions of the pecl/gearman library
 *
 * @author      Brian Moon <brian@moonspot.net>
 * @copyright   1997-Present Brian Moon
 * @package     GearmanManager
 *
 */

if (!class_exists('GearmanManager')) {
    require dirname(__FILE__)."/GearmanManager.php";
}

if (!class_exists('GearmanPearManager')) {
    require dirname(__FILE__)."/GearmanPeclManager.php";
}

$mgr = new GearmanPeclManager();
