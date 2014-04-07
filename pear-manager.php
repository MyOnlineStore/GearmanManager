#!/usr/bin/env php
<?php

/**
 * Implements the worker portions of the PEAR Net_Gearman library
 *
 * @author      Brian Moon <brian@moonspot.net>
 * @copyright   1997-Present Brian Moon
 * @package     GearmanManager
 *
 */

/**
 * Uncomment and set to your prefix.
 */
//define("NET_GEARMAN_JOB_CLASS_PREFIX", "");

if (!class_exists('GearmanManager')) {
    require dirname(__FILE__)."/GearmanManager.php";
}

if (!class_exists('GearmanPearManager')) {
    require dirname(__FILE__)."/GearmanPearManager.php";
}

$mgr = new GearmanPearManager();
