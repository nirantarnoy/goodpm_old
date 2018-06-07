<?php

use yii\db\Migration;

/**
 * Handles the creation of table `pm_plan`.
 */
class m180606_042757_create_pm_plan_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('pm_plan', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(),
            'department_id'=>$this->integer(),
            'section_id'=>$this->integer(),
            'location_id'=>$this->integer(),
            'asset_id'=>$this->integer(),
            'pm_task_id'=>$this->integer(),
            'is_multi_pm'=>$this->integer(),
            'interval_type'=>$this->integer(),
            'interval_qty'=>$this->integer(),
            'preriod'=>$this->integer(),
            'target_start'=>$this->integer(),
            'target_complete'=>$this->integer(),
            'last_gen'=>$this->integer(),
            'next_start'=>$this->integer(),
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
        $this->dropTable('pm_plan');
    }
}
