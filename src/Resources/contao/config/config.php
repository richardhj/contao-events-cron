<?php

/**
 * This file is part of contao-community-alliance/events-cron.
 *
 * (c) 2013-2018 The Contao Community Alliance.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This project is provided in good faith and hope to be usable by anyone.
 *
 * @package    contao-community-alliance/events-cron
 * @author     Tristan Lins <tristan.lins@bit3.de>
 * @author     Richard Henkenjohann <richardhenkenjohann@googlemail.com>
 * @copyright  2013-2018 The Contao Community Alliance.
 * @license    https://github.com/contao-community-alliance/events-cron/blob/master/LICENSE LGPL-3.0-or-later
 * @filesource
 */

use ContaoCommunityAlliance\Contao\Events\Cron\CronDispatcher;


$GLOBALS['TL_CRON']['monthly'][]  = [CronDispatcher::class, 'monthly'];
$GLOBALS['TL_CRON']['weekly'][]   = [CronDispatcher::class, 'weekly'];
$GLOBALS['TL_CRON']['daily'][]    = [CronDispatcher::class, 'daily'];
$GLOBALS['TL_CRON']['hourly'][]   = [CronDispatcher::class, 'hourly'];
$GLOBALS['TL_CRON']['minutely'][] = [CronDispatcher::class, 'minutely'];