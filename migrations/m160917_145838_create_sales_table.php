<?php

use yii\db\Migration;

/**
 * Handles the creation for table `sales`.
 */
class m160917_145838_create_sales_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('sales', [
            'id' => $this->primaryKey(),
            'code' => $this->string()->defaultValue(''),
            'customer' => $this->string()->defaultValue(''),
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
        $this->dropTable('sales');
    }
}
