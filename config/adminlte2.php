<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 24/2/19
 * Time: 10:24 PM
 */

return [
    'components' => [
        'themeManager' => [
            'defaultTheme' => 'adminLte2',
            'themes' => [
                'adminLte2' => [
                    'class' => \codexten\yii\web\Theme::class,
                    'assets' => [
                        \dmstr\web\AdminLteAsset::class,
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
            \codexten\yii\web\widgets\Page::class => [
                'class' => \codexten\yii\web\widgets\Page::class,
                'defaultButtonOptions' => [
                    'class' => 'btn',
                ],
            ],
        ],
    ],
];