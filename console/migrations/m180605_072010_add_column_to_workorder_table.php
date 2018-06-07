<?php

use yii\db\Migration;

/**
 * Class m180605_072010_add_column_to_workorder_table
 */
class m180605_072010_add_column_to_workorder_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('work_order','problem_cause',$this->string());
        $this->addColumn('work_order','problem_date',$this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('work_order','problem_cause');
        $this->dropColumn('work_order','problem_date');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180605_072010_add_column_to_workorder_table cannot be reverted.\n";

        return false;
    }
    */
}
