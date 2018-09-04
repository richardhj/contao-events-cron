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

use Contao\System;
use Symfony\Component\DependencyInjection\Exception\ServiceCircularReferenceException;
use Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Class CronDispatcher
 */
class CronDispatcher
{
    /**
     * Dispatch monthly cron
     *
     * @throws ServiceNotFoundException
     * @throws ServiceCircularReferenceException
     */
    public function monthly()
    {
        $eventDispatcher = $this->getEventDispatcher();
        $eventDispatcher->dispatch(CronEvents::MONTHLY, new CronEvent('monthly'));
    }

    /**
     * Dispatch weekly cron
     *
     * @throws ServiceNotFoundException
     * @throws ServiceCircularReferenceException
     */
    public function weekly()
    {
        $eventDispatcher = $this->getEventDispatcher();
        $eventDispatcher->dispatch(CronEvents::WEEKLY, new CronEvent('weekly'));
    }

    /**
     * Dispatch daily cron
     *
     * @throws ServiceNotFoundException
     * @throws ServiceCircularReferenceException
     */
    public function daily()
    {
        $eventDispatcher = $this->getEventDispatcher();
        $eventDispatcher->dispatch(CronEvents::DAILY, new CronEvent('daily'));
    }

    /**
     * Dispatch hourly cron
     *
     * @throws ServiceNotFoundException
     * @throws ServiceCircularReferenceException
     */
    public function hourly()
    {
        $eventDispatcher = $this->getEventDispatcher();
        $eventDispatcher->dispatch(CronEvents::HOURLY, new CronEvent('hourly'));
    }

    /**
     * Dispatch minutely cron
     *
     * @throws ServiceNotFoundException
     * @throws ServiceCircularReferenceException
     */
    public function minutely()
    {
        $eventDispatcher = $this->getEventDispatcher();
        $eventDispatcher->dispatch(CronEvents::MINUTELY, new CronEvent('minutely'));
    }

    /**
     * Return the event dispatcher.
     *
     * @return EventDispatcherInterface
     *
     * @throws ServiceNotFoundException
     * @throws ServiceCircularReferenceException
     */
    public function getEventDispatcher()
    {
        $dispatcher = System::getContainer()->get('event_dispatcher');

        /** @var EventDispatcherInterface $dispatcher */
        return $dispatcher;
    }
}
