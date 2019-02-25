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
                    'pathMap' => [
                        '@app/views' => [
                            '@codexten/yii/adminlte2/views',
                        ],
                        '@app/views/layouts' => [
                            '@codexten/yii/adminlte2/views/layouts',
                        ],
                        '@codexten/yii/modules/auth/' => [
                            '@codexten/yii/adminlte2/modules/auth/',
                        ],
                    ],
                    'assets' => [
                        \dmstr\web\AdminLteAsset::class,
                    ],
                ],
            ],
        ],
    ],
];