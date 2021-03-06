<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%rubrics_tbl}}`.
 */
class m190301_063844_create_rubrics_tbl_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%rubrics_tbl}}', [
            'id' => $this->primaryKey(),
            'lft' => $this->integer()->notNull(),
            'rgt' => $this->integer()->notNull(),
            'depth' => $this->integer()->notNull(),
            'name' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%rubrics_tbl}}');
    }
}
