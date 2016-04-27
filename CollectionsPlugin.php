<?php

namespace Craft;

class CollectionsPlugin extends BasePlugin
{
    /**
     * CollectionsPlugin constructor.
     */
    public function __construct()
    {
        require_once 'vendor/autoload.php';
    }

    /**
     * Define the plugins name
     *
     * @return string
     */
    public function getName()
    {
        return 'Collections';
    }

    /**
     * Define the plugins description
     *
     * @return string
     */
    public function getDescription()
    {
        return 'Use Laravel Collections in Craft Plugins.';
    }

    /**
     * Define the plugins version
     *
     * @return string
     */
    public function getVersion()
    {
        return '0.1.0';
    }

    /**
     * Define the schema version
     *
     * @return string
     */
    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    /**
     * URL to releases.json
     *
     * @return string
     */
    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/venveo/craft-collections/master/releases.json';
    }

    /**
     * Documentation URL
     *
     * @return string
     */
    public function getDocumentationUrl()
    {
        return 'https://github.com/venveo/craft-collections';
    }

    /**
     * Get the Developer
     *
     * @return string
     */
    public function getDeveloper()
    {
        return 'Venveo';
    }

    /**
     * Define the developers website.
     *
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'https://www.venveo.com';
    }

    /**
     * Get the settings template.
     *
     * @return string
     */
    public function getSettingsHtml()
    {
        return craft()->templates->render('collections/settings');
    }
}
