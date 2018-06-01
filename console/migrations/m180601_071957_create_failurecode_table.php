<?php

use yii\db\Migration;

/**
 * Handles the creation of table `failurecode`.
 */
class m180601_071957_create_failurecode_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('failurecode', [
            'id' => $this->primaryKey(),
            'failure_code'=>$this->string(),
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
        $this->dropTable('failurecode');
    }
}
