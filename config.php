<?php

use humhub\modules\user\widgets\AccountMenu;
use humhub\modules\admin\widgets\AdminMenu;
use humhub\widgets\TopMenu;

return [
    'id' => 'custom_pages',
    'class' => 'humhub\modules\custom_pages\Module',
    'namespace' => 'humhub\modules\custom_pages',
    'events' => [
        ['class' => AdminMenu::className(), 'event' => AdminMenu::EVENT_INIT, 'callback' => ['humhub\modules\custom_pages\Events', 'onAdminMenuInit']],
        ['class' => TopMenu::className(), 'event' => TopMenu::EVENT_INIT, 'callback' => ['humhub\modules\custom_pages\Events', 'onTopMenuInit']],
        ['class' => AccountMenu::className(), 'event' => AccountMenu::EVENT_INIT, 'callback' => ['humhub\modules\custom_pages\Events', 'onAccountMenuInit']],
        ['class' => humhub\modules\space\widgets\Menu::className(), 'event' => humhub\modules\space\widgets\Menu::EVENT_INIT, 'callback' => ['humhub\modules\custom_pages\Events', 'onSpaceMenuInit']],
        ['class' => humhub\modules\space\widgets\AdminMenu::className(), 'event' => humhub\modules\space\widgets\AdminMenu::EVENT_INIT, 'callback' => ['humhub\modules\custom_pages\Events', 'onSpaceAdminMenuInit']],
    ],
];
?>