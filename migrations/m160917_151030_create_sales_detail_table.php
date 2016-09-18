<?php

use yii\db\Migration;

/**
 * Handles the creation for table `sales_detail`.
 */
class m160917_151030_create_sales_detail_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('sales_detail', [
            'id' => $this->primaryKey(),
            'sale_id' => $this->integer()->notNull(),
            'item_id' => $this->integer()->notNull(),
            'quantity' => $this->integer()->notNull(),
            'price' => $this->money()->defaultValue(0)
        ]);

        $this->createIndex(
            'idx-sales_detail-sale_id',
            'sales_detail',
            'sale_id'
        );
        $this->addForeignKey(
            'fk-sales_detail-sale_id',
            'sales_detail',
            'sale_id',
            'sales',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-sales_detail-item_id',
            'sales_detail',
            'item_id'
        );
        $this->addForeignKey(
            'fk-sales_detail-item_id',
            'sales_detail',
            'item_id',
            'items',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('sales_detail');
    }
}
