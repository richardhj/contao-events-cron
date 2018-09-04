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


$GLOBALS['TL_CRON']['monthly'][]  = ['cca.events_cron.cron_dispatcher', 'monthly'];
$GLOBALS['TL_CRON']['weekly'][]   = ['cca.events_cron.cron_dispatcher', 'weekly'];
$GLOBALS['TL_CRON']['daily'][]    = ['cca.events_cron.cron_dispatcher', 'daily'];
$GLOBALS['TL_CRON']['hourly'][]   = ['cca.events_cron.cron_dispatcher', 'hourly'];
$GLOBALS['TL_CRON']['minutely'][] = ['cca.events_cron.cron_dispatcher', 'minutely'];
