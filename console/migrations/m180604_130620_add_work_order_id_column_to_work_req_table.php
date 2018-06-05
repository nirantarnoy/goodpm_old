<?php

use yii\db\Migration;

/**
 * Handles adding work_order_id to table `work_req`.
 */
class m180604_130620_add_work_order_id_column_to_work_req_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('work_req','work_order_id',$this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('work_req','work_order_id');
    }
}
