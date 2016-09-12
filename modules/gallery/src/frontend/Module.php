<?php

namespace luya\gallery\frontend;

use luya\base\CoreModuleInterface;

/**
 * Gallery Module
 *
 * @author Basil Suter <basil@nadar.io>
 */
class Module extends \luya\base\Module implements CoreModuleInterface
{
    /**
     * @var boolean This module does not have view files, so the view are looked up in the application folder.
     */
    public $useAppViewPath = true;

    public $urlRules = [
        ['pattern' => 'gallery/kategorie/<catId:\d+>/<title:[a-zA-Z0-9\-]+>/', 'route' => 'gallery/alben/index'],
        ['pattern' => 'gallery/album/<albumId:\d+>/<title:[a-zA-Z0-9\-]+>/', 'route' => 'gallery/album/index'],
    ];

    /**
     * @var string Default route for this module: controller/action
     */
    public $defaultRoute = 'cat';
}
