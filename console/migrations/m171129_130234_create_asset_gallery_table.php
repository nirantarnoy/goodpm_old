<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product_gallery`.
 */
class m171129_130234_create_asset_gallery_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('asset_gallery', [
            'id' => $this->primaryKey(),
            'asset_id' => $this->integer(),
            'photo' => $this->string(),
            'file_extension' => $this->string(),
            'status' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('asset_gallery');
    }
}
