<?php

namespace Myrtle\Core\Docks;

use Myrtle\Landing\Policies\LandingPolicy;

class LandingDock extends Dock
{
    /**
     * Description for Dock
     *
     * @var string
     */
    public $description = 'Landing page manager';

    /**
     * Explicit Gate definitions
     *
     * @var array
     */
    public $gateDefinitions = [
        'landing.access.admin' => LandingPolicy::class.'@accessAdmin',
        'landing.admin'        => LandingPolicy::class.'@admin'
    ];

    /**
     * Policy mappings
     *
     * @var array
     */
    public $policies = [
        LandingPolicy::class => LandingPolicy::class
    ];

    /**
     * List of config file paths to be loaded
     *
     * @return array
     */
    public function configPaths()
    {
        return [
            'docks.' . self::class => dirname(__DIR__, 2) . '/config/docks/landing.php',
            'abilities' => dirname(__DIR__, 2) . '/config/abilities.php',
        ];
    }

    /**
     * List of routes file paths to be loaded
     *
     * @return array
     */
    public function routes()
    {
        return [
            'admin' => dirname(__DIR__, 2) . '/routes/admin.php',
            'front' => dirname(__DIR__, 2) . '/routes/front.php',
        ];
    }
}
