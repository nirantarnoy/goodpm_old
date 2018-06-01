<?php

use yii\db\Migration;

/**
 * Handles the creation of table `asset`.
 */
class m180601_064036_create_asset_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('asset', [
            'id' => $this->primaryKey(),
            'asset_code'=>$this->string(),
            'name'=> $this->string(),
            'description'=>$this->string(),
            'asset_category_id'=>$this->integer(),
            'plant_id'=>$this->string(),
            'location_id'=>$this->integer(),
            'department_id'=>$this->integer(),
            'section_id'=>$this->integer(),
            'worktrade_id'=>$this->integer(),
            'priority_id'=>$this->integer(),
            'supplier_id'=>$this->integer(),
            'manufacturer'=>$this->string(),
            'model'=>$this->string(),
            'serial_no'=>$this->string(),
            'service_no'=>$this->string(),
            'install_date'=>$this->integer(),
            'install_by'=>$this->integer(),
            'responsible'=>$this->integer(),
            'counting_group'=>$this->integer(),
            'critical_type'=>$this->integer(),
            'last_pm'=>$this->integer(),
            'next_pm'=>$this->integer(),
            'cost'=>$this->float(),
            'value_amount'=>$this->float(),
            'incoming_date'=>$this->integer(),
            'expiration_date'=>$this->integer(),
            'default_location'=>$this->integer(),
            'notes'=>$this->text(),
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
        $this->dropTable('asset');
    }
}
