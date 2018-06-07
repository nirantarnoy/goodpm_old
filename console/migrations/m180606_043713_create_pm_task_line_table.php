<?php

use yii\db\Migration;

/**
 * Handles the creation of table `pm_task_line`.
 */
class m180606_043713_create_pm_task_line_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('pm_task_line', [
            'id' => $this->primaryKey(),
            'task_id'=>$this->integer(),
            'line_number'=>$this->integer(),
            'name'=>$this->string(),
            'description'=>$this->text(),
            'accept_level'=>$this->float(),
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
        $this->dropTable('pm_task_line');
    }
}
