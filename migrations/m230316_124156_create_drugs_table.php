<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%drugs}}`.
 */
class m230316_124156_create_drugs_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%drugs}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'stock' => Schema::TYPE_DECIMAL . '(10,2) NOT NULL',
            'price' => Schema::TYPE_DECIMAL . '(10,2) NOT NULL',
            'description' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%drugs}}');
    }
}
