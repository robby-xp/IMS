<?php

use yii\db\Migration;

/**
 * Handles the creation for table `purchases`.
 */
class m160917_145105_create_purchases_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('purchases', [
            'id' => $this->primaryKey(),
            'code' => $this->string()->defaultValue(''),
            'supplier' => $this->string()->defaultValue(''),
            'date' => $this->date()->notNull(),
            'total' => $this->money()->defaultValue(0),
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
        $this->dropTable('purchases');
    }
}
