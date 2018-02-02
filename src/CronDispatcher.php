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
