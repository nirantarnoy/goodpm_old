<?php

use yii\db\Migration;

/**
 * Handles the creation of table `asset_addinfo`.
 */
class m180601_071628_create_asset_addinfo_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('asset_addinfo', [
            'id' => $this->primaryKey(),
            'asset_id'=>$this->integer(),
            'additional_type'=>$this->integer(),
            'name'=>$this->string(),
            'description'=>$this->text(),
            'filename'=>$this->string(),
            'status' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('asset_addinfo');
    }
}
