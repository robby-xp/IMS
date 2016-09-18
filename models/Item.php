<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;

/**
 * This is the model class for table "items".
 *
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property string $unit
 * @property integer $quantity
 * @property integer $stock
 * @property string $price
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 *
 * @property PurchasesDetail[] $purchasesDetails
 * @property SalesDetail[] $salesDetails
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'items';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['quantity', 'stock', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['price'], 'number'],
            [['code', 'name', 'unit'], 'string', 'max' => 255],
        ];
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            BlameableBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Kode',
            'name' => 'Nama',
            'unit' => 'Satuan',
            'quantity' => 'Jumlah',
            'stock' => 'Stok',
            'price' => 'Harga',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPurchasesDetails()
    {
        return $this->hasMany(PurchasesDetail::className(), ['item_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSalesDetails()
    {
        return $this->hasMany(SalesDetail::className(), ['item_id' => 'id']);
    }
}
