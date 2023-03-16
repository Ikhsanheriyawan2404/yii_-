<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%actions}}`.
 */
class m230316_131434_create_actions_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%actions}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'price' => Schema::TYPE_DECIMAL . '(10,2) NOT NULL',
            'description' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%actions}}');
    }
}
