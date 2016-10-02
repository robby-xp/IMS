<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sales_detail".
 *
 * @property integer $id
 * @property integer $sale_id
 * @property integer $item_id
 * @property integer $quantity
 * @property string $price
 *
 * @property Items $item
 * @property Sales $sale
 */
class SaleDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sales_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_id', 'quantity'], 'required'],
            [['sale_id', 'item_id', 'quantity'], 'integer'],
            [['price'], 'number'],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => Item::className(), 'targetAttribute' => ['item_id' => 'id']],
            [['sale_id'], 'exist', 'skipOnError' => true, 'targetClass' => Sale::className(), 'targetAttribute' => ['sale_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sale_id' => 'Sale ID',
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
    public function getSale()
    {
        return $this->hasOne(Sale::className(), ['id' => 'sale_id']);
    }
}
