<?php

namespace Craft;

class CollectionsPlugin extends BasePlugin
{
    public function __construct()
    {
        require_once 'vendor/autoload.php';
    }

    public function getName()
    {
        return 'Collections';
    }

    public function getVersion()
    {
        return '0.1.0';
    }

    public function getDeveloper()
    {
        return 'Venveo';
    }

    public function getDeveloperUrl()
    {
        return 'https://www.venveo.com';
    }
}
