<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 24/2/19
 * Time: 10:24 PM
 */

use codexten\yii\web\Theme;
use codexten\yii\web\widgets\Page;
use dmstr\web\AdminLteAsset;

return [
    'components' => [
        'themeManager' => [
            'defaultTheme' => 'adminLte2',
            'themes' => [
                'adminLte2' => [
                    'class' => Theme::class,
                    'assets' => [
                        AdminLteAsset::class,
                    ],
                ],
            ],
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/views' => [
                        '@codexten/yii/adminlte2/views',
                    ],
                    '@app/widgets/views' => [
                        '@codexten/yii/adminlte2/widgets/views',
                    ],
                    '@codexten/yii/modules/auth/' => [
                        '@codexten/yii/adminlte2/modules/auth/',
                    ],
                ],
            ],
        ],
    ],
    'container' => [
        'definitions' => [
            Page::class => [
                'class' => Page::class,
                'defaultButtonOptions' => [
                    'class' => 'btn',
                ],
            ],
        ],
    ],
];
