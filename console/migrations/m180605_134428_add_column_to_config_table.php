<?php

use yii\db\Migration;

/**
 * Class m180605_134428_add_column_to_config_table
 */
class m180605_134428_add_column_to_config_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('config','is_direct_issue',$this->integer());
        $this->addColumn('config','is_bom',$this->integer());
        $this->addColumn('config','is_transfer_asset',$this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('config','is_direct_issue');
        $this->dropColumn('config','is_bom');
        $this->dropColumn('config','is_transfer_asset');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180605_134428_add_column_to_config_table cannot be reverted.\n";

        return false;
    }
    */
}
