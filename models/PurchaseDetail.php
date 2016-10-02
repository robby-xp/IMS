<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "purchases_detail".
 *
 * @property integer $id
 * @property integer $purchase_id
 * @property integer $item_id
 * @property integer $quantity
 * @property string $price
 *
 * @property Items $item
 * @property Purchases $purchase
 */
class PurchaseDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'purchases_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_id', 'quantity'], 'required'],
            [['purchase_id', 'item_id', 'quantity'], 'integer'],
            [['price'], 'number'],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => Item::className(), 'targetAttribute' => ['item_id' => 'id']],
            [['purchase_id'], 'exist', 'skipOnError' => true, 'targetClass' => Purchase::className(), 'targetAttribute' => ['purchase_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'purchase_id' => 'Purchase ID',
            'item_id' => 'ID Barang',
            'quantity' => 'Jumlah',
            'price' => 'Harga',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItem()
    {
        return $this->hasOne(Item::className(), ['id' => 'item_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPurchase()
    {
        return $this->hasOne(Purchase::className(), ['id' => 'purchase_id']);
    }
}
