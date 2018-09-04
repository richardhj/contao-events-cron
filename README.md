[![Build Status](https://travis-ci.org/contao-community-alliance/events-cron.svg)](https://travis-ci.org/contao-community-alliance/events-cron)
[![Latest Version tagged](http://img.shields.io/github/tag/contao-community-alliance/events-cron.svg)](https://github.com/contao-community-alliance/events-cron/tags)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/contao-community-alliance/events-cron.svg)](https://packagist.org/packages/https://github.com/contao-community-alliance/events-cron/tags)
[![Installations via composer per month](https://img.shields.io/packagist/dm/contao-community-alliance/events-cron.svg)](https://packagist.org/packages/contao-community-alliance/events-cron)

Events: Cron
============

Provide the cron hooks as events.

```php
$GLOBALS['TL_EVENTS']['cron.monthly'][] = function($event) {
    // run monthly
};

$GLOBALS['TL_EVENTS']['cron.weekly'][] = function($event) {
    // run weekly
};

$GLOBALS['TL_EVENTS']['cron.daily'][] = function($event) {
    // run daily
};

$GLOBALS['TL_EVENTS']['cron.hourly'][] = function($event) {
    // run hourly
};

$GLOBALS['TL_EVENTS']['cron.minutely'][] = function($event) {
    // run minutely
};
```
