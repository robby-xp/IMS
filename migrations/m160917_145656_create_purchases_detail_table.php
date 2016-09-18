<?php

use yii\db\Migration;

/**
 * Handles the creation for table `purchases_detail`.
 */
class m160917_145656_create_purchases_detail_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('purchases_detail', [
            'id' => $this->primaryKey(),
            'purchase_id' => $this->integer()->notNull(),
            'item_id' => $this->integer()->notNull(),
            'quantity' => $this->integer()->notNull(),
            'price' => $this->money()->defaultValue(0)
        ]);

        $this->createIndex(
            'idx-purchases_detail-purchase_id',
            'purchases_detail',
            'purchase_id'
        );
        $this->addForeignKey(
            'fk-purchases_detail-purchase_id',
            'purchases_detail',
            'purchase_id',
            'purchases',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-purchases_detail-item_id',
            'purchases_detail',
            'item_id'
        );
        $this->addForeignKey(
            'fk-purchases_detail-item_id',
            'purchases_detail',
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
        $this->dropTable('purchases_detail');
    }
}
