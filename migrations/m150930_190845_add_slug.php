<?php

use humhub\components\Migration;

class m150930_190845_add_slug extends Migration
{

    public function up()
    {
        $this->addColumn('custom_pages_page', 'slug', 'varchar(255) NULL');
    }

    public function down()
    {
        echo "m150930_190845_add_slug does not support migration down.\n";
        return false;
    }
}
