<?php

use yii\db\Migration;

/**
 * Handles the creation of table `pm_plan_gen`.
 */
class m180606_044048_create_pm_plan_gen_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('pm_plan_gen', [
            'id' => $this->primaryKey(),
            'last_date'=>$this->integer(),
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
        $this->dropTable('pm_plan_gen');
    }
}
