<?php

use yii\db\Migration;

/**
 * Handles the creation of table `asset_group`.
 */
class m180602_062052_create_asset_group_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('asset_group', [
            'id' => $this->primaryKey(),
            'asset_group_code'=>$this->string(),
            'name'=>$this->string(),
            'description'=>$this->text(),
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
        $this->dropTable('asset_group');
    }
}
