<?php

/**
 * Cron event for Contao Open Source CMS
 * Copyright (C) 2013, 2014 Tristan Lins
 *
 * PHP version 5
 *
 * @copyright  (c) 2013, 2014 Contao Community Alliance
 * @author         Tristan Lins <tristan.lins@bit3.de>
 * @package        events-cron
 * @license        LGPL
 * @filesource
 */

use ContaoCommunityAlliance\Contao\Events\Cron\CronDispatcher;


$GLOBALS['TL_CRON']['monthly'][]  = [CronDispatcher::class, 'monthly'];
$GLOBALS['TL_CRON']['weekly'][]   = [CronDispatcher::class, 'weekly'];
$GLOBALS['TL_CRON']['daily'][]    = [CronDispatcher::class, 'daily'];
$GLOBALS['TL_CRON']['hourly'][]   = [CronDispatcher::class, 'hourly'];
$GLOBALS['TL_CRON']['minutely'][] = [CronDispatcher::class, 'minutely'];
