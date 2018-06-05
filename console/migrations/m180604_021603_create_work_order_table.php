<?php

use yii\db\Migration;

/**
 * Handles the creation of table `work_order`.
 */
class m180604_021603_create_work_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('work_order', [
            'id' => $this->primaryKey(),
            'work_order_no'=>$this->string(),
            'work_order_date'=>$this->integer(),
            'name'=>$this->string(),
            'description'=>$this->text(),
            'action_by'=>$this->integer(),
            'action_date'=>$this->integer(),
            'action_note'=>$this->string(),
            'vendor_id'=>$this->integer(),
            'work_trade'=>$this->integer(),
            'work_type'=>$this->integer(),
            'work_priority'=>$this->integer(),
            'work_title'=>$this->integer(),
            'request_detail'=>$this->text(),
            'work_req_id'=>$this->integer(),
            'attach_file'=>$this->string(),
            'plant_id'=>$this->integer(),
            'department_id'=>$this->integer(),
            'section_id'=>$this->integer(),
            'location_id'=>$this->integer(),
            'estimate_start_date'=>$this->integer(),
            'estimate_end_date'=>$this->integer(),
            'actual_start_date'=>$this->integer(),
            'actual_end_date'=>$this->integer(),
            'actual_asset_start_date'=>$this->integer(),
            'asset_id'=>$this->integer(),
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
        $this->dropTable('work_order');
    }
}
