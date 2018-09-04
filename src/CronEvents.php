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

namespace ContaoCommunityAlliance\Contao\Events\Cron;

/**
 * Class CronEvents
 */
class CronEvents
{
    /**
     * The MONTHLY event occurs monthly.
     *
     * This event allows you to handle monthly actions. The event listener method receives
     * a ContaoCommunityAlliance\Contao\Events\Cron\CronEvent instance.
     *
     * @var string
     *
     * @api
     */
    public const MONTHLY = 'cron.monthly';

    /**
     * The WEEKLY event occurs weekly.
     *
     * This event allows you to handle weekly actions. The event listener method receives
     * a ContaoCommunityAlliance\Contao\Events\Cron\CronEvent instance.
     *
     * @var string
     *
     * @api
     */
    public const WEEKLY = 'cron.weekly';

    /**
     * The DAILY event occurs daily.
     *
     * This event allows you to handle daily actions. The event listener method receives
     * a ContaoCommunityAlliance\Contao\Events\Cron\CronEvent instance.
     *
     * @var string
     *
     * @api
     */
    public const DAILY = 'cron.daily';

    /**
     * The HOURLY event occurs hourly.
     *
     * This event allows you to handle hourly actions. The event listener method receives
     * a ContaoCommunityAlliance\Contao\Events\Cron\CronEvent instance.
     *
     * @var string
     *
     * @api
     */
    public const HOURLY = 'cron.hourly';

    /**
     * The MINUTELY event occurs minutely.
     *
     * This event allows you to handle minutely actions. The event listener method receives
     * a ContaoCommunityAlliance\Contao\Events\Cron\CronEvent instance.
     *
     * @var string
     *
     * @api
     */
    public const MINUTELY = 'cron.minutely';
}
