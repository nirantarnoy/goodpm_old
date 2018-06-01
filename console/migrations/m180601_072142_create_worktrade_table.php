<?php

use yii\db\Migration;

/**
 * Handles the creation of table `worktrade`.
 */
class m180601_072142_create_worktrade_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('worktrade', [
            'id' => $this->primaryKey(),
            'worktrade_code'=>$this->string(),
            'name'=>$this->string(),
            'description'=>$this->text(),
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
        $this->dropTable('worktrade');
    }
}
