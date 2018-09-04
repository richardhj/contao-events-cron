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

use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Class CronDispatcher
 */
class CronDispatcher
{

    /**
     * @var EventDispatcherInterface
     */
    private $dispatcher;

    /**
     * CronDispatcher constructor.
     *
     * @param EventDispatcherInterface $dispatcher The event dispatcher.
     */
    public function __construct(EventDispatcherInterface $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    /**
     * Dispatch monthly cron
     */
    public function monthly()
    {
        $this->dispatcher->dispatch(CronEvents::MONTHLY, new CronEvent('monthly'));
    }

    /**
     * Dispatch weekly cron
     */
    public function weekly()
    {
        $this->dispatcher->dispatch(CronEvents::WEEKLY, new CronEvent('weekly'));
    }

    /**
     * Dispatch daily cron
     */
    public function daily()
    {
        $this->dispatcher->dispatch(CronEvents::DAILY, new CronEvent('daily'));
    }

    /**
     * Dispatch hourly cron
     */
    public function hourly()
    {
        $this->dispatcher->dispatch(CronEvents::HOURLY, new CronEvent('hourly'));
    }

    /**
     * Dispatch minutely cron
     */
    public function minutely()
    {
        $this->dispatcher->dispatch(CronEvents::MINUTELY, new CronEvent('minutely'));
    }
}
