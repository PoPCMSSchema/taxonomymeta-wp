<?php

declare(strict_types=1);

namespace PoPSchema\TaxonomyMetaWP;

use PoP\Root\Component\AbstractComponent;

/**
 * Initialize component
 */
class Component extends AbstractComponent
{
    // const VERSION = '0.1.0';

    public static function getDependedComponentClasses(): array
    {
        return [
            \PoPSchema\TaxonomyMeta\Component::class,
            \PoPSchema\TaxonomiesWP\Component::class,
        ];
    }

    public static function getDependedMigrationPlugins(): array
    {
        return [
            'migrate-taxonomymeta-wp',
        ];
    }
}
