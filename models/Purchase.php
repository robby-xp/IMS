<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;

/**
 * This is the model class for table "purchases".
 *
 * @property integer $id
 * @property string $code
 * @property string $supplier
 * @property string $date
 * @property string $total
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 *
 * @property PurchasesDetail[] $purchasesDetails
 */
class Purchase extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'purchases';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date'], 'required'],
            [['date'], 'safe'],
            [['total'], 'number'],
            [['created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['code', 'supplier'], 'string', 'max' => 255],
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
            'supplier' => 'Supplier',
            'date' => 'Tanggal',
            'total' => 'Total',
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
        return $this->hasMany(PurchaseDetail::className(), ['purchase_id' => 'id']);
    }
}
