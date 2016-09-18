<?php

use yii\db\Migration;

/**
 * Handles the creation for table `item`.
 */
class m160917_142937_create_items_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('items', [
            'id' => $this->primaryKey(),
            'code' => $this->string()->defaultValue(''),
            'name' => $this->string()->notNull(),
            'unit' => $this->string()->defaultValue(''),
            'quantity' => $this->integer()->defaultValue(0),
            'stock' => $this->integer()->defaultValue(0),
            'price' => $this->money()->defaultValue(0),
            'created_at' => $this->integer()->notNull(),
            'created_by' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'updated_by' => $this->integer()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('items');
    }
}
