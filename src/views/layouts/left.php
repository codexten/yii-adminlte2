<?php

$menuItems = require(Yii::getAlias('@codexten/yii/adminlte2/views/layouts/blocks/leftMenuItems.php'));
?>

<aside class="main-sidebar">

    <section class="sidebar">

        <?php if (false): ?>

            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
                </div>
                <div class="pull-left info">
                    <p>Alexander Pierce</p>

                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

        <?php endIf; ?>

        <?php if (false): ?>

            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search..."/>
                    <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->

        <?php endIf; ?>

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                'items' => $menuItems,
            ]
        ) ?>

    </section>

</aside>
