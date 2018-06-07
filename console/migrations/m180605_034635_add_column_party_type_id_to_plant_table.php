<?php

use yii\db\Migration;

/**
 * Class m180605_034635_add_column_party_type_id_to_plant_table
 */
class m180605_034635_add_column_party_type_id_to_plant_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('plant','party_type_id',$this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropColumn('plant','party_type_id');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180605_034635_add_column_party_type_id_to_plant_table cannot be reverted.\n";

        return false;
    }
    */
}
