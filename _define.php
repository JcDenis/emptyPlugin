<?php
/**
 * @file
 * @brief       The plugin emptyPlugin definition
 * @ingroup     emptyPlugin
 *
 * @defgroup    emptyPlugin Plugin emptyPlugin.
 *
 * This is an empty plugin.
 *
 * @author      Jean-Christian Denis (author)
 * @copyright   AGPL-3.0
 */
declare(strict_types=1);

$this->registerModule(
    'Empty plugin',
    'This is an empty plugin',
    'Jean-Christian Denis',
    '1.0',
    [
        //'requires'    => [['core', '2.33']],
        'permissions' => null,
        'type'        => 'plugin',
        'support'     => 'https://github.com/JcDenis/emptyPlugin/issues',
    ]
);
