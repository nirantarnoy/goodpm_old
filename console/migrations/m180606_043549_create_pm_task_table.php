<?php

use yii\db\Migration;

/**
 * Handles the creation of table `pm_task`.
 */
class m180606_043549_create_pm_task_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('pm_task', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'description'=>$this->text(),
            'attach_file'=>$this->string(),
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
        $this->dropTable('pm_task');
    }
}
