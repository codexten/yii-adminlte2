<?php

namespace codexten\yii\adminlte2\widgets;

use \dmstr\widgets\Menu as BaseMenu;

class Menu extends BaseMenu
{
    public function init()
    {
        BaseMenu::$iconClassPrefix = 'fas fa-';
        parent::init();
    }

}
