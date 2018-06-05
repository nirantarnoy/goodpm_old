<?php

use yii\db\Migration;

/**
 * Handles the creation of table `work_req`.
 */
class m180604_021553_create_work_req_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('work_req', [
            'id' => $this->primaryKey(),
            'work_req_no'=>$this->string(),
            'work_req_date'=>$this->integer(),
            'name'=>$this->string(),
            'description'=>$this->text(),
            'apporve_by'=>$this->integer(),
            'apporve_date'=>$this->integer(),
            'apporve_note'=>$this->string(),
            'work_type'=>$this->integer(),
            'work_priority'=>$this->integer(),
            'work_title'=>$this->integer(),
            'request_approve'=>$this->integer(),
            'problem_date'=>$this->integer(),
            'request_detail'=>$this->text(),
            'attach_file'=>$this->string(),
            'plant_id'=>$this->integer(),
            'department_id'=>$this->integer(),
            'section_id'=>$this->integer(),
            'location_id'=>$this->integer(),
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
        $this->dropTable('work_req');
    }
}
